<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\PostLike;
use App\Form\PostLikeType;
use App\Repository\AllusersRepository;
use App\Repository\PostLikeRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/post/like')]
class PostLikeController extends AbstractController
{
    #[Route('/', name: 'app_post_like_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,PostLikeRepository $postLikeRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('post_like/index.html.twig', [
            'post_likes' => $postLikeRepository->findAll(),
            'user'=>$user,
        ]);
    }

    #[Route('/new', name: 'app_post_like_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, PostLikeRepository $postLikeRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
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
            'user'=>$user,
        ]);
    }

    #[Route('/{id_like}', name: 'app_post_like_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,PostLike $postLike): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('post_like/show.html.twig', [
            'post_like' => $postLike,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_like}/edit', name: 'app_post_like_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, PostLike $postLike, PostLikeRepository $postLikeRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(PostLikeType::class, $postLike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postLikeRepository->save($postLike, true);

            return $this->redirectToRoute('app_post_like_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post_like/edit.html.twig', [
            'post_like' => $postLike,
            'form' => $form,
            'user'=>$user,
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
