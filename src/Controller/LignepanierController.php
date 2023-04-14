<?php

namespace App\Controller;

use App\Entity\Lignepanier;
use App\Form\LignepanierType;
use App\Repository\LignepanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;





#[Route('/lignepanier')]
class LignepanierController extends AbstractController
{
    #[Route('/', name: 'app_lignepanier_index', methods: ['GET'])]
    public function index(LignepanierRepository $lignepanierRepository): Response
    {
        return $this->render('lignepanier/index.html.twig', [
            'lignepaniers' => $lignepanierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lignepanier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LignepanierRepository $lignepanierRepository): Response
    {
        $lignepanier = new Lignepanier();
        $form = $this->createForm(LignepanierType::class, $lignepanier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lignepanierRepository->save($lignepanier, true);

            return $this->redirectToRoute('app_lignepanier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lignepanier/new.html.twig', [
            'lignepanier' => $lignepanier,
            'form' => $form,
        ]);
    }

    #[Route('/{idlignepanier}', name: 'app_lignepanier_show', methods: ['GET'])]
    public function show(Lignepanier $lignepanier): Response
    {
        return $this->render('lignepanier/show.html.twig', [
            'lignepanier' => $lignepanier,
        ]);
    }

    #[Route('/{idlignepanier}/edit', name: 'app_lignepanier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lignepanier $lignepanier, LignepanierRepository $lignepanierRepository): Response
    {
        $form = $this->createForm(LignepanierType::class, $lignepanier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lignepanierRepository->save($lignepanier, true);

            return $this->redirectToRoute('app_lignepanier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lignepanier/edit.html.twig', [
            'lignepanier' => $lignepanier,
            'form' => $form,
        ]);
    }

    #[Route('suppProd/{idlignepanier}', name: 'app_lignepanier_delete')]
    public function delete(Request $request, Lignepanier $lignepanier, LignepanierRepository $lignepanierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lignepanier->getIdlignepanier(), $request->request->get('_token'))) {
            $lignepanierRepository->remove($lignepanier, true);
        }

        return $this->redirectToRoute('app_lignepanier_index', [], Response::HTTP_SEE_OTHER);
    }
    



}

   









