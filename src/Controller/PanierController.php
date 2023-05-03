<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Entity\Lignepanier;
use App\Entity\Allusers;
use App\Form\PanierType;
use App\Repository\AllusersRepository;
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
use DateTime;
use Symfony\Component\Security\Core\User\UserInterface;


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


    #[Route('/NouveauPanier/new', name: 'app_panier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PanierRepository $panierRepository, UserInterface $user): Response
    {
        $panier = new Panier();
        $panier->setUser($user);
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $panierRepository->save($panier, true);

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
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


    #[Route('/panier/add/{idproduit}', name: 'add_product')]
    public function ajouterProduitAuPanier(AllusersRepository $allusersRepository,Request $request, Produits $produit, ProduitsRepository $produitRepository, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $date = new \DateTime();
        // On récupère le panier actuel
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        $panier=$user->getPaniers()->first();

        $lpexist = $entityManager->getRepository(LignePanier::class)->findOneBy(['idproduit' => $produit, 'idpanier' => $panier]);


        if ($lpexist !== null) {
            // Le produit existe déjà dans le panier, on ne fait rien
            $this->addFlash('warning', 'Le produit existe déjà dans  panier.');
            return $this->redirectToRoute('app_produits_show', ['idproduit' => $produit->getIdproduit()]);

        } else {
            // Le produit n'existe pas dans le panier, on l'ajoute
            $lignePanier = new LignePanier();
            $lignePanier->setDateajout($date);
            $lignePanier->setIdpanier($entityManager->getReference(Panier::class, 1));     ###id statique jusqu'à intégration
            $lignePanier->setIdproduit($produit);
            $entityManager->persist($lignePanier);
            $entityManager->flush();


            $session->set('panier', $panier);

            $this->addFlash('success', 'Le produit a été ajouté au panier avec succès.');
        }
        return $this->redirectToRoute('app_produits_show', ['idproduit' => $produit->getIdproduit()]);
    }


    #######


    #[Route('/viderpanier/{idpanier}', name: 'viderpanier')]
    public function ViderPanier(string $idpanier, ManagerRegistry $doctrine, SessionInterface $session, LignepanierRepository $rep): Response
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


}
