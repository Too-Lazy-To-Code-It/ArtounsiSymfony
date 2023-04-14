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


#[Route('/produits')]
class ProduitsController extends AbstractController
{
    #[Route('/', name: 'app_produits_index', methods: ['GET'])]
    public function index(ProduitsRepository $produitsRepository): Response
    {
        return $this->render('produits/index.html.twig', [
            'produits' => $produitsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produits_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProduitsRepository $produitsRepository): Response
    {   $currentDate = new DateTime();
        $produit = new Produits();
        $produit->setDateajout(new \DateTime());
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
               /** @var UploadedFile $image */
              $image = $form->get('image')->getData();

          if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
         $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();

          try {
             $image->move(
               $this->getParameter('app.upload_dir'),
                $newFilename
            );
       } catch (FileException $e) {
         // handle exception
       }

       $produit->setImage($newFilename);
      }
            $produitsRepository->save($produit, true);
            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idproduit}', name: 'app_produits_show', methods: ['GET'])]
    public function show(Produits $produit,ProduitsRepository $produitsRepository): Response
    
    {
        return $this->render('produits/show.html.twig', [
            'produits' => $produitsRepository->findAll(),
            'produit' => $produit,
           
        ]);
    }

    #[Route('/{idproduit}/edit', name: 'app_produits_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

          if ($image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
         $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();

          try {
             $image->move(
               $this->getParameter('app.upload_dir'),
                $newFilename
            );
       } catch (FileException $e) {
         // handle exception
       }
       $produit->setImage($newFilename);
      }

            $produitsRepository->save($produit, true);

            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idproduit}', name: 'app_produits_delete', methods: ['POST'])]
    public function delete(Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteproduitFront'.$produit->getIdproduit(), $request->request->get('_token'))) {
            $produitsRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
    }



   





}
