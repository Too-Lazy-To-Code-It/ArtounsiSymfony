<?php

namespace App\Controller;

use App\Entity\Lignepanier;
use App\Form\LignepanierType;
use App\Repository\LignepanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;





#[Route('/lignepanier')]
class LignepanierController extends AbstractController
{
    #[Route('/', name: 'app_lignepanier_index', methods: ['GET'])]
    public function index(LignepanierRepository $lignepanierRepository): Response
    {
        return $this->render('lignepanier/index.html.twig', [
            'lignepaniers' => $lignepanierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lignepanier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LignepanierRepository $lignepanierRepository): Response
    {
        $lignepanier = new Lignepanier();
        $form = $this->createForm(LignepanierType::class, $lignepanier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lignepanierRepository->save($lignepanier, true);

            return $this->redirectToRoute('app_lignepanier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lignepanier/new.html.twig', [
            'lignepanier' => $lignepanier,
            'form' => $form,
        ]);
    }

    #[Route('/showlignepanier/{idlignepanier}', name: 'app_lignepanier_show', methods: ['GET'])]
    public function show(Lignepanier $lignepanier): Response
    {
        return $this->render('lignepanier/show.html.twig', [
            'lignepanier' => $lignepanier,
        ]);
    }

    #[Route('/{idlignepanier}/edit', name: 'app_lignepanier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lignepanier $lignepanier, LignepanierRepository $lignepanierRepository): Response
    {
        $form = $this->createForm(LignepanierType::class, $lignepanier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lignepanierRepository->save($lignepanier, true);

            return $this->redirectToRoute('app_lignepanier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lignepanier/edit.html.twig', [
            'lignepanier' => $lignepanier,
            'form' => $form,
        ]);
    }

    #[Route('/deleteligne/{idlignepanier}', name: 'app_lignepanier_delete', methods: ['GET', 'POST'])]
    public function delete(int $idlignepanier,ManagerRegistry $doctrine,LignepanierRepository $rep): Response
    {   $entityManager = $doctrine->getManager();
        $lignePanier = $rep->find($idlignepanier);
        $idpanier = $lignePanier->getIdpanier();
        $entityManager->remove($lignePanier);
        $entityManager->flush();

        return $this->redirectToRoute('app_panier_show', ['idpanier'=>1],);
    }


### méthode de suppression d'un produit du panier avec ajax  

    #[Route('/deleteAjaxligne/{idlignepanier}', name: 'app_lignepanier_delete_with_ajax', methods: ['POST'])]
public function deleteWithAjax(int $idlignepanier, Request $request, ManagerRegistry $doctrine, LignepanierRepository $rep): JsonResponse
{
  $entityManager = $doctrine->getManager();
  $lignePanier = $rep->find($idlignepanier);
  $idpanier = $lignePanier->getIdpanier();
  if ($this->isCsrfTokenValid('deleteproduit', $request->request->get('_token'))) {
    $entityManager->remove($lignePanier);
    $entityManager->flush();
    return new JsonResponse(['success' => true]);
  }

  return new JsonResponse(['success' => false]);
}
   







}






