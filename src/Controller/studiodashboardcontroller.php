<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\OffretravailRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DemandetravailRepository;
use App\Repository\AllusersRepository;
#[Route('/dashboard')]
class dashboardstudioController extends AbstractController
{
    #[Route('/', name: 'app_dashboard_studiodashboard', methods: ['GET'])]
    public function index(AllusersRepository $allusersRepository,OffretravailRepository $offretravailRepository): Response
    {
        $offretravails = $offretravailRepository->findAll();
       
        $nickname=$allusersRepository->find(1)->getNickname();
   
        return $this->render('dashboard/studiodashboard.html.twig', [
            'offretravails' => "nour",
            'nickname' =>   $nickname,
        ]);
    }
    #[Route('/mesoffres', name: 'app_dashboard_offres', methods: ['GET'])]
    public function offres(OffretravailRepository $offretravailRepository, Request $request): Response
    {
      
            $offretravails = $offretravailRepository->findAll();
           
            $offretravailbyid = $offretravailRepository->findBy(['id_user' => 1]);
       
        
        return $this->render('dashboard/tables-data.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }
    #[Route('/mesdemandess', name: 'app_dashboard_demandes', methods: ['GET'])]
    public function demandes(DemandetravailRepository $demandetravailRepository, Request $request): Response
    {
      
            $offretravails = $demandetravailRepository->findAll();
           
            $offretravailbyid = $demandetravailRepository->findBy(['id_user' => 1]);
       
        
        return $this->render('dashboard/tables-datademandes.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }
    

}
