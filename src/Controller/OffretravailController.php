<?php

namespace App\Controller;

use App\Entity\Offretravail;
use App\Form\OffretravailType;
use App\Repository\OffretravailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offretravail')]
class OffretravailController extends AbstractController
{
    #[Route('/', name: 'app_offretravail_index', methods: ['GET'])]
    public function index(OffretravailRepository $offretravailRepository): Response
    {
        return $this->render('offretravail/index.html.twig', [
            'offretravails' => $offretravailRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offretravail_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OffretravailRepository $offretravailRepository): Response
    {
        $offretravail = new Offretravail();
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_offretravail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravail/new.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_show', methods: ['GET'])]
    public function show(Offretravail $offretravail): Response
    {
        return $this->render('offretravail/show.html.twig', [
            'offretravail' => $offretravail,
        ]);
    }

    #[Route('/{idoffre}/edit', name: 'app_offretravail_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offretravail $offretravail, OffretravailRepository $offretravailRepository): Response
    {
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_offretravail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravail/edit.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_delete', methods: ['POST'])]
    public function delete(Request $request, Offretravail $offretravail, OffretravailRepository $offretravailRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravail->getIdoffre(), $request->request->get('_token'))) {
            $offretravailRepository->remove($offretravail, true);
        }

        return $this->redirectToRoute('app_offretravail_index', [], Response::HTTP_SEE_OTHER);
    }
}
