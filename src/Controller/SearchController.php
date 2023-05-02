<?php
namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategoryRepository;
use App\Repository\PostRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_search_post")
     */
    public function search(Request $request, PostRepository $postRepository,CategoryRepository $categoryRepository): Response
    {
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
            ]);
        }
        $categories = $categoryRepository->findAll();
        $posts = $postRepository->findAll();
        return $this->render('explore/view.html.twig', [
            'post' => $post,
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    

}

