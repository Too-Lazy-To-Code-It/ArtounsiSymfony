<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Offretravailarchive;
use App\Form\OffretravailarchiveType;
use App\Repository\AllusersRepository;
use App\Repository\OffretravailarchiveRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffretravailRepository;
use App\Entity\Offretravail;
use DateTime;
#[Route('/offretravailarchive')]
class OffretravailarchiveController extends AbstractController
{
    #[Route('/', name: 'app_offretravailarchive_index', methods: ['GET'])]
    public function index(SessionInterface $session,Request $request,AllusersRepository $allusersRepository,OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravails = $offretravailarchiveRepository->findAll();
        if($user->getType()=='Admin'){  $offretravailbyid =  $offretravailarchiveRepository->findAll();}
        else
        {$offretravailbyid =  $offretravailarchiveRepository->findBy(['id_user' =>  $userId ]);}
        return $this->render('offretravailarchive/index.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
            'user'=>$user,
        ]);
    }
   
    
    #[Route('/{idoffre}', name: 'app_offretravailarchive_recuperer', methods: ['POST'])]
    public function recuperer($idoffre,Request $request, Offretravailarchive $offretravailarchive, OffretravailRepository $offretravailRepository,OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravailarchive->getIdoffre(), $request->request->get('_token'))) {

            $offre=$offretravailarchiveRepository->find($idoffre);
            $offretravail = new Offretravail();
            $offretravail->setDescriptionoffre(  $offre->getDescriptionoffre());
            $offretravail->setTitreoffre($offre->getTitreoffre());
            $offretravail->setIdcategorie($offre->getIdcategorie());
            $offretravail->setCategorieoffre($offre->getCategorieoffre());
            $offretravail->setIdUser($offre->getIdUser());
            $offretravail->setTypeoffre($offre->getTypeoffre());
            $offretravail->setLocalisationoffre($offre->getLocalisationoffre());
            $now = new DateTime();
            $offretravail->setDateajoutoofre($now);
            $offretravail->setNickname($offre->getNickname());
           
          
            $offretravailRepository->save( $offretravail);
            $offretravailarchiveRepository->remove($offretravailarchive, true);
        }


        return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('delete/{idoffre}', name: 'app_offretravailarchive_delete', methods: ['POST'])]
    public function delete($idoffre,Request $request, Offretravailarchive $offretravailarchive, OffretravailRepository $offretravailRepository,OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {

        if ($this->isCsrfTokenValid('deleteoffre'.$offretravailarchive->getIdoffre(), $request->request->get('_tokendelete'))) {

          
            $offretravailarchiveRepository->remove($offretravailarchive, true);
        }


        return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/new', name: 'app_offretravailarchive_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravailarchive = new Offretravailarchive();
        $form = $this->createForm(OffretravailarchiveType::class, $offretravailarchive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailarchiveRepository->save($offretravailarchive, true);

            return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravailarchive/new.html.twig', [
            'offretravailarchive' => $offretravailarchive,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravailarchive_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,Offretravailarchive $offretravailarchive): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('offretravailarchive/show.html.twig', [
            'offretravailarchive' => $offretravailarchive,
            'user'=>$user,
        ]);
    }


   
}
