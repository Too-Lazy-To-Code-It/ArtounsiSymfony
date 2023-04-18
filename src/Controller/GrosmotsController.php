<?php

namespace App\Controller;

use App\Entity\Grosmots;
use App\Form\GrosmotsType;
use App\Repository\GrosmotsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/grosmots')]
class GrosmotsController extends AbstractController
{
    #[Route('/', name: 'app_grosmots_index', methods: ['GET'])]
    public function index(GrosmotsRepository $grosmotsRepository): Response
    {
        return $this->render('grosmots/index.html.twig', [
            'grosmots' => $grosmotsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_grosmots_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GrosmotsRepository $grosmotsRepository): Response
    {
        $grosmot = new Grosmots();
        $form = $this->createForm(GrosmotsType::class, $grosmot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
  
            $grosmotsRepository->save($grosmot, true);

            return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grosmots/new.html.twig', [
            'grosmot' => $grosmot,
            'form' => $form,
        ]);
    }

    #[Route('/{idMot}', name: 'app_grosmots_show', methods: ['GET'])]
    public function show(Grosmots $grosmot): Response
    {
        return $this->render('grosmots/show.html.twig', [
            'grosmot' => $grosmot,
        ]);
    }

    #[Route('/{idMot}/edit', name: 'app_grosmots_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Grosmots $grosmot, GrosmotsRepository $grosmotsRepository): Response
    {
        $form = $this->createForm(GrosmotsType::class, $grosmot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $grosmotsRepository->save($grosmot, true);

            return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grosmots/edit.html.twig', [
            'grosmot' => $grosmot,
            'form' => $form,
        ]);
    }

    #[Route('/{idMot}', name: 'app_grosmots_delete', methods: ['POST'])]
    public function delete(Request $request, Grosmots $grosmot, GrosmotsRepository $grosmotsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$grosmot->getidMot(), $request->request->get('_token'))) {
            $grosmotsRepository->remove($grosmot, true);
        }

        return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
    }
}
