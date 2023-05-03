<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Panier;
use App\Form\ProduitsType;
use App\Repository\AllusersRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use DateTime;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


#[Route('/produits')]
class ProduitsController extends AbstractController
{
    #[Route('/', name: 'app_produits_index', methods: ['GET'])]
    public function index(AllusersRepository $allusersRepository, Request $request, PaginatorInterface $paginator, ProduitsRepository $produitsRepository): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        $idpanier = $user->getPaniers()->first()->getidpanier();
        $produits = $produitsRepository->findAll();

        $produits = $paginator->paginate(
            $produits,
            $request->query->getInt('page', 1),
            2
        );

        return $this->render('produits/index.html.twig', [
            'produits' => $produits,
            'idpanier' => $idpanier,
            'user' => $user,
        ]);
    }


    #[Route('/new', name: 'app_produits_new', methods: ['GET', 'POST'])]
    public function new(AllusersRepository $allusersRepository, Request $request, ProduitsRepository $produitsRepository): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);

        $currentDate = new DateTime();
        $produit = new Produits();
        $produit->setDateajout(new \DateTime());
        $produit->setIdUser($user);
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $image */
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $image->guessExtension();

                try {
                    $image->move(
                        $this->getParameter('app.upload_dir'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception
                }

                $produit->setImage($newFilename);
            }
            $produitsRepository->save($produit, true);
            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idproduit}', name: 'app_produits_show', methods: ['GET'])]
    public function show(AllusersRepository $allusersRepository, Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response

    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        $idpanier = $user->getPaniers()->first()->getidpanier();

        return $this->render('produits/show.html.twig', [
            'produits' => $produitsRepository->findAll(),
            'produit' => $produit,
            'idpanier' => $idpanier,
            'user'=>$user,

        ]);
    }

    #[Route('/{idproduit}/edit', name: 'app_produits_edit', methods: ['GET', 'POST'])]
    public function edit(AllusersRepository $allusersRepository, Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        // Définir l'utilisateur actuel comme propriétaire du produit
        $produit->setIdUser($user);
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $image->guessExtension();

                try {
                    $image->move(
                        $this->getParameter('app.upload_dir'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception
                }
                $produit->setImage($newFilename);
            }

            $produitsRepository->save($produit, true);

            return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idproduit}', name: 'app_produits_delete', methods: ['POST'])]
    public function delete(AllusersRepository $allusersRepository, Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        $produit->setIdUser($user);
        // Vérifier si l'utilisateur est le propriétaire du produit
        if ($produit->getIdUser() !== $user) {
            throw new AccessDeniedHttpException('Vous n\'êtes pas autorisé à supprimer ce produit.');
        }

        if ($this->isCsrfTokenValid('deleteproduitFront' . $produit->getIdproduit(), $request->request->get('_token'))) {
            $produitsRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produits_index', [], Response::HTTP_SEE_OTHER);
    }


}
