<?php

namespace App\Controller;

use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommentRepository;
use App\Repository\PostLikeRepository;
use App\Entity\PostLike;
use App\Form\PostLikeType;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Allusers;
use App\Entity\Post;
use App\Form\PostType;
use App\Entity\Category;
use App\Form\CategoryType;

use App\Entity\Comment;
use App\Form\CommentType;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;


class DashboardHomePageController extends AbstractController
{
    #[Route('/dashboard/home/page', name: 'app_dashboard_home_page')]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,CategoryRepository $categoryRepository, PostRepository $postRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        return $this->render('dashboard_home_page/index.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
            'controller_name' => 'DashboardHomePageController',
            'user'=>$user,
        ]);
    }


    #[Route('/dashboard_home_page/{id_post}', name: 'app_post_details_Dashboard', methods: ['GET', 'POST'])]
    public function showPostDetails(SessionInterface $session,AllusersRepository $allusersRepository,Post $post, CommentRepository $commentRepository, EntityManagerInterface $entityManager, Request $request, PostLikeRepository $postLikeRepository, $id_post): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $currentUserId = 1;
        $postLike = new PostLike();
        $postLike->setIdPost($entityManager->getReference(Post::class, $id_post));
        $postLike->setIdUser($entityManager->getReference(Allusers::class, $currentUserId)); // set current user ID
        $form = $this->createForm(PostLikeType::class, $postLike);
        $form->handleRequest($request);
        $comments = $commentRepository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $existingLike = $postLikeRepository->findOneBy([
                'id_user' => $currentUserId,
                'id_post' => $id_post,
            ]);
            if ($existingLike) {
                //
                $entityManager->remove($existingLike);
                $entityManager->flush();
            } else {
                $postLikeRepository->save($postLike, true);
            }

            return $this->redirectToRoute('app_post_details_Dashboard', ['id_post' => $id_post], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dashboard_home_page/details_Post_Admin.html.twig', [
            'post' => $post,
            'comments' => $comments,
            'form' => $form->createView(), // use createView() method to get FormView object
            'post_like' => $postLike,
            'user'=>$user,
        ]);
    }

    #[Route('/postt/{id_post}', name: 'app_post_Dashboard_delete', methods: ['POST'])]
    public function deletePost(Request $request, Post $post, PostRepository $postRepository): Response
    {

        if ($this->isCsrfTokenValid('delete' . $post->getIdPost(), $request->request->get('_token'))) {
            $postRepository->remove($post, true);
        }

        return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/comment/{id_comment}', name: 'app_comment_dashboard_delete', methods: ['POST'])]
    public function deleteCommentAdminSide(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {

        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $commentRepository->remove($comment, true);
        }

        return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id_category}', name: 'app_category_Dashboard_delete', methods: ['POST'])]
    public function deleteCategory(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId_category(), $request->request->get('_token'))) {
            $categoryRepository->remove($category, true);
        }

        return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
    }


}
