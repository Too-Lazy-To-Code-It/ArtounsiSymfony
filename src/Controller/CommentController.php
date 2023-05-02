<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Post;
use App\Repository\PostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


#[Route('/comment')]
class CommentController extends AbstractController
{
    // #[Route('/', name: 'app_comment_index', methods: ['GET'])]
    // public function index(CommentRepository $commentRepository,PostRepository $postRepository): Response
    // {
    //     $posts = $postRepository->findAll();
    //     return $this->render('comment/index.html.twig', [
    //         'comments' => $commentRepository->findAll(),
    //         'post' => $posts,
    //     ]);
    // }
    #[Route('/', name: 'app_comment_index', methods: ['GET'])]
    public function index(CommentRepository $commentRepository): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
            'posts' => $posts,
        ]);
    }


    // #[Route('/new', name: 'app_comment_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, CommentRepository $commentRepository): Response
    // {
    //     $comment = new Comment();
    //     $form = $this->createForm(CommentType::class, $comment);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $commentRepository->save($comment, true);

    //         return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('comment/new.html.twig', [
    //         'comment' => $comment,
    //         'form' => $form,
    //     ]);
    // }
    #[Route('/new/{id_post}', name: 'app_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, $id_post): Response
    {
        $comment = new Comment();
        $comment->setIdPost($entityManager->getReference(Post::class, $id_post));
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comment/new.html.twig', [
            'comment' => $comment,
            'form' => $form,
        ]);
    }


    #[Route('/{id_comment}', name: 'app_comment_show', methods: ['GET'])]
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    #[Route('/{id_comment}/edit', name: 'app_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentRepository->save($comment, true);

            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form,
        ]);
    }

    #[Route('/{id_comment}', name: 'app_comment_delete', methods: ['POST'])]
    public function deleteCommentUserside(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $commentRepository->remove($comment, true);
        }

        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }


}
