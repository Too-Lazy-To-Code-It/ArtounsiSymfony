<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; // Nous avons besoin d'accéder à la requête pour obtenir le numéro de page
use Knp\Component\Pager\PaginatorInterface; 
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,CategoryRepository $categoryRepository,PostRepository $postRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $user=new Allusers();
        if ($userId = $session->get('user_id') != null) {
            $user = $allusersRepository->find($userId);
        }
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        $poste = $paginator->paginate(
            $posts, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page',1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2// Nombre de résultats par page
        );
        return $this->render('blog/index.html.twig', [
            'categories' => $categories,
            'posts' => $poste,
            'controller_name' => 'BlogController',
            'user'=>$user,
        ]);
    }
}
