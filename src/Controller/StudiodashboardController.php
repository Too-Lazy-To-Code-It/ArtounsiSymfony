<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffretravailRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DemandetravailRepository;
use App\Repository\AllusersRepository;

#[Route('/dashboard')]
class StudiodashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard_studiodashboard', methods: ['GET'])]
    public function index(SessionInterface $session,Request $request,AllusersRepository $allusersRepository,OffretravailRepository $offretravailRepository): Response
    {
        if ($allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_index');
        }
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravails = $offretravailRepository->findAll();

        $nickname=$allusersRepository->find( $userId)->getNickname();

        return $this->render('dashboard/studiodashboard.html.twig', [
            'offretravails' => "nour",
            'nickname' =>   $nickname,
            'user'=>$user,
        ]);
    }
    #[Route('/mesoffres', name: 'app_dashboard_offres', methods: ['GET'])]
    public function offres(SessionInterface $session,AllusersRepository $allusersRepository,OffretravailRepository $offretravailRepository, Request $request): Response
    {

        if ($allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_index');
        }
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravails = $offretravailRepository->findAll();
        if( $user->getType()=='Admin'){ $offretravailbyid = $offretravailRepository->findAll();}
        else{ $offretravailbyid = $offretravailRepository->findBy(['id_user' =>  $userId]);}


        return $this->render('dashboard/tables-data.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }
    #[Route('/mesdemandess', name: 'app_dashboard_demandes', methods: ['GET'])]
    public function demandes(SessionInterface $session,AllusersRepository $allusersRepository,DemandetravailRepository $demandetravailRepository, Request $request): Response
    {

        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravails = $demandetravailRepository->findAll();
        if($user->getType()=='Admin'){    $offretravailbyid = $demandetravailRepository->findAll();}
        else{$offretravailbyid = $demandetravailRepository->findBy(['id_user' => $userId]);}


        return $this->render('dashboard/tables-datademandes.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
            'user'=>$user,
        ]);
    }

}
