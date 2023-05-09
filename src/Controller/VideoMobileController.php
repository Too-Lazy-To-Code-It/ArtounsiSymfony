<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\VideoType;
use App\Entity\View;
use App\Repository\AllusersRepository;
use App\Repository\ViewRepository;
use App\Repository\VideoRepository;
use App\Repository\TutorielRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class VideoMobileController extends AbstractController
{

    #[Route('/addVideo/{id_tutoriel}', name: 'addVideo', methods: ['GET', 'POST'])]
    public function new(Request $req, NormalizerInterface $Normalizer, VideoRepository $videoRepository, TutorielRepository $tutorielRepository,$id_tutoriel): Response
    {

        $em = $this->getDoctrine()->getManager();
        $video = new Video();
        $video->setTitle($req->get('title'));
        $video->setDescription($req->get('description'));
        $video->setDateP(new \DateTime());
        $video->setPathimage($req->get('pathimage'));
        $video->setPathvideo($req->get('pathvideo'));
        $video->setIdTutoriel($tutorielRepository->find($id_tutoriel));
        $em->persist($video);
        $em->flush();
        $jsonContent = $Normalizer->normalize($video, 'json', ['groups' => 'videos']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/modifyVideo/{id_video}/{id_tutoriel}', name: 'modifyVideo', methods: ['GET', 'POST'])]
    public function modifyvideo(Request $req, NormalizerInterface $Normalizer, VideoRepository $videoRepository, TutorielRepository $tutorielRepository,$id_tutoriel,$id_video): Response
    {

        $em = $this->getDoctrine()->getManager();
        $video = $videoRepository->find($id_video);
        $video->setTitle($req->get('title'));
        $video->setDescription($req->get('description'));
        $video->setDateP(new \DateTime());
        $video->setPathimage($req->get('pathimage'));
        $video->setPathvideo($req->get('pathvideo'));
        $video->setIdTutoriel($tutorielRepository->find($id_tutoriel));
        $em->flush();
        $jsonContent = $Normalizer->normalize($video, 'json', ['groups' => 'videos']);
        return new Response(json_encode($jsonContent));
    }
    
    #[Route("deleteVideo/{id}", name: "deleteVideo")]
    public function deleteStudentJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository(Video::class)->find($id);
        $em->remove($video);
        $em->flush();
        $jsonContent = $Normalizer->normalize($video, 'json', ['groups' => 'videos']);
        return new Response("Video deleted successfully " . json_encode($jsonContent));
    }
}
