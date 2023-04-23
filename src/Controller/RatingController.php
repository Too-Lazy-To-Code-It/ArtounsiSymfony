<?php

namespace App\Controller;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Rating;
use App\Form\RatingType;
use App\Entity\Allusers;
use App\Repository\ChallengeRepository;
use App\Repository\RatingRepository;
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
    #[Route('/', name: 'app_rating_index', methods: ['GET'])]
    public function index(RatingRepository $ratingRepository): Response
    {
        return $this->render('rating/index.html.twig', [
            'ratings' => $ratingRepository->findAll(),
        ]);
    }

    #[Route('/new/{rating}/{idChallenge}', name: 'app_rating_new', methods: ['GET', 'POST'])]
    public function new($rating,$idChallenge, Request $request, ManagerRegistry $doctrine, ChallengeRepository $challengeRepository, ManagerRegistry $mr, RatingRepository $ratingRepository): Response
    {
        $allusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $requestData = $request;
        
        $ratingentity = new Rating();
        $entityManager = $doctrine->getManager();

        $ratingentity->setRating((int)$rating);
        $ratingentity->setChallengeId($challengeRepository->findOneBy(array('id_challenge'=>(int)$idChallenge)));  
        $ratingentity->setParticipatorId($allusersRepository->find(2));
        $ratingentity->setRaterId($allusersRepository->find(1));
        $entityManager->persist($ratingentity);
        $entityManager->flush();
        return new JsonResponse( ['success' => true ]);
    }

    #[Route('/{id_rating}', name: 'app_rating_show', methods: ['GET'])]
    public function show(Rating $rating): Response
    {
        return $this->render('rating/show.html.twig', [
            'rating' => $rating,
        ]);
    }

    #[Route('/{id_rating}/edit', name: 'app_rating_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Rating $rating, RatingRepository $ratingRepository): Response
    {
        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ratingRepository->save($rating, true);

            return $this->redirectToRoute('app_rating_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('rating/edit.html.twig', [
            'rating' => $rating,
            'form' => $form,
        ]);
    }

    #[Route('/{id_rating}', name: 'app_rating_delete', methods: ['POST'])]
    public function delete(Request $request, Rating $rating, RatingRepository $ratingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rating->getId_rating(), $request->request->get('_token'))) {
            $ratingRepository->remove($rating, true);
        }

        return $this->redirectToRoute('app_rating_index', [], Response::HTTP_SEE_OTHER);
    }
}
