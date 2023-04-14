<?php

namespace App\Controller;

use App\Entity\FavorisTuroial;
use App\Form\FavorisTuroialType;
use App\Repository\FavorisTuroialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/favoris/turoial')]
class FavorisTuroialController extends AbstractController
{
    #[Route('/', name: 'app_favoris_turoial_index', methods: ['GET'])]
    public function index(FavorisTuroialRepository $favorisTuroialRepository): Response
    {
        return $this->render('favoris_turoial/index.html.twig', [
            'favoris_turoials' => $favorisTuroialRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_favoris_turoial_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FavorisTuroialRepository $favorisTuroialRepository): Response
    {
        $favorisTuroial = new FavorisTuroial();
        $form = $this->createForm(FavorisTuroialType::class, $favorisTuroial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $favorisTuroialRepository->save($favorisTuroial, true);

            return $this->redirectToRoute('app_favoris_turoial_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favoris_turoial/new.html.twig', [
            'favoris_turoial' => $favorisTuroial,
            'form' => $form,
        ]);
    }

    #[Route('/{id_favoris}', name: 'app_favoris_turoial_show', methods: ['GET'])]
    public function show(FavorisTuroial $favorisTuroial): Response
    {
        return $this->render('favoris_turoial/show.html.twig', [
            'favoris_turoial' => $favorisTuroial,
        ]);
    }

    #[Route('/{id_favoris}/edit', name: 'app_favoris_turoial_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FavorisTuroial $favorisTuroial, FavorisTuroialRepository $favorisTuroialRepository): Response
    {
        $form = $this->createForm(FavorisTuroialType::class, $favorisTuroial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $favorisTuroialRepository->save($favorisTuroial, true);

            return $this->redirectToRoute('app_favoris_turoial_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favoris_turoial/edit.html.twig', [
            'favoris_turoial' => $favorisTuroial,
            'form' => $form,
        ]);
    }

    #[Route('/{id_favoris}', name: 'app_favoris_turoial_delete', methods: ['POST'])]
    public function delete(Request $request, FavorisTuroial $favorisTuroial, FavorisTuroialRepository $favorisTuroialRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favorisTuroial->getId_favoris(), $request->request->get('_token'))) {
            $favorisTuroialRepository->remove($favorisTuroial, true);
        }

        return $this->redirectToRoute('app_favoris_turoial_index', [], Response::HTTP_SEE_OTHER);
    }
}
