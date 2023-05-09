<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository, PostRepository $postRepository,ProduitsRepository $produitsRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        $produits = $produitsRepository->findAll();

        return $this->render('base.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
            '$produits' => $produits,
            'controller_name' => 'HomeController',

        ]);
    }





}
