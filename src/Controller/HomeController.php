<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Repository\AllusersRepository;
use App\Repository\CategoryRepository;
use App\Repository\OffretravailRepository;
use App\Repository\PostRepository;
use App\Repository\ProduitsRepository;
use mysql_xdevapi\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/home', name: 'app_home')]
    public function index(OffretravailRepository $offretravailRepository, Request $request, SessionInterface $session, ProduitsRepository $produitsRepository, AllusersRepository $allusersRepository, CategoryRepository $categoryRepository, PostRepository $postRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravails = $offretravailRepository->findby([], [], 3);
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        $produits = $produitsRepository->findby([], [], 6);


        return $this->render('base.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
            '$produits' => $produits,
            'user'=> $user,
            'offretravails' => $offretravails,
            'controller_name' => 'HomeController',

        ]);
    }
}
