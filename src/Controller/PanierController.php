<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Entity\Lignepanier;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use App\Repository\LignepanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Cookie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\Persistence\ManagerRegistry;

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
public function show(int $idpanier, LignepanierRepository $lignepanierRepository, SessionInterface $session, ManagerRegistry $doctrine): Response
{
    $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $idpanier]);
    $total = 0;
    $tauxTVA = 0.19;
    $montantHorsTVA=0;
    $montantTVA=0;
    $count = count($lignesPanier);
    $prixavecTVA=0;
    $montantTotal=0;
    foreach ($lignesPanier as $ligne) {
        $prix = $ligne->getIdproduit()->getPrix();
        $montantHorsTVA = $prix / (1 + $tauxTVA);
        $montantTVA = $prix - $montantHorsTVA;
        $montantTotal = $prix + $montantTVA;
        $total += $montantTotal;
    }

    // Enregistrer la valeur de $total en session
    $session->set('total', $total);

    // Récupérer le panier correspondant à $idpanier
    $entityManager = $this->getDoctrine()->getManager();
    $panier = $entityManager->getRepository(Panier::class)->find($idpanier);

    // Mettre à jour le nombre de produits et le montant total
    $panier->setNbrProduits($count);
    $panier->setMontantTotal($total);

    // Enregistrer les modifications dans la base de données
    $entityManager->flush();

    return $this->render('panier/show.html.twig', [
        'idpanier' => $idpanier,
        'tauxTVA' => $tauxTVA,
        'montantTotal' => $montantTotal,
        'total' => $total,
        'count' => $count,
        'lignesPanier' => $lignesPanier,
    ]);
}

 


####Méthode d' ajout d'un produit au panier 

    #[Route('/panier/add/{idproduit}', name: 'add_product')]
    public function addProduct(Produits $product, EntityManagerInterface $entityManager, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get('panier', []);
        $date = new \DateTime();

        // On vérifie si le produit est déjà dans le panier
      
         foreach ($panier as $lignePanier) {
            if ($lignePanier->getIdproduit() === $product->getIdproduit() && $lignePanier->getIdpanier() === $panier->getIdpanier()){
            // Le produit est déjà dans le panier, on renvoie un message d'erreur
           return $this->json(['error' => 'Le produit est déjà dans le panier.'], 400);
          }
       }

    
        // Le produit n'est pas encore dans le panier, on l'ajoute
        $lignePanier = new LignePanier();
        $lignePanier->setDateajout($date);
        $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));     ###id statique jusqu'à intégration 
        $lignePanier->setIdproduit($product);
    
        $entityManager->persist($lignePanier);
      
        $entityManager->flush();
    
        // On ajoute la ligne panier au panier
        $panier[] = $lignePanier;
    
        // On sauvegarde dans la session
        $session->set('panier', $panier);
    
        return $this->redirectToRoute('app_produits_index');
    }
    

    
    
    




}
