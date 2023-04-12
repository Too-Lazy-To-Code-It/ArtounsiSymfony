<?php

namespace App\Controller;

use App\Entity\Demandetravail;
use App\Repository\GrosmotsRepository;
use App\Form\DemandetravailType;
use App\Repository\DemandetravailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use Symfony\Component\Form\FormError;
use App\Repository\AllusersRepository;
use DateTime;use App\Repository\OffretravailRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;
#[Route('/demandetravail')]
class DemandetravailController extends AbstractController
{
    #[Route('/', name: 'app_demandetravail_index', methods: ['GET'])]
    public function index(DemandetravailRepository $demandetravailRepository): Response
    {
        
        $demandetravails = $demandetravailRepository->findAll();
       
        $demandetravailbyid = $demandetravailRepository->findBy(['id_user' => 1]);
        return $this->render('demandetravail/index.html.twig', [
            'demandetravails' => $demandetravails,
            'demandetravailbyid' =>  $demandetravailbyid,
        ]);
    }
    #[Route('/chercher', name: 'app_demande_travail_chercheroffre', methods: ['GET', 'POST'])]

    public function chercheroffre(OffretravailRepository $offretravailRepository, Request $request): Response
    {
        $resultOfSearch=$offretravailRepository->findAll();
        if($request->isMethod("POST"))
        {
            $keyword = $request->get('niveau');
            $resultOfSearch =  $offretravailRepository->chercherOffres( $keyword);
        }
        return $this->render('demandetravail/chercheroffre.html.twig',array (
            
            'offretravailbyid' =>  $resultOfSearch,
        ));
    }
    #[Route('/offressimilaires', name: 'app_demandetravail_offressimilaires', methods: ['GET'])]

    public function offressimilaires(DemandetravailRepository $demandetravailRepository, Request $request,AllusersRepository $allusersRepository): Response
    {
    
     $id=1;
          $demandessimilaires=$demandetravailRepository->findByoffressimilaires($id);
          return $this->render('demandetravail/chercheroffre.html.twig',array (
            
              'offretravailbyid' =>   $demandessimilaires,
          ));
        
    }
   #[Route('/{idDemande}/edit', name: 'app_demandetravail_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,$idDemande, CategoryRepository $categoryRepository,Demandetravail $demandetravail, DemandetravailRepository $demandetravailRepository,GrosmotsRepository $mot): Response
    { 
      
        $form = $this->createForm(DemandetravailType::class, $demandetravail);
       
        $form->handleRequest($request); 
       // Set the PDF file in the form
    
        $verif=true;
        if ($form->isSubmitted()) { $titre = $form->get('titreDemande')->getData();
            $desc= $form->get('descriptionDemande')->getData();
            if( $titre!="" ){
            if($mot->checkGrosMots($titre))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('titreDemande')->addError($error); $verif=false;
            }}
            if($desc!="" ){
            if($mot->checkGrosMots( $desc))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('descriptionDemande')->addError($error); $verif=false;
            }}
        }
        if ($form->isSubmitted() && $form->isValid()&& $verif==true) {
            $nomcategorie=$categoryRepository->find( $form->get('idcategorie')->getData())->getNameCategory();
              
            $demandetravail -> setCategoriedemande($nomcategorie);
   $pdfFile = $form->get('pdf')->getData();
   if(  $pdfFile!=null){
    $fileName = md5(uniqid()) . '.' .   $pdfFile->guessExtension();
   $pdfFile->move(
    $this->getParameter('upload_directory'),
    $fileName
);
   //on stocke l'image dans la bd

   $demandetravail ->setPdf( $fileName);}
            $demandetravailRepository->save($demandetravail, true);

            return $this->redirectToRoute('app_dashboard_demandes', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demandetravail/edit.html.twig', [
            'demandetravail' => $demandetravail,
            'form' => $form,
        ]);
    }
    #[Route('/new', name: 'app_demandetravail_new', methods: ['GET', 'POST'])]
    public function new(AllusersRepository $allusersRepository,Request $request,CategoryRepository $categoryRepository, DemandetravailRepository $demandetravailRepository,GrosmotsRepository $mot): Response
    {
        $demandetravail = new Demandetravail();
      
         // Get the uploaded file
     
         $user =$allusersRepository->find(1);
        
    
         $now = new DateTime();
         $verif=true;
         $demandetravail ->setDateajoutdemande($now);
        $form = $this->createForm(DemandetravailType::class, $demandetravail);
        $form->handleRequest($request);
        if ($form->isSubmitted()) { $titre = $form->get('titreDemande')->getData();
            $desc= $form->get('descriptionDemande')->getData();
            if( $titre!="" ){
            if($mot->checkGrosMots($titre))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('titreDemande')->addError($error); $verif=false;
            }}
            if($desc!="" ){
            if($mot->checkGrosMots( $desc))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('descriptionDemande')->addError($error); $verif=false;
            }}
        }
        if ($form->isSubmitted() && $form->isValid()&& $verif==true) {
              // Get the uploaded file

              $nomcategorie=$categoryRepository->find( $form->get('idcategorie')->getData())->getNameCategory();
              
              $demandetravail -> setCategoriedemande($nomcategorie);
              $nickname=$allusersRepository->find(1)->getNickname();
              $demandetravail-> setNickname( $nickname);
              $demandetravail->setIdUser($user);
   $pdfFile = $form->get('pdf')->getData();
   if(  $pdfFile!=null){
    $fileName = md5(uniqid()) . '.' .   $pdfFile->guessExtension();
   $pdfFile->move(
    $this->getParameter('upload_directory'),
    $fileName
);
   //on stocke l'image dans la bd

   $demandetravail ->setPdf( $fileName);}
            $demandetravailRepository->save($demandetravail, true);
  // Get the uploaded file
       
            return $this->redirectToRoute('app_dashboard_demandes', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demandetravail/new.html.twig', [
            'demandetravail' => $demandetravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idDemande}', name: 'app_demandetravail_show', methods: ['GET'])]
    public function show(Demandetravail $demandetravail): Response
    {
        return $this->render('demandetravail/show.html.twig', [
            'demandetravail' => $demandetravail,
        ]);
    }
    
   
   

    #[Route('/{idDemande}', name: 'app_demandetravail_delete', methods: ['POST'])]
    public function delete(Request $request, Demandetravail $demandetravail, DemandetravailRepository $demandetravailRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandetravail-> getidemande(), $request->request->get('_token'))) {
            $demandetravailRepository->remove($demandetravail, true);
        }

        return $this->redirectToRoute('app_dashboard_demandes', [], Response::HTTP_SEE_OTHER);
    }
}
