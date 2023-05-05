<?php
namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Post;
use App\Repository\AllusersRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_search_post")
     */
    public function search(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, PostRepository $postRepository,CategoryRepository $categoryRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $title = $request->get('title');
        $post = $postRepository->findOneBy(['title_p' => $title]);

        if (!$post) {
            // Post not found, return error response or redirect to search page
            $categories = $categoryRepository->findAll();
            $posts = $postRepository->findAll();
            return $this->render('explore/not_found.html.twig', [
                'keyword' => $title,
                'post' => $post,
                'categories' => $categories,
                'posts' => $posts,
                'user'=>$user,
            ]);
        }
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        return $this->render('explore/view.html.twig', [
            'post' => $post,
            'categories' => $categories,
            'posts' => $posts,
            'user'=>$user,
        ]);
    }

    

}

