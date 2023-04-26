<?php

namespace App\Controller;

use App\Entity\Challenge;
use App\Entity\Rating;
use App\Entity\Participation;
use App\Entity\Allusers;
use App\Form\ChallengeType;
use App\Form\ParticipationType;
use App\Form\RatingType;
use App\Repository\AllusersRepository;
use App\Repository\ChallengeRepository;
use App\Repository\RatingRepository;
use App\Repository\ParticipationRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/challenge')]
class ChallengeController extends AbstractController
{
    #[Route('/', name: 'app_challenge_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ChallengeRepository $challengeRepository,CategoryRepository $CategoryRepository): Response
    {
        $challenges = $challengeRepository->findAll();
        $keyword = null;
        $category = null;
        if($request->isMethod("POST"))
        {
            $keyword = $request->get('keyword');
            $category = $request->get('Category');

            if($keyword=="" && $category=="null")
                $challenges = $challengeRepository->findAll();
            else if(($keyword==""||$keyword==null) && $category!="null")
                $challenges = $challengeRepository->findBy(array('id_categorie'=>$category ));
            else if(($keyword!=""||$keyword!=null) && $category=="null")
                $challenges = $challengeRepository->findBy(array( 'title'=>$keyword));
            else
                $challenges = $challengeRepository->findBy(array( 'title'=>$keyword, 'id_categorie'=>$category ));
        }

        return $this->render('challenge/index.html.twig', [
            'challenges' => $challenges,
            'categories' => $CategoryRepository->findAll(),
            'keyword' => $keyword,
            'Categorie' => $category,
        ]);
    }

    #[Route('/calendar', name: 'app_challenge_calendar')]
    public function calendar(ChallengeRepository $challengeRepository): Response
    {
        $challengessdata = $challengeRepository->findAll();
        foreach ($challengessdata as $c) {
            $challengesdata[] = [
                'title' => $c->getTitle(),
                'description' => $c->getDescription(),
                'dateChallenge' =>$c->getDateC(),
                'id' => $c->getId(),

//                'startHour' => $evemt->getStartHour(),
                'color' => '#257e4a',
            ];
        }


        return $this->render('challenge/calendar.html.twig', [
            'challengesdata' => $challengesdata
        ]);
    }
    
    #[Route('/new', name: 'app_challenge_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ChallengeRepository $challengeRepository): Response
    {
        $challenge = new Challenge();
        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //on récupère l'image transmise
            $image = $form->get('Image')->getData();

            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            //on stocke l'image dans la bd
            $challenge->setPathIMG($fichier); 

            $challengeRepository->save($challenge, true);
            return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('challenge/new.html.twig', [
            'challenge' => $challenge,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_challenge_show', methods: ['GET', 'POST'])]
    public function show(Request $request, AllusersController $alluser,Challenge $challenge,ParticipationRepository $participationRepository,RatingRepository $ratingRepository): Response
    {
        $AllusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $oldparticipation = $participationRepository->findOneBy(array( 'id_challenge'=>$challenge, 'id_user'=>$AllusersRepository->findBy(array( 'id_user'=>2))[0] ));

        $oldrating = $ratingRepository->findOneBy(array( 'challenge_id'=>$challenge, 'rater_id'=>$AllusersRepository->findBy(array( 'id_user'=>1))[0] ));
        
        
        $participation = new Participation();
        $rating = new Rating();

        if($oldparticipation)
            $form = $this->createForm(ParticipationType::class, $oldparticipation);
        else
            $form = $this->createForm(ParticipationType::class, $participation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $image = $form->get('Image')->getData();
            if($image!=null){
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
            }
            else if($oldparticipation)
                $fichier = $oldparticipation->getIMGParticipation();
            if($oldparticipation)
                {
                $oldparticipation->setIdUser($AllusersRepository->findBy(array( 'id_user'=>2))[0]);
                $oldparticipation->setDescription($form->get('Description')->getData());
                $oldparticipation->setIdChallenge($challenge);
                $oldparticipation->setIMGParticipation($fichier);
                $participationRepository->save($oldparticipation, true);
                }
            else{
                $participation->setIdUser($AllusersRepository->findBy(array( 'id_user'=>2))[0]);
                $participation->setDescription($form->get('Description')->getData());
                $participation->setIdChallenge($challenge);
                $participation->setIMGParticipation($fichier);
                $participationRepository->save($participation, true);
            }
        }

        return $this->render('challenge/show.html.twig', [
            'challenge' => $challenge,
            'form' => $form->createView(),
        ]);
    }

    /*#[Route('/{id}', name: 'app_challenge_show', methods: ['GET', 'POST'])]
    public function show(Request $request,AllusersController $alluser,Challenge $challenge,ParticipationRepository $participationRepository): Response
    {   
        
        $AllusersRepository =  $this->getDoctrine()->getRepository(Allusers::class);
        $form->handleRequest($request);
        if($request->isMethod("POST"))
        {
            $extension = substr($request->get('myfile'), strpos($request->get('myfile'),".", $offset = 0)+1, 10);
            $fichier = md5(uniqid()) . '.' . $extension;
            move_uploaded_file(
                $this->getParameter('images_directory'),
                $fichier
            );

            $participation = new  Participation();
            $participation->setUser($AllusersRepository->findBy(array( 'id'=>1))[0]);
            $participation->setChallenge($challenge);
            $participation->setIMGParticipation($fichier);
            
            $participation->setDescription($request->get('description'));
            $participationRepository->save($participation, true);  
        }
        return $this->render('challenge/show.html.twig', [
            'challenge' => $challenge,
        ]);
    }*/

    #[Route('/edit/{id}', name: 'app_challenge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Challenge $challenge, ChallengeRepository $challengeRepository): Response
    {
        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //on récupère l'image transmise
            $image = $form->get('Image')->getData();
            if($image!=null){
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            //on stocke l'image dans la bd

            $challenge->setPathIMG($fichier);}

            $challengeRepository->save($challenge, true);

            return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('challenge/edit.html.twig', [
            'challenge' => $challenge,
            'form' => $form,
        ]);
    }

    #[Route('/{id_challenge}/delete', name: 'app_challenge_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Challenge $challenge, ChallengeRepository $challengeRepository, ManagerRegistry $mr, $id_challenge): Response
    {
        $em = $mr->getManager();
        $tutoriel = $challengeRepository->find($id_challenge);
        $em->remove($tutoriel);
        $em->flush();

        return $this->redirectToRoute('app_challenge_index', [], Response::HTTP_SEE_OTHER);
    }
}
