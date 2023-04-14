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

    #[Route('/{idpanier}', name: 'app_panier_show', methods: ['GET'])]
    public function show(Panier $panier, LignepanierRepository $lignepanierRepository): Response
    {   $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $panier->getIdpanier()]);
        $total = 0;
        $count = count($lignesPanier);
        foreach ($lignesPanier as $ligne) {
            $total += $ligne->getIdproduit()->getPrix();
         
        }
       
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
            'total' => $total,
            'count' => $count,
            'lignesPanier' => $lignesPanier,

        ]);
    }

    #[Route('/panier/add/{idproduit}', name: 'add_product')]
    public function addProduct(Produits $product, EntityManagerInterface $entityManager, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get('panier', []);
        $date = new \DateTime();

        // On vérifie si le produit est déjà dans le panier
        foreach ($panier as $lignePanier) {
            if ($lignePanier->getIdproduit() === $product->getIdproduit()) {
                // Le produit est déjà dans le panier, on ne fait rien
                return $this->redirectToRoute('app_produits_index');
            }
        }
    
        // Le produit n'est pas encore dans le panier, on l'ajoute
        $lignePanier = new LignePanier();
        $lignePanier->setDateajout($date);
        $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));
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
