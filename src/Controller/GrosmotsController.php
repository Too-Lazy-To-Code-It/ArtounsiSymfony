<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Grosmots;
use App\Form\GrosmotsType;
use App\Repository\AllusersRepository;
use App\Repository\GrosmotsRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/grosmots')]
class GrosmotsController extends AbstractController
{
    #[Route('/', name: 'app_grosmots_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,GrosmotsRepository $grosmotsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('grosmots/index.html.twig', [
            'grosmots' => $grosmotsRepository->findAll(),
            'user'=>$user,
        ]);
    }

    #[Route('/new', name: 'app_grosmots_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, GrosmotsRepository $grosmotsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $grosmot = new Grosmots();
        $form = $this->createForm(GrosmotsType::class, $grosmot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
  
            $grosmotsRepository->save($grosmot, true);

            return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grosmots/new.html.twig', [
            'grosmot' => $grosmot,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idMot}', name: 'app_grosmots_show', methods: ['GET'])]
    public function show(AllusersRepository $allusersRepository,SessionInterface $session,Grosmots $grosmot): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('grosmots/show.html.twig', [
            'grosmot' => $grosmot,
            'user'=>$user,
        ]);
    }

    #[Route('/{idMot}/edit', name: 'app_grosmots_edit', methods: ['GET', 'POST'])]
    public function edit(AllusersRepository $allusersRepository,SessionInterface $session,Request $request, Grosmots $grosmot, GrosmotsRepository $grosmotsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(GrosmotsType::class, $grosmot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $grosmotsRepository->save($grosmot, true);

            return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('grosmots/edit.html.twig', [
            'grosmot' => $grosmot,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idMot}', name: 'app_grosmots_delete', methods: ['POST'])]
    public function delete(Request $request, Grosmots $grosmot, GrosmotsRepository $grosmotsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$grosmot->getidMot(), $request->request->get('_token'))) {
            $grosmotsRepository->remove($grosmot, true);
        }

        return $this->redirectToRoute('app_grosmots_index', [], Response::HTTP_SEE_OTHER);
    }
}
