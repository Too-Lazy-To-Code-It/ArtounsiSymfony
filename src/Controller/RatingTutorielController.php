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

#[Route('/rating/tutoriel')]
class RatingTutorielController extends AbstractController
{
    
    #[Route('/new/{rating}/{idTutoriel}', name: 'app_rating_tutoriel_new', methods: ['GET', 'POST'])]
    public function new($rating,$idTutoriel, Request $request, ManagerRegistry $doctrine, TutorielRepository $tutorielRepository, ManagerRegistry $mr, RatingTutorielRepository $ratingRepository): Response
    {
        $allusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $ratingTutorielRepositoty =  $this->getDoctrine()->getRepository(RatingTutoriel::class);
        $requestData = $request;
        
        $ratingentity = new RatingTutoriel();
        $entityManager = $doctrine->getManager();
        
        $oldratingentity = $ratingTutorielRepositoty->findOneBy(array('tutorielId'=>$tutorielRepository->find($idTutoriel),'idRater'=>$allusersRepository->find(1)));

        if($oldratingentity){
            $oldratingentity->setRating((int)$rating);
        }else{
            $ratingentity->setRating((int)$rating);
            $ratingentity->setTutorielId($tutorielRepository->findOneBy(array('id_tutoriel'=>(int)$idTutoriel)));  
            $ratingentity->setIdRater($allusersRepository->find(1));
            $entityManager->persist($ratingentity);
        }
        $entityManager->flush();

        $em = $mr->getManager();
        $avgrating = $em->createQuery("SELECT avg(r.rating) as avg FROM APP\Entity\RatingTutoriel r WHERE r.tutorielId = :tutorielId")
                            ->setParameter('tutorielId', $idTutoriel)->getResult();
        
        return new JsonResponse( ['success' => true,'avg' => $avgrating[0] ]);
    }
}
