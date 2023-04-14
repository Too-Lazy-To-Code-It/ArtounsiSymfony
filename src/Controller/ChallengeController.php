<?php

namespace App\Controller;

use App\Entity\Challenge;
use App\Form\ChallengeType;
use App\Repository\ChallengeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/challenge')]
class ChallengeController extends AbstractController
{
    #[Route('/', name: 'app_challenge_index', methods: ['GET'])]
    public function index(ChallengeRepository $challengeRepository): Response
    {
        return $this->render('challenge/index.html.twig', [
            'challenges' => $challengeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_challenge_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ChallengeRepository $challengeRepository): Response
    {
        $challenge = new Challenge();
        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $challengeRepository->save($challenge, true);

            return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('challenge/new.html.twig', [
            'challenge' => $challenge,
            'form' => $form,
        ]);
    }

    #[Route('/{id_challenge}', name: 'app_challenge_show', methods: ['GET'])]
    public function show(Challenge $challenge): Response
    {
        return $this->render('challenge/show.html.twig', [
            'challenge' => $challenge,
        ]);
    }

    #[Route('/{id_challenge}/edit', name: 'app_challenge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Challenge $challenge, ChallengeRepository $challengeRepository): Response
    {
        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $challengeRepository->save($challenge, true);

            return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('challenge/edit.html.twig', [
            'challenge' => $challenge,
            'form' => $form,
        ]);
    }

    #[Route('/{id_challenge}', name: 'app_challenge_delete', methods: ['POST'])]
    public function delete(Request $request, Challenge $challenge, ChallengeRepository $challengeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$challenge->getId_challenge(), $request->request->get('_token'))) {
            $challengeRepository->remove($challenge, true);
        }

        return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
    }
}
