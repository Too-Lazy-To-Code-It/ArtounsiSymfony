<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;

use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Comment;
use App\Entity\Post;
use Knp\Component\Pager\PaginatorInterface; 


class ExploreController extends AbstractController
{
    #[Route('/explore', name: 'app_explore')]
    public function index(CategoryRepository $categoryRepository,Request $request,PostRepository $postRepository,PaginatorInterface $paginator): Response
    {
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        $poste = $paginator->paginate(
            $posts, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page',1 ), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        
        return $this->render('explore/index.html.twig', [
            'categories' => $categories,
            'posts' => $poste,
            'controller_name' => 'ExploreController',
        ]);
        
    }

    


}


