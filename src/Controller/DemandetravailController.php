<?php

namespace App\Controller;

use App\Entity\Demandetravail;
use App\Form\DemandetravailType;
use App\Repository\DemandetravailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demandetravail')]
class DemandetravailController extends AbstractController
{
    #[Route('/', name: 'app_demandetravail_index', methods: ['GET'])]
    public function index(DemandetravailRepository $demandetravailRepository): Response
    {
        return $this->render('demandetravail/index.html.twig', [
            'demandetravails' => $demandetravailRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_demandetravail_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DemandetravailRepository $demandetravailRepository): Response
    {
        $demandetravail = new Demandetravail();
        $form = $this->createForm(DemandetravailType::class, $demandetravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandetravailRepository->save($demandetravail, true);

            return $this->redirectToRoute('app_demandetravail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demandetravail/new.html.twig', [
            'demandetravail' => $demandetravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idDemande}', name: 'app_demandetravail_show', methods: ['GET'])]
    public function show(Demandetravail $demandetravail): Response
    {
        return $this->render('demandetravail/show.html.twig', [
            'demandetravail' => $demandetravail,
        ]);
    }

    #[Route('/{idDemande}/edit', name: 'app_demandetravail_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Demandetravail $demandetravail, DemandetravailRepository $demandetravailRepository): Response
    {
        $form = $this->createForm(DemandetravailType::class, $demandetravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandetravailRepository->save($demandetravail, true);

            return $this->redirectToRoute('app_demandetravail_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demandetravail/edit.html.twig', [
            'demandetravail' => $demandetravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idDemande}', name: 'app_demandetravail_delete', methods: ['POST'])]
    public function delete(Request $request, Demandetravail $demandetravail, DemandetravailRepository $demandetravailRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandetravail->getIdDemande(), $request->request->get('_token'))) {
            $demandetravailRepository->remove($demandetravail, true);
        }

        return $this->redirectToRoute('app_demandetravail_index', [], Response::HTTP_SEE_OTHER);
    }
}
