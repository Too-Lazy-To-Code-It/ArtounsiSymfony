<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Request;
use DateTime;




class ProduitsBackController extends AbstractController
{
    #[Route('/produits/back', name: 'app_produits_back')]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository,ProduitsRepository $produitsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('produits_back/index.html.twig', [
            'controller_name' => 'ProduitsBackController',
            'produits' => $produitsRepository->findAll(),
            'user'=>$user,
           
        ]);
    }
   

    #[Route('/showBack/{idproduit}', name: 'app_produitsBack_show', methods: ['GET'])]
    public function show(AllusersRepository $allusersRepository,SessionInterface $session,Produits $produit): Response
    
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('produitsBack/show.html.twig', [
            'produit' => $produit,
            'user'=>$user,
        ]);
    }


    #[Route('/newBack', name: 'app_produits_back_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,AllusersRepository $allusersRepository,Request $request, ProduitsRepository $produitsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $currentDate = new DateTime();
        $produit = new Produits();
        $produit->setDateajout(new \DateTime());
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $image */
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();

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
            return $this->redirectToRoute('app_produits_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits_back/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idproduit}/editBack', name: 'app_produits_back_edit', methods: ['GET', 'POST'])]
    public function edit(AllusersRepository $allusersRepository,SessionInterface $session,Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image->guessExtension();

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

            return $this->redirectToRoute('app_produits_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produits_back/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
            'user'=>$user,
        ]);
    }
   
    #[Route('/deleteBack/{idproduit}', name: 'app_produits_delete_back', methods: ['GET', 'POST'])]
    public function delete(Request $request, Produits $produit, ProduitsRepository $produitsRepository): Response
    {
        if ($this->isCsrfTokenValid('deleteBack'.$produit->getIdproduit(), $request->request->get('_token'))) {
            $produitsRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produits_back', [], Response::HTTP_SEE_OTHER);
    }

  






}
