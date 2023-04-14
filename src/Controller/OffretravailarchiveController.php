<?php

namespace App\Controller;

use App\Entity\Offretravailarchive;
use App\Form\OffretravailarchiveType;
use App\Repository\OffretravailarchiveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offretravailarchive')]
class OffretravailarchiveController extends AbstractController
{
    #[Route('/', name: 'app_offretravailarchive_index', methods: ['GET'])]
    public function index(OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        return $this->render('offretravailarchive/index.html.twig', [
            'offretravailarchives' => $offretravailarchiveRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offretravailarchive_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        $offretravailarchive = new Offretravailarchive();
        $form = $this->createForm(OffretravailarchiveType::class, $offretravailarchive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailarchiveRepository->save($offretravailarchive, true);

            return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravailarchive/new.html.twig', [
            'offretravailarchive' => $offretravailarchive,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravailarchive_show', methods: ['GET'])]
    public function show(Offretravailarchive $offretravailarchive): Response
    {
        return $this->render('offretravailarchive/show.html.twig', [
            'offretravailarchive' => $offretravailarchive,
        ]);
    }

    #[Route('/{idoffre}/edit', name: 'app_offretravailarchive_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offretravailarchive $offretravailarchive, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        $form = $this->createForm(OffretravailarchiveType::class, $offretravailarchive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailarchiveRepository->save($offretravailarchive, true);

            return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravailarchive/edit.html.twig', [
            'offretravailarchive' => $offretravailarchive,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravailarchive_delete', methods: ['POST'])]
    public function delete(Request $request, Offretravailarchive $offretravailarchive, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravailarchive->getIdoffre(), $request->request->get('_token'))) {
            $offretravailarchiveRepository->remove($offretravailarchive, true);
        }

        return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
    }
}
