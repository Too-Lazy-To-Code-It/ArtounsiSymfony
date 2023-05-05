<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\AllusersRepository;
use App\Repository\PostRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommentRepository;
use App\Repository\PostLikeRepository;
use App\Entity\PostLike;
use App\Form\PostLikeType;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Allusers;

use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator;


#[Route('/post')]
class PostController extends AbstractController
{
    #[Route('/', name: 'app_post_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,PostRepository $postRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll(),
            'posts' => $posts,
            'user'=>$user,
        ]);
    }

    public function base(AllusersRepository $allusersRepository,SessionInterface $session,PostRepository $postRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $posts = $postRepository->findAll();

        return $this->render('base.html.twig', [
            'posts' => $posts,
            'user'=>$user,
        ]);
    }

    #[Route('/new', name: 'app_post_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, PostRepository $postRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setIdUser($user);
            $postRepository->save($post, true);
            $this->addFlash('succes', 'post est ajoutée avec succes.');

            return $this->redirectToRoute('app_post_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post/new.html.twig', [
            'post' => $post,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_post}', name: 'app_post_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,Post $post): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('post/show.html.twig', [
            'post' => $post,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_post}/edit', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, Post $post, PostRepository $postRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $postRepository->save($post, true);

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post/edit.html.twig', [
            'post' => $post,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_post}', name: 'app_post_delete', methods: ['POST'])]
    public function delete(Request $request, Post $post, PostRepository $postRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $post->getIdPost(), $request->request->get('_token'))) {
            $postRepository->remove($post, true);
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/post/{id_post}', name: 'app_post_details', methods: ['GET', 'POST'])]
    public function showPostDetails(SessionInterface $session,AllusersRepository $allusersRepository,Post $post, CommentRepository $commentRepository, EntityManagerInterface $entityManager, Request $request, PostLikeRepository $postLikeRepository, $id_post): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $postLike = new PostLike();
        $postLike->setIdPost($entityManager->getReference(Post::class, $id_post));
        $postLike->setIdUser($entityManager->getReference(Allusers::class, $userId)); // set current user ID
        $form = $this->createForm(PostLikeType::class, $postLike);
        $form->handleRequest($request);
        $comments = $commentRepository->findAll();

        // Get existing like if it exists
        $existingLike = $postLikeRepository->findOneBy([
            'id_user' => $userId,
            'id_post' => $id_post,
        ]);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($existingLike) {
                $entityManager->remove($existingLike);
                $entityManager->flush();
            } else {
                $postLikeRepository->save($postLike, true);
            }

            return $this->redirectToRoute('app_post_details', ['id_post' => $id_post], Response::HTTP_SEE_OTHER);
        }

        return $this->render('explore/details.html.twig', [
            'post' => $post,
            'comments' => $comments,
            'form' => $form->createView(),
            'post_like' => $existingLike, // Pass existing like object to template
            'user'=>$user,
        ]);
    }


    #[Route('/{id_post}', name: 'app_post_like_delete', methods: ['DELETE'])]
    public function deletelike(Request $request, Post $post, PostLikeRepository $postLikeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $post->getIdPost(), $request->request->get('_token'))) {
            $postLikeRepository->deletePostLike($post, $this->getUser());
        }

        return $this->redirectToRoute('app_post_details', ['id_post' => $post->getIdPost()]);
    }


}
