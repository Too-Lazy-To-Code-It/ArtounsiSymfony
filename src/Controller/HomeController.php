<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CategoryRepository $categoryRepository,PostRepository $postRepository): Response
{
    $categories = $categoryRepository->findAll();
    $posts = $postRepository->findAll();
    

    return $this->render('base.html.twig', [
        'categories' => $categories,
        'posts' => $posts,
        'controller_name' => 'HomeController',
    ]);
}
}
