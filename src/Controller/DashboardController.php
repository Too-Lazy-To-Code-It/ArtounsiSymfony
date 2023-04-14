<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;


#[Route('/Dashboard')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_Dashboard_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('Dashboard/index.html.twig', [
           
        ]);
    }

    
    #[Route('/Dashboard', name: 'app_Dashboard_show', methods: ['GET'])]
    public function show(): Response
    
    {
        return $this->render('Dashboard/show.html.twig', [
         
        ]);
    }

   
    


   





}
