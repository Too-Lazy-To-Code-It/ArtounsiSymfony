<?php

namespace App\Controller;

use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\Allusers;
use App\Entity\RatingTutoriel;
use App\Form\RatingTutorielType;
use App\Repository\RatingTutorielRepository;
use App\Repository\AllusersRepository;
use App\Repository\TutorielRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RatingTutorielMobileController extends AbstractController
{
    
    #[Route('/rateTutoriel/{rating}/{idTutoriel}/{idUser}', name: 'rateTutoriel')]
    public function new($rating,$idTutoriel, $idUser, Request $request, ManagerRegistry $doctrine, TutorielRepository $tutorielRepository, ManagerRegistry $mr, RatingTutorielRepository $ratingRepository,  NormalizerInterface $Normalizer): Response
    {
        $allusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $ratingTutorielRepositoty =  $this->getDoctrine()->getRepository(RatingTutoriel::class);
        $requestData = $request;
        
        $ratingentity = new RatingTutoriel();
        $entityManager = $doctrine->getManager();
        
        $oldratingentity = $ratingTutorielRepositoty->findOneBy(array('tutorielId'=>$tutorielRepository->find($idTutoriel),'idRater'=>$allusersRepository->find($idUser)));

        if($oldratingentity){
            $oldratingentity->setRating((int)$rating);
        }else{
            $ratingentity->setRating((int)$rating);
            $ratingentity->setTutorielId($tutorielRepository->findOneBy(array('id_tutoriel'=>(int)$idTutoriel)));  
            $ratingentity->setIdRater($allusersRepository->find($idUser));
            $entityManager->persist($ratingentity);
        }
        $entityManager->flush();

        $em = $mr->getManager();
        $avgrating = $em->createQuery("SELECT avg(r.rating) as avg FROM APP\Entity\RatingTutoriel r WHERE r.tutorielId = :tutorielId")
                            ->setParameter('tutorielId', $idTutoriel)->getResult();
        
        $jsonContent = $Normalizer->normalize($avgrating, 'json');
        return new Response(json_encode($jsonContent));
    }

    #[Route('/fetchAVGRateTutoriel/{idTutoriel}', name: 'fetchTutorielRates')]
    public function fetchTutorielRates($idTutoriel, Request $request, ManagerRegistry $doctrine, TutorielRepository $tutorielRepository, ManagerRegistry $mr, RatingTutorielRepository $ratingRepository,  NormalizerInterface $Normalizer): Response
    {        
        $em = $mr->getManager();
        $avgrating = $em->createQuery("SELECT avg(r.rating) as avg FROM App\Entity\RatingTutoriel r WHERE r.tutorielId = :tutorielId")
                            ->setParameter('tutorielId', $idTutoriel)->getResult();
        
        $jsonContent = $Normalizer->normalize($avgrating, 'json');
        return new Response(json_encode($jsonContent));
    }
    
    #[Route('/fetchRateTutoriel/{idTutoriel}/{idUser}', name: 'fetchRateTutoriel')]
    public function fetchRateTutoriel($idTutoriel, $idUser, Request $request, ManagerRegistry $doctrine, TutorielRepository $tutorielRepository, ManagerRegistry $mr, RatingTutorielRepository $ratingRepository,  NormalizerInterface $normalizer): Response
    {        
        $allusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $ratingTutorielRepositoty =  $this->getDoctrine()->getRepository(RatingTutoriel::class);
        $oldratingentity = $ratingTutorielRepositoty->findBy(array('tutorielId'=>$tutorielRepository->find($idTutoriel),'idRater'=>$allusersRepository->find($idUser)));
        $ratingNormalizes = $normalizer->normalize($oldratingentity,'json',['groups' => "rating"]);
        return new Response(json_encode($ratingNormalizes));
    }    

}
