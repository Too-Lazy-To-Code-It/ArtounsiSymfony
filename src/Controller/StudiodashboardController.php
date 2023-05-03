<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffretravailRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DemandetravailRepository;
use App\Repository\AllusersRepository;

#[Route('/dashboard')]
class StudiodashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard_studiodashboard', methods: ['GET'])]
    public function index(Request $request,AllusersRepository $allusersRepository,OffretravailRepository $offretravailRepository): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        $offretravails = $offretravailRepository->findAll();

        $nickname=$allusersRepository->find( $userId)->getNickname();

        return $this->render('dashboard/studiodashboard.html.twig', [
            'offretravails' => "nour",
            'nickname' =>   $nickname,
        ]);
    }
    #[Route('/mesoffres', name: 'app_dashboard_offres', methods: ['GET'])]
    public function offres(AllusersRepository $allusersRepository,OffretravailRepository $offretravailRepository, Request $request): Response
    {

        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);

        $offretravails = $offretravailRepository->findAll();
        if( $user->getType()=='Admin'){ $offretravailbyid = $offretravailRepository->findAll();}
        else{ $offretravailbyid = $offretravailRepository->findBy(['id_user' =>  $userId]);}


        return $this->render('dashboard/tables-data.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }
    #[Route('/mesdemandess', name: 'app_dashboard_demandes', methods: ['GET'])]
    public function demandes(AllusersRepository $allusersRepository,DemandetravailRepository $demandetravailRepository, Request $request): Response
    {

        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);

        $offretravails = $demandetravailRepository->findAll();
        if($user->getType()=='Admin'){    $offretravailbyid = $demandetravailRepository->findAll();}
        else{$offretravailbyid = $demandetravailRepository->findBy(['id_user' => $userId]);}


        return $this->render('dashboard/tables-datademandes.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }

}
