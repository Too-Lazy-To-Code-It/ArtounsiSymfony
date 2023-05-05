<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Participation;
use App\Entity\Rating;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use App\Repository\RatingRepository;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/participation')]
class ParticipationController extends AbstractController
{
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,ParticipationRepository $participationRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('participation/index.html.twig', [
            'participations' => $participationRepository->findAll(),
            'user'=>$user,
        ]);
    }

    #[Route('/new', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository, Request $request, ParticipationRepository $participationRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participation->setIdUser($user);
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_participation}', name: 'app_participation_show', methods: ['GET'])]
    public function show(SessionInterface $session,Request $request, ManagerRegistry $mr, AllusersRepository $allusersRepository, RatingRepository $ratingRepository, ParticipationRepository $participationRepository, Participation $participation, $id_participation): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $p = $participationRepository->find($id_participation);
        $em = $mr->getManager();

        $avgrating = $em->createQuery("SELECT avg(r.rating) as avg FROM APP\Entity\Rating r, APP\Entity\Participation p WHERE r.participator_id = p.id_user  AND r.participator_id = :idParticipator AND r.challenge_id = :challenge_id")
            ->setParameter('idParticipator', $p->getIdUser())->setParameter('challenge_id', $p->getIdChallenge()->getId())->getResult();

        if ($ratingRepository->findOneBy(array('challenge_id' => $p->getIdChallenge()->getId(), 'participator_id' => $allusersRepository->find($p->getIdUser()), 'rater_id' => $allusersRepository->find($userId))))
            $oldrating = $ratingRepository->findOneBy(array('challenge_id' => $p->getIdChallenge()->getId(), 'participator_id' => $allusersRepository->find($p->getIdUser()), 'rater_id' => $allusersRepository->find($userId)));
        else {
            $oldrating = new Rating();
            $oldrating->setRating(0);
        }
        return $this->render('challenge/participation.html.twig', [
            'p' => $p,
            'avg' => $avgrating[0],
            'oldrating' => $oldrating,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_participation}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, Participation $participation, ParticipationRepository $participationRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participationRepository->save($participation, true);

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_participation}/delete', name: 'app_participation_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, ParticipationRepository $participationRepository, ManagerRegistry $mr, $id_participation): Response
    {
        $em = $mr->getManager();
        $participation = $participationRepository->find($id_participation);
        $em->remove($participation);
        $em->flush();

        return $this->redirectToRoute('app_challenge_show', ['id' => $participation->getId()], Response::HTTP_SEE_OTHER);
    }
}
