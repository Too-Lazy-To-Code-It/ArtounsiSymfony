<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Form\AllusersType;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/allusers')]
class AllusersController extends AbstractController
{
    #[Route('/', name: 'app_allusers_index', methods: ['GET'])]
    public function index(AllusersRepository $allusersRepository): Response
    {
        return $this->render('allusers/index.html.twig', [
            'allusers' => $allusersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_allusers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AllusersRepository $allusersRepository): Response
    {
        $alluser = new Allusers();
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $allusersRepository->save($alluser, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allusers/new.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
        ]);
    }

    #[Route('/{id_user}', name: 'app_allusers_show', methods: ['GET'])]
    public function show(Allusers $alluser): Response
    {
        return $this->render('allusers/show.html.twig', [
            'alluser' => $alluser,
        ]);
    }

    #[Route('/{id_user}/edit', name: 'app_allusers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $allusersRepository->save($alluser, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allusers/edit.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
        ]);
    }

    #[Route('/{id_user}', name: 'app_allusers_delete', methods: ['POST'])]
    public function delete(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alluser->getId_user(), $request->request->get('_token'))) {
            $allusersRepository->remove($alluser, true);
        }

        return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
    }
}
