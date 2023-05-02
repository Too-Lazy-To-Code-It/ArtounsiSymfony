<?php

namespace App\Controller;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Rating;
use App\Form\RatingType;
use App\Entity\Allusers;
use App\Repository\ChallengeRepository;
use App\Repository\RatingRepository;
use App\Repository\ParticipationRepository;
use App\Repository\AllusersRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/rating')]
class RatingController extends AbstractController
{

    #[Route('/new/{rating}/{idChallenge}/{idparticipator}', name: 'app_rating_new', methods: ['GET', 'POST'])]
    public function new($rating,$idparticipator,$idChallenge, Request $request, ManagerRegistry $doctrine, ChallengeRepository $challengeRepository, ManagerRegistry $mr, RatingRepository $ratingRepository  ,AllusersRepository $allusersRepository, ParticipationRepository $participationRepository): Response
    {
        $allusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $requestData = $request;
        
        $ratingentity = new Rating();
        $entityManager = $doctrine->getManager();

        $oldratingentity = $ratingRepository->findOneBy(array('challenge_id'=>$challengeRepository->find($idChallenge), 'participator_id'=>$allusersRepository->find($idparticipator),'rater_id'=>$allusersRepository->find(1)));


        if($oldratingentity){
            $oldratingentity->setRating((int)$rating);
        }else{
                    $ratingentity->setRating((int)$rating);
                    $ratingentity->setChallengeId($challengeRepository->findOneBy(array('id_challenge'=>(int)$idChallenge)));  
                    $ratingentity->setParticipatorId($allusersRepository->find($idparticipator));
                    $ratingentity->setRaterId($allusersRepository->find(1));
                    $entityManager->persist($ratingentity);
                    
                }
                $entityManager->flush();
        $avgrating = $entityManager->createQuery("SELECT avg(r.rating) as avg FROM APP\Entity\Rating r WHERE r.challenge_id = :id_challenge AND r.participator_id = :idPartiipator")
                            ->setParameter('id_challenge', $idChallenge)->setParameter('idPartiipator', $idparticipator)->getResult();
        return new JsonResponse( ['success' => true,'avg' => $avgrating[0] ]);
    }

}
