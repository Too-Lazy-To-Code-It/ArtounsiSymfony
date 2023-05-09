<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\AllusersRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


#[Route('/category')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'app_category_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,CategoryRepository $categoryRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
            'user'=>$user,
        ]);


    }


    #[Route('/new', name: 'app_category_new_json', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, CategoryRepository $categoryRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->save($category, true);

            return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/new.html.twig', [
            'category' => $category,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_category}', name: 'app_category_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,Category $category): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_category}/edit', name: 'app_category_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->save($category, true);

            return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{id_category}', name: 'app_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId_category(), $request->request->get('_token'))) {
            $categoryRepository->remove($category, true);
        }

        return $this->redirectToRoute('app_dashboard_home_page', [], Response::HTTP_SEE_OTHER);
    }
//THIS FOR PASING JSON NEW CATEGORY
    #[Route('/newcategoryjson', name: 'app_category_new_newcategoryjson')]
    public function newcategoryjson(Request $req,NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setNameCategory($req->get('name_category'));
        $em->persist($category);
        $em->flush();

        $jsonContent = [
            'id_category' => $category->getId_category(),
            'name_category' => $category->getNameCategory(),
        ];
        $jsonContent = $Normalizer->normalize($jsonContent, 'json', ['groups' => 'category']);
        return new Response(json_encode($jsonContent));

    }

    //UPDATE CATEGORY JSON
    #[Route('/{id_category}/editcategoryjson', name: 'app_category_edit_category_json', methods: ['GET', 'POST'])]
    public function editcategoryjson(Request $req,$id_category,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->find($id_category);
        $category->setNameCategory($req->get('name_category'));
        $em->flush();
        $jsonContent = [
            'id_category' => $category->getId_category(),
            'name_category' => $category->getNameCategory(),
        ];
        $jsonContent = $Normalizer->normalize($jsonContent, 'json', ['groups' => 'category']);
        return new Response("category updated successfully " .json_encode($jsonContent));

    }
    //DELETE JSON CATEGORY
    #[Route('/{id_category}/deletecategoryjson', name: 'app_category_delete_json_category')]
    public function deleteJSONCATEGORY(Request $req,$id_category,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->find($id_category);
        $em->remove($category);
        $em->flush();
        $jsonContent = [
            'id_category' => $category->getId_category(),
            'name_category' => $category->getNameCategory(),
        ];
        $jsonContent = $Normalizer->normalize($jsonContent, 'json', ['groups' => 'category']);
        return new Response("category deleted successfully " .json_encode($jsonContent));

    }

}
