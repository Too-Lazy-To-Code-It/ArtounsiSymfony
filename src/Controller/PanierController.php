<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Entity\Lignepanier;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use App\Repository\ProduitsRepository;
use App\Repository\LignepanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\VarDumper\VarDumper;
use App\Controller\FlashyNotifier;



#[Route('/panier')]
class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier_index', methods: ['GET'])]
    public function index(PanierRepository $panierRepository): Response
    {
        return $this->render('panier/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
        ]);
    }

    public function add($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
 
        $session->set('panier', $panier);
        dd($session->get('panier'));
    }



 #### Méthode d'affichage d'un panier selon l'id panier , et aussi calcul du montant total 

 #[Route('/showpanier/{idpanier}', name: 'app_panier_show', methods: ['GET'])]
public function show(int $idpanier, LignepanierRepository $lignepanierRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $idpanier]);
    $total = 0;
    $tauxTVA = 0.19;
    $nomsProduits = array();
    
    foreach ($lignesPanier as $ligne) {
        $valTVA = $ligne->getIdproduit()->getPrix() * $tauxTVA;
        $prixavecTVA = $ligne->getIdproduit()->getPrix() + $valTVA;
        $total += $prixavecTVA;
        $nomsProduits[] = $ligne->getIdproduit()->getNom();
    }
    
    // Enregistrer les valeurs en session
    
    $session->set('total', $total);
    $session->set('nomsProduits', $nomsProduits);
    $session->set('lignesPanier', $lignesPanier);
    

    // Récupérer le panier correspondant à $idpanier
    $panier = $entityManager->getRepository(Panier::class)->find($idpanier);
   
    // Mettre à jour le nombre de produits et le montant total
    $count = count($lignesPanier);
    $panier->setNbrProduits($count);
    $panier->setMontantTotal($total);


    $session->set('panier', $panier);


    // Enregistrer les modifications dans la base de données
    $entityManager->flush();

    return $this->render('panier/show.html.twig', [
        'idpanier' => $idpanier,
        'tauxTVA' => $tauxTVA,
        'total' => $total,
        'count' => $count,
        'lignesPanier' => $lignesPanier,
    ]);
}


 
/*

####Méthode d' ajout d'un produit au panier 

    #[Route('/panier/add/{idproduit}', name: 'add_product')]
    public function addProduct(Produits $product, EntityManagerInterface $entityManager, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get('panier', []);
        $date = new \DateTime();

      

    
        // Le produit n'est pas encore dans le panier, on l'ajoute
        $lignePanier = new LignePanier();
        $lignePanier->setDateajout($date);
        $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));     ###id statique jusqu'à intégration 
        $lignePanier->setIdproduit($product);
    
        $entityManager->persist($lignePanier);
      
        $entityManager->flush();
    
        
    
        // On sauvegarde dans la session
        $session->set('panier', $panier);
    
        return $this->redirectToRoute('app_produits_index');
    }
  */


    public function addProduct(int $idproduit ,Produits $product, EntityManagerInterface $entityManager,LignepanierRepository $lignepanierRepository, SessionInterface $session, ProduitsRepository $produitRep)
    {  
        // On récupère le panier actuel
        $panier = $session->get('panier', []);
        $date = new \DateTime();

       
        $produit = $produitRep->find($idproduit);
       
        $produitsDansPanier = $lignepanierRepository->findBy(['idpanier' => $panier]);
        $panier = $entityManager->getRepository(Panier::class)->find($idpanier);
        $verifier  = true;

        // On cherche si le produit existe déjà dans le panier
        foreach ($produitsDansPanier as  $item) {
            if ($item->getIdproduit() === $product->getIdproduit()) {
                // Le produit existe déjà
              
                return $this->redirectToRoute('app_produits_index');
            }
        }
        
        // Le produit n'est pas encore dans le panier, on l'ajoute
        $lignePanier = new LignePanier();
        $lignePanier->setDateajout($date);
        $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));     ###id statique jusqu'à intégration 
        $lignePanier->setIdproduit($product);
        $entityManager->persist($lignePanier);
        $entityManager->flush();
    
        // On sauvegarde dans la session
        $panier[] = [
            'idproduit' => $product->getIdproduit(),
     
        ];
        $session->set('panier', $panier);
    
        return $this->redirectToRoute('app_produits_index');
    }
    

/*
//Méthode qui ajoute un produit au panier 
#[Route('/ajouter-produit-au-panier/{idproduit}', name:'ajouter_produit_panier')]
public function ajouterProduitDansPanier(int $idproduit, LignepanierRepository $lr, PanierRepository $pr, UserRepository $ur, ProduitRepository $repproduit): Response
{
$user = $ur->find(22);
$panier = $pr->findOneBy(['user' => $user]);
$produit = $repproduit->find($idproduit);
$entityManager = $this->getDoctrine()->getManager();
//recupérer tous les produits du panier
$produits_par_panier=$lr->findBy(['panier' => $panier]);
$id =$panier->getId();
$verif = true;

//parcourir les produits du panier
foreach ($produits_par_panier as $p) {
    
    if ($p->getProduit() == $produit) {
        //le produit existe dans le panier --> mettre à jours sa quantité 

        //Wali enty houni fi outh ma taaml l ostra hethy kol abaathlou notification bel addfluh bundle 
        //kolou raw l produit mawjoud fel panier
        $p->setQuantite($p->getQuantite() + 1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($p);
        $entityManager->flush();
        return $this->redirectToRoute("app_marketplace", ['id' => $id]);
    } 
    else {
       $verif=false;
 }
}

       if ($verif==false){
        // Le produit n'est pas encore dans le panier, on crée une nouvelle ligne panier
        $lignePanier = new Lignepanier();
        $lignePanier->setProduit($produit);
        $lignePanier->setPanier($panier);
        $lignePanier->setQuantite(1);
        $lignePanier->setPrix($produit->getPrixProd());
        $lignePanier->setNomProduit($produit->getNomProd());
        $lignePanier->setDescriptionProd($produit->getDescriptionProd());
        $lignePanier->setImage($produit->getImage());
        $entityManager->persist($lignePanier);
        $entityManager->flush();
   }

 // Rediriger vers la page d'affichage des produits en passant l'ID du panier
return $this->redirectToRoute("app_marketplace", ['id' => $id]);

}


*/
#[Route('/panier/add/{idproduit}', name: 'add_product')]
public function ajouterProduitAuPanier(Request $request, Produits $produit, ProduitsRepository $produitRepository, EntityManagerInterface $entityManager, SessionInterface $session,FlashyNotifier $flashy): Response
{ $date = new \DateTime();
     // On récupère le panier actuel
     $panier = $session->get('panier', []);
     $lpexist = $entityManager->getRepository(LignePanier::class)->findOneBy(['idproduit' =>$produit, 'idpanier' => $panier]);
    

    if ($lpexist  !== null) {
        // Le produit existe déjà dans le panier, on ne fait rien
        $this->addFlash('warning', 'Le produit a déjà été ajouté au panier.');
        $flashy->success('Event created!', 'http://your-awesome-link.com');
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
    $this->addFlash('success', 'Le produit a été ajouté au panier.');
    }
    return $this->redirectToRoute('app_produits_index');
}







 #######




    #[Route('/viderpanier/{idpanier}', name: 'viderpanier')]
    public function ViderPanier(string $idpanier,ManagerRegistry $doctrine,SessionInterface $session,LignepanierRepository $rep): Response
  {  
    // On récupère le panier actuel
    $panier = $session->get('panier', []);
    
    $idpanier = intval($idpanier); // convert the string to an integer
      $entityManager = $doctrine->getManager();
     
      $lignesPanier = $rep->findBy(['idpanier' => $idpanier]);
      
  
 

      foreach ($lignesPanier as $lignePanier) {
         
          $entityManager->remove($lignePanier);
          
      }
      


      // Vider le panier dans la session
      $session->set('panier', []);
      $entityManager->flush();



     // Rediriger vers la page d'affichage du panier en passant l'ID du panier

     return $this->render('panier/show.html.twig', [
        'idpanier' => 1,
        'lignesPanier' => $lignesPanier,
        'tauxTVA' => 0.19,
        'total' => 0,
        'count' => 0,
    ]);
}



 /* 
#[Route('/viderpanier/{idpanier}', name: 'viderpanier')]
public function ViderPanier(string $idpanier, ManagerRegistry $doctrine, SessionInterface $session, LignepanierRepository $rep, ProduitsRepository $produitRep): Response
{
    $idpanier = intval($idpanier); // convert the string to an integer
    $entityManager = $doctrine->getManager();
    $panier = $entityManager->getRepository(Panier::class)->find($idpanier);
    $lignesPanier = $rep->findBy(['idpanier' => $idpanier]);

    foreach ($lignesPanier as $lignePanier) {
        $produit = $lignePanier->getIdProduit();
        $entityManager->remove($lignePanier);
        $entityManager->persist($produit);
    }

    $entityManager->flush();

    // Vider le panier dans la session
    $session->set('panier', []);

    // Rediriger vers la page d'affichage du panier en passant l'ID du panier
    return $this->redirectToRoute('app_panier_show', [
        'idpanier' => $idpanier,
        'lignesPanier' => $lignesPanier,
        'tauxTVA' => 0.19,
        'total' => 0,
        'count' => 0,
    ]);
}

*/

    




}
