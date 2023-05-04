<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\VideoType;
use App\Entity\View;
use App\Repository\AllusersRepository;
use App\Repository\ViewRepository;
use App\Repository\VideoRepository;
use App\Repository\TutorielRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


#[Route('/video')]
class VideoController extends AbstractController
{
    #[Route('/', name: 'app_video_index', methods: ['GET'])]
    public function index(VideoRepository $videoRepository): Response
    {
        return $this->render('video/index.html.twig', [
            'videos' => $videoRepository->findAll(),
        ]);
    }

    #[Route('/new/{id_tutoriel}', name: 'app_videoo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VideoRepository $videoRepository, TutorielRepository $tutorielRepository, $id_tutoriel): Response
    {

        $videoentity = new Video();
        $form = $this->createForm(VideoType::class, $videoentity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tutoriel = $tutorielRepository->find($id_tutoriel);

            $image = $form->get('Image')->getData();
            $fichierimg = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichierimg
            );

            $video = $form->get('Video')->getData();

            $fichiervid = md5(uniqid()) . '.' . $video->guessExtension();
            $video->move(
                $this->getParameter('videos_directory'),
                $fichiervid
            );
            //on stocke l'image et le video dans la bd
            $videoentity->setPathimage($fichierimg);
            $videoentity->setPathvideo($fichiervid);
            $videoentity->setDateP(new \DateTime());
            $videoentity->setIdTutoriel($tutoriel);


            $videoRepository->save($videoentity, true);

            return $this->redirectToRoute('app_tutoriel_show_back', ['id_tutoriel' => $videoentity->getIdTutoriel()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('video/new.html.twig', [
            'video' => $videoentity,
            'form' => $form,
        ]);
    }

    #[Route('/{id_video}', name: 'app_video_show', methods: ['GET'])]
    public function show(Request $request, ManagerRegistry $doctrine, AllusersRepository $allusersRepository, Video $video, ViewRepository $viewRepository,): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        //check if video is viewed before
        $oldview = $viewRepository->findOneBy(array('id_video' => $video, 'id_user' => $allusersRepository->find($userId)));
        //add view if doesn't exist or modify it
        $view = new View();
        $entityManager = $doctrine->getManager();
        if ($oldview) {
            $oldview->setDateV(new \DateTime());
        } else {
            $view->setIdVideo($video);
            $view->setIdUser($allusersRepository->find($userId));
            $view->setDateV(new \DateTime());
            $entityManager->persist($view);
        }
        $entityManager->flush();

        return $this->render('video/show.html.twig', [
            'video' => $video,
        ]);
    }

    #[Route('/{id_video}/edit', name: 'app_video_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Video $videoentity, VideoRepository $videoRepository): Response
    {
        $form = $this->createForm(VideoType::class, $videoentity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('Image')->getData();
            if ($image != null) {
                $fichierimg = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichierimg
                );
                $videoentity->setPathimage($fichierimg);
            }

            $video = $form->get('Video')->getData();
            if ($video != null) {
                $fichiervid = md5(uniqid()) . '.' . $video->guessExtension();
                $video->move(
                    $this->getParameter('videos_directory'),
                    $fichiervid
                );
                //on stocke l'image et le video dans la bd
                $videoentity->setPathvideo($fichiervid);
            }

            $videoRepository->save($videoentity, true);

            return $this->redirectToRoute('app_tutoriel_show_back', ['id_tutoriel' => $videoentity->getIdTutoriel()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('video/edit.html.twig', [
            'video' => $videoentity,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id_video}', name: 'app_video_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Video $video, VideoRepository $videoRepository, ManagerRegistry $mr, $id_video): Response
    {
        $em = $mr->getManager();
        $video = $videoRepository->find($id_video);
        $em->remove($video);
        $em->flush();
        return $this->redirectToRoute('app_tutoriel_show_back', ['id_tutoriel' => $video->getIdTutoriel()->getId()], Response::HTTP_SEE_OTHER);
    }
}
