<?php

namespace App\Controller;

use App\Entity\PostLike;
use App\Form\PostLikeType;
use App\Repository\PostLikeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;

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
        if ($this->isCsrfTokenValid('delete'.$postLike->getId(), $request->request->get('_token'))) {
            $postLikeRepository->remove($postLike, true);
        }

        return $this->redirectToRoute('app_post_like_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    
    // public function like(Request $request, PostLikeRepository $postLikeRepository): JsonResponse
    // {
    //     $postId = $request->request->get('postId');
    //     //$userId = $this->getUser()->getId(); // get the ID of the logged-in user

    //     $postLike = new PostLike();
    //     $postLike->setIdPost($postId);
    //     //$postLike->setIdUser($userId);

    //     $postLikeRepository->save($postLike, true);

    //     $likesCount = $postLikeRepository->count(['idPost' => $postId]);

    //     return new JsonResponse(['likesCount' => $likesCount]);
    // }
}
