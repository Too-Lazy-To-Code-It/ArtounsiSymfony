<?php

namespace App\Controller;

use App\Entity\Ban;
use App\Form\BanType;
use App\Repository\AllusersRepository;
use App\Repository\BanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\AllusersController;

#[Route('/ban')]
class BanController extends AbstractController
{
    #[Route('/', name: 'app_ban_index', methods: ['GET'])]
    public function index(Request $request, BanRepository $banRepository, AllusersController $ac, allusersRepository $allusersRepository): Response
    {
        if (!$ac->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_login');
        }
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);

        return $this->render('ban/index.html.twig', [
            'bans' => $banRepository->findAll(),
            'logged' => $user,
        ]);
    }

    #[Route('/new', name: 'app_ban_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BanRepository $banRepository): Response
    {
        $ban = new Ban();
        $form = $this->createForm(BanType::class, $ban);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $banRepository->save($ban, true);

            return $this->redirectToRoute('app_ban_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ban/new.html.twig', [
            'ban' => $ban,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ban_show', methods: ['GET'])]
    public function show(Ban $ban): Response
    {
        return $this->render('ban/show.html.twig', [
            'ban' => $ban,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ban_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ban $ban, BanRepository $banRepository): Response
    {
        $form = $this->createForm(BanType::class, $ban);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $banRepository->save($ban, true);

            return $this->redirectToRoute('app_ban_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ban/edit.html.twig', [
            'ban' => $ban,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ban_delete', methods: ['POST'])]
    public function delete(Request $request, Ban $ban, BanRepository $banRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ban->getId(), $request->request->get('_token'))) {
            $banRepository->remove($ban, true);
        }

        return $this->redirectToRoute('app_ban_index', [], Response::HTTP_SEE_OTHER);
    }
}
