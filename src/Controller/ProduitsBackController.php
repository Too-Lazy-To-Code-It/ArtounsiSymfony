<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;


#[Route('/produitsBack')]
class ProduitsBackController extends AbstractController
{
    #[Route('/', name: 'app_produitsBack_index', methods: ['GET'])]
    public function index(ProduitsRepository $produitsRepository): Response
    {
        return $this->render('produitsBack/index.html.twig', [
            'produits' => $produitsRepository->findAll(),
        ]);
    }

    
    #[Route('/{idproduit}', name: 'app_produitsBack_show', methods: ['GET'])]
    public function show(Produits $produit): Response
    
    {
        return $this->render('produitsBack/show.html.twig', [
            'produit' => $produit,
        ]);
    }

   
    #[Route('/{idproduit}', name: 'app_produits_delete1', methods: ['POST'])]
    public function delete(Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteproduitAdmin'.$produit->getIdproduit(), $request->request->get('_token'))) {
            $produitsRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produitsBack_index', [], Response::HTTP_SEE_OTHER);
    }



   





}
