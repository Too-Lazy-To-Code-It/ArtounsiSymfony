<?php

namespace App\Controller;

use App\Entity\Tutoriel;
use App\Form\TutorielType;
use App\Repository\TutorielRepository;
use App\Repository\AllusersRepository;
use App\Repository\FavorisTuroialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/tutoriel')]
class TutorielController extends AbstractController
{
    #[Route('/', name: 'app_tutoriel_index', methods: ['GET'])]
    public function index(TutorielRepository $tutorielRepository): Response
    {
        return $this->render('tutoriel/index.html.twig', [
            'tutoriels' => $tutorielRepository->findAll(),
            'toptutoriels' => $tutorielRepository->findBy([],[],4),
        ]);
    }

    #[Route('/showfavoris', name: 'app_tutoriel_favoris', methods: ['GET'])]
    public function showfavoris(TutorielRepository $tutorielRepository, FavorisTuroialRepository $favorisTuroialRepository,AllusersRepository $allusersRepository): Response
    {
        return $this->render('tutoriel/favoris.html.twig', [
            'tutoriels' => $favorisTuroialRepository->findBy(array('id_user'=>$allusersRepository->find(1))),
            'toptutoriels' => $tutorielRepository->findBy([],[],4),
        ]);
    }


    #[Route('/new', name: 'app_tutoriel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TutorielRepository $tutorielRepository): Response
    {
        $tutoriel = new Tutoriel();
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('Image')->getData();

            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            //on stocke l'image dans la bd
            $tutoriel->setPathimg($fichier);

            $tutorielRepository->save($tutoriel, true);

            return $this->redirectToRoute('app_tutoriel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tutoriel/new.html.twig', [
            'tutoriel' => $tutoriel,
            'form' => $form,
        ]);
    }

    #[Route('/{id_tutoriel}', name: 'app_tutoriel_show', methods: ['GET'])]
    public function show(Tutoriel $tutoriel, FavorisTuroialRepository $favorisTuroialRepository,TutorielRepository $tutorielRepository, AllusersRepository $allusersRepository, $id_tutoriel): Response
    {
        return $this->render('tutoriel/show.html.twig', [
            'tutoriel' => $tutoriel,
            'favori' => $favorisTuroialRepository->findOneBy(array('id_user'=>$allusersRepository->find(1),'id_tutoriel'=>$id_tutoriel)),
        ]);
    }

    #[Route('/{id_tutoriel}/edit', name: 'app_tutoriel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tutoriel $tutoriel, TutorielRepository $tutorielRepository): Response
    {
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('Image')->getData();
            if($image!=null){
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            $tutoriel->setPathimg($fichier);}

            $tutorielRepository->save($tutoriel, true);

            return $this->redirectToRoute('app_tutoriel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tutoriel/edit.html.twig', [
            'tutoriel' => $tutoriel,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id_tutoriel}', name: 'app_tutoriel_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, TutorielRepository $tutorielRepository, ManagerRegistry $mr, $id_tutoriel): Response
    {
        $em = $mr->getManager();
        $tutoriel = $tutorielRepository->find($id_tutoriel);
        $em->remove($tutoriel);
        $em->flush();
        return $this->redirectToRoute('app_tutoriel_index', [], Response::HTTP_SEE_OTHER);
    }
}
