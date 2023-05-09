<?php

namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Category;
use App\Entity\Lignepanier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AllusersRepository;
use App\Repository\PanierRepository;
use App\Repository\LignepanierRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\ProduitsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produits;

class PanierMobileController extends AbstractController
{
    #[Route('/panier/mobile', name: 'app_panier_mobile')]
    public function index(): Response
    {
        return $this->render('panier_mobile/index.html.twig', [
            'controller_name' => 'PanierMobileController',
        ]);
    }



 // T'affichi elli fi  west el panier 
    #[Route('/showPanierJson', name: 'app_AffichepanierJSON')]
    public function AfficherPanierJson(PanierRepository $panierRep,AllusersRepository $ur,LignepanierRepository $rep, NormalizerInterface $Normalizer,EntityManagerInterface $entityManager):Response
    {   
       // Get the panier corresponding to the user
    $panier = $panierRep->findOneBy(['id_user' => 1]);

    $idpanier=$panier->getidpanier();
     
    // Récupérer le panier correspondant à $idpanier
   // $panier = $entityManager->getRepository(Panier::class)->find(['idpanier' => $idpanier]);

   // Get the lignesPanier for the given panier
  // $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $idpanier]);

  $lignesPanier = $rep->findBy(['idpanier' => $idpanier]);
      //  $produits = $rep->findBy(['panier' => $idpanier]); 
  
       
      $jsonContent = $Normalizer->normalize($lignesPanier, 'json', ['groups' => [ 'lignepaniers','produits','categ']]);
        return new Response(json_encode($jsonContent));
    }


    /*
    ###supprimer un produit du panier 
    #[Route('/deleteligneJson/{idlignepanier}', name: 'app_lignepanier_delete_Json', methods: ['GET', 'POST'])]
    public function deleteLigneJson(int $idlignepanier, ManagerRegistry $doctrine, LignepanierRepository $rep, SerializerInterface $serializer): JsonResponse
    {
        $entityManager = $doctrine->getManager();
        $lignePanier = $rep->find($idlignepanier);
        $idpanier = $lignePanier->getIdpanier();
        $entityManager->remove($lignePanier);
        $entityManager->flush();
    
        $data = [
            'status' => 200,
            'message' => 'La ligne de panier a été supprimée avec succès.',
            'idpanier' => $idpanier->getIdpanier(),
        ];
        
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse($jsonContent, 200, [], true);
    }
*/

   //Fonction qui supprime un produit du panier 
   #[Route('/deleteligneJson/{idlignepanier}', name: 'app_lignepanier_delete_Json', methods: ['GET', 'POST'])]
   public function deleteLigneJson(int $idlignepanier,ManagerRegistry $doctrine,LignepanierRepository $rep,NormalizerInterface $Normalizer): Response
{
    $entityManager = $doctrine->getManager();
    $lignePanier = $rep->find($idlignepanier);
    //Supprimer la ligne panier
    $entityManager->remove($lignePanier);
    $entityManager->flush();
    $jsonContent = $Normalizer->normalize($lignePanier,'json',['groups'=>'lignepaniers']);
    return new Response("Produit Supprimé avec succès du panier".json_encode($jsonContent));
    
}

###trajja3 el produit elli fel ligne panier 
#[Route('/showPanierJson2', name: 'app_AffichepanierJSON2')]
public function AfficherPanierProduits(PanierRepository $panierRep, AllusersRepository $ur, LignepanierRepository $rep, ProduitsRepository $produitsRep, NormalizerInterface $Normalizer, EntityManagerInterface $entityManager): Response
{
    // Get the panier corresponding to the user
    $panier = $panierRep->findOneBy(['id_user' => 1]);

    $idpanier=$panier->getidpanier();

    // Get the lignesPanier for the given panier
    $lignesPanier = $rep->findBy(['idpanier' => $idpanier]);

    // Create a DTO to store the normalized data for each lignePanier with associated Produit
    $lignesPanierProduits = [];
    foreach ($lignesPanier as $lignePanier) {
        // Get the associated Produit for the given lignePanier
        $produit = $produitsRep->find($lignePanier->getIdproduit());
    
        // Normalize the Produit object
        $normalizedProduit = $Normalizer->normalize($produit, 'json', ['groups' => ['produits', 'categ']]);
    
        // Add the normalized "produit" object to the final array
        $lignesPanierProduits[] = $normalizedProduit;
    }

    // Return the normalized DTO as a JSON response
    return new Response(json_encode($lignesPanierProduits));
}


### Ajouter un prod au panier 
#[Route('/addJson/{idproduit}', name: 'add_product_Panier-Json')]

public function ajouterProduitAuPanierJson(Request $request,PanierRepository $panierRep, Produits $produit, ProduitsRepository $produitRepository, EntityManagerInterface $entityManager, SessionInterface $session, NormalizerInterface $Normalizer): Response
{ $date = new \DateTime();
     // On récupère le panier actuel
     $panier = $panierRep->findOneBy(['id_user' => 1]);
     $lpexist = $entityManager->getRepository(LignePanier::class)->findOneBy(['idproduit' =>$produit, 'idpanier' => $panier]);
    

    if ($lpexist  !== null) {
        // Le produit existe déjà dans le panier, on ne fait rien
        $jsonContent = $Normalizer->normalize($lpexist, 'json', ['groups' => ['lignepaniers']]);
        return new Response(json_encode(['message' => 'Produit existe déjà dans le panier', 'produit' => $jsonContent]));

    }
   else {
    // Le produit n'existe pas dans le panier, on l'ajoute
    $lignePanier = new LignePanier();
    $lignePanier->setDateajout($date);
    $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));     ###id statique jusqu'à intégration 
    $lignePanier->setIdproduit($produit);
    $entityManager->persist($lignePanier);
    $entityManager->flush();
    

    $session->set('panier', $panier);

    $jsonContent = $Normalizer->normalize($lignePanier,'json',['groups'=>['lignepaniers', 'produits']]);
    return new Response("Le produit est ajouté au panier avec succès".json_encode($jsonContent));
    
}
    
}


















}
