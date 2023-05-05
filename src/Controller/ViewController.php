<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\View;
use App\Form\ViewType;
use App\Repository\AllusersRepository;
use App\Repository\ViewRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/view')]
class ViewController extends AbstractController
{
    #[Route('/', name: 'app_view_index', methods: ['GET'])]
    public function index(ViewRepository $viewRepository): Response
    {
        return $this->render('view/index.html.twig', [
            'views' => $viewRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_view_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, ViewRepository $viewRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $view = new View();
        $form = $this->createForm(ViewType::class, $view);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $viewRepository->save($view, true);

            return $this->redirectToRoute('app_view_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('view/new.html.twig', [
            'view' => $view,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_view}', name: 'app_view_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,View $view): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('view/show.html.twig', [
            'view' => $view,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_view}/edit', name: 'app_view_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, View $view, ViewRepository $viewRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(ViewType::class, $view);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $viewRepository->save($view, true);

            return $this->redirectToRoute('app_view_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('view/edit.html.twig', [
            'view' => $view,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_view}', name: 'app_view_delete', methods: ['POST'])]
    public function delete(Request $request, View $view, ViewRepository $viewRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$view->getId_view(), $request->request->get('_token'))) {
            $viewRepository->remove($view, true);
        }

        return $this->redirectToRoute('app_view_index', [], Response::HTTP_SEE_OTHER);
    }
}
