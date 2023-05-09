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
use Symfony\Component\Serializer\SerializerInterface;
class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,CategoryRepository $categoryRepository,PostRepository $postRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
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
    #[Route('/showCat', name: 'app_category_show_json')]
    public function showCat(CategoryRepository $categoryRepository, SerializerInterface $serializer): Response
    {
        $categories = $categoryRepository->findAll();

        $data = [];
        foreach ($categories as $category) {
            $data[] = [
                'id_category' => $category->getIdCategory(),
                'name_category' => $category->getNameCategory()
            ];
        }

        $json = $serializer->serialize($data, 'json');

        return new Response($json);
    }
    #[Route('/blogjon', name: 'app_blog_json')]
    public function getbolgs(CategoryRepository $categoryRepository,PostRepository $postRepository,Request $request,PaginatorInterface $paginator, SerializerInterface $serializer): Response
    {
        $categories = $categoryRepository->findAll();
        $post = $postRepository->findAll();

        $json = $serializer->serialize($post, 'json', ['groups' => "post"]);



        return new Response($json);
    }
}
