<?php

namespace App\Controller;

use App\Entity\PostLike;
use App\Form\PostLikeType;
use App\Repository\PostLikeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/post/like')]
class PostLikeController extends AbstractController
{
    #[Route('/', name: 'app_post_like_index', methods: ['GET'])]
    public function index(PostLikeRepository $postLikeRepository): Response
    {
        return $this->render('post_like/index.html.twig', [
            'post_likes' => $postLikeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_post_like_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PostLikeRepository $postLikeRepository): Response
    {
        $postLike = new PostLike();
        $form = $this->createForm(PostLikeType::class, $postLike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postLikeRepository->save($postLike, true);

            return $this->redirectToRoute('app_post_like_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post_like/new.html.twig', [
            'post_like' => $postLike,
            'form' => $form,
        ]);
    }

    #[Route('/{id_like}', name: 'app_post_like_show', methods: ['GET'])]
    public function show(PostLike $postLike): Response
    {
        return $this->render('post_like/show.html.twig', [
            'post_like' => $postLike,
        ]);
    }

    #[Route('/{id_like}/edit', name: 'app_post_like_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PostLike $postLike, PostLikeRepository $postLikeRepository): Response
    {
        $form = $this->createForm(PostLikeType::class, $postLike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postLikeRepository->save($postLike, true);

            return $this->redirectToRoute('app_post_like_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post_like/edit.html.twig', [
            'post_like' => $postLike,
            'form' => $form,
        ]);
    }

    #[Route('/{id_like}', name: 'app_post_like_delete', methods: ['POST'])]
    public function delete(Request $request, PostLike $postLike, PostLikeRepository $postLikeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$postLike->getId_like(), $request->request->get('_token'))) {
            $postLikeRepository->remove($postLike, true);
        }

        return $this->redirectToRoute('app_post_like_index', [], Response::HTTP_SEE_OTHER);
    }
}
