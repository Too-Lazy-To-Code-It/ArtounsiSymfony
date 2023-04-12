<?php

namespace App\Controller;

use App\Entity\Offretravail;
use App\Entity\Allusers;
use App\Form\OffretravailType;
use App\Repository\OffretravailRepository;use App\Repository\DemandetravailRepository;
use App\Repository\CategoryRepository;
use App\Repository\GrosmotsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AllusersRepository;
use Symfony\Component\Form\FormError;
use DateTime;

use App\Form\OffretravailarchiveType;
use App\Repository\OffretravailarchiveRepository;
use App\Entity\Offretravailarchive;
#[Route('/offretravail')]
class OffretravailController extends AbstractController
{
   
    #[Route('/', name: 'app_offretravail_index', methods: ['GET'])]
public function index(OffretravailRepository $offretravailRepository, Request $request): Response
{
  
        $offretravails = $offretravailRepository->findAll();
       
        $offretravailbyid = $offretravailRepository->findBy(['id_user' => 1]);
   
    
    return $this->render('offretravail/index.html.twig', [
        'offretravails' => $offretravails,
        'offretravailbyid' => $offretravailbyid,
    ]);
}
/*
#[Route('/chercher', name: 'app_offretravail_chercheroffre', methods: ['GET', 'POST'])]

public function cherchertggoffre(OffretravailRepository $offretravailRepository, Request $request): Response
{
    $form = $this->createForm(ChercherOffreType::class);
    $form->handleRequest($request);
    $all=$offretravailRepository->findAll();
    if ($form->isSubmitted()) {
        $mots=$form['q']->getData();
        $resultOfSearch =  $offretravailRepository->chercherOffres($mots);
        return $this->renderForm('offretravail/chercheroffre.html.twig', [
            'offretravails' => $form,
        'offretravailbyid' =>  $resultOfSearch]);
      
    }
 
    return $this->render('offretravail/chercheroffre.html.twig', [
        'offretravails' => $form,
        'offretravailbyid' => $all,
    ]);
}
   */ 
  #[Route('/chercherdemande', name: 'app_offretravail_chercherdemande', methods: ['GET', 'POST'])]

  public function chercherdemande(DemandetravailRepository $offretravailRepository, Request $request): Response
  {
      $resultOfSearch=$offretravailRepository->findAll();
      if($request->isMethod("POST"))
      {
          $keyword = $request->get('niveau');
          $resultOfSearch =  $offretravailRepository->chercherdemandes( $keyword);
      }
      return $this->render('offretravail/chercherdemande.html.twig',array (
          'offretravails' => $offretravailRepository->findAll(),
          'offretravailbyid' =>    $resultOfSearch ,
          
      ));
  }
  #[Route('/demandessimilaires', name: 'app_offretravail_demandessimilaires', methods: ['GET'])]

  public function demandessimilaires(OffretravailRepository $offretravailRepository, Request $request,AllusersRepository $allusersRepository): Response
  {
  
   $id=1;
        $demandessimilaires=$offretravailRepository->findBydemandessimilaires($id);
        return $this->render('offretravail/chercherdemande.html.twig',array (
            'offretravails' => $offretravailRepository->findAll(),
            'offretravailbyid' =>   $demandessimilaires,
        ));
      
  }

    #[Route('/new', name: 'app_offretravail_new', methods: ['GET', 'POST'])]
    public function new(Request $request,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot,AllusersRepository $allusersRepository): Response
    {
        $offretravail = new Offretravail();
        $user =$allusersRepository->find(1);
      
         $now = new DateTime();
        $offretravail->setDateajoutoofre( $now);
       $verif=true;
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);
        if ($form->isSubmitted()) { $titre = $form->get('titreoffre')->getData();
            $desc= $form->get('descriptionoffre')->getData();
            if( $titre!="" )
           { if($mot->checkGrosMots($titre))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('titreoffre')->addError($error);
               
                $verif=false;
            }}
            if( $desc!=""){
            if($mot->checkGrosMots( $desc))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('descriptionoffre')->addError($error);
                $verif=false;
            }}
        }
        if ($form->isSubmitted() && $form->isValid()&&  $verif==true) {
            $offretravail->setIdUser($user);
            $nomcategorie=$categoryRepository->find( $form->get('idcategorie')->getData())->getNameCategory();
          $nickname=$allusersRepository->find(1)->getNickname();
            $offretravail-> setNickname( $nickname);
            $offretravail-> setIdUser($user);
        $offretravail-> setCategorieoffre( $nomcategorie);
           $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);}
        

        return $this->renderForm('offretravail/new.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_show', methods: ['GET'])]
    public function show(Offretravail $offretravail): Response
    {
        return $this->render('offretravail/show.html.twig', [
            'offretravail' => $offretravail,
        ]);
    }

    #[Route('/{idoffre}/edit', name: 'app_offretravail_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offretravail $offretravail,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository,GrosmotsRepository $mot): Response
    {
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);
        $verif=true;
        if ($form->isSubmitted()) { $titre = $form->get('titreoffre')->getData();
            $desc= $form->get('descriptionoffre')->getData();
            if( $titre!="" )
           { if($mot->checkGrosMots($titre))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('titreoffre')->addError($error);
               
                $verif=false;
            }}
            if( $desc!=""){
            if($mot->checkGrosMots( $desc))
            {  $error = new FormError('attention vous avez ecrit un gros mot');
                $form->get('descriptionoffre')->addError($error);
                $verif=false;
            }}
       
        if( $titre==null )
        {  $error = new FormError('veuiller saisir le titre de loffre');
            $form->get('titreoffre')->addError($error);
           
            $verif=false;
        }
        if(  $desc=="" )
        {  $error = new FormError('veuiller saisir la description de loffre');
            $form->get('descriptionoffre')->addError($error);
           
            $verif=false;
        } }
        if ($form->isSubmitted() && $form->isValid()&&  $verif==true) {
            $nomcategorie=$categoryRepository->find( $form->get('idcategorie')->getData())->getNameCategory();
           
          $offretravail-> setCategorieoffre( $nomcategorie);
            $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravail/edit.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_delete', methods: ['POST'])]
    public function delete($idoffre,Request $request, Offretravail $offretravail, OffretravailRepository $offretravailRepository,OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravail->getIdoffre(), $request->request->get('_token'))) {        
            $offre=$offretravailRepository->find($idoffre);
            $offretravailarchive = new Offretravailarchive();
            $offretravailarchive->setDescriptionoffre(  $offre->getDescriptionoffre());
            $offretravailarchive->setTitreoffre($offre->getTitreoffre());
            $offretravailarchive->setIdcategorie($offre->getIdcategorie());
            $offretravailarchive->setCategorieoffre($offre->getCategorieoffre());
            $offretravailarchive->setIdUser($offre->getIdUser());
            $offretravailarchive->setTypeoffre($offre->getTypeoffre());
            $offretravailarchive->setLocalisationoffre($offre->getLocalisationoffre());
            $now = new DateTime();
            $offretravailarchive->setDateajoutoffre($now);
            $offretravailarchive->setNickname($offre->getNickname());
           
          
            $offretravailarchiveRepository->save(  $offretravailarchive);
            $offretravailRepository->remove($offretravail, true);
        }

        return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);
    }

 
  /*  #[Route('/chercher', name: 'app_offretravail_chercheroffre', methods: ['GET', 'POST'])]
    public function chercheroffre(OffretravailRepository $offretravailRepository, Request $request,Offretravail $offretravail): Response
    {
        $form = $this->createForm(ChercherOffreType::class, $offretravail);
        $form->handleRequest($request);
        $resultOfSearch =[];
        if ($form->isSubmitted()) {
            $mots=$form['q']->getData();
            $resultOfSearch =  $offretravailRepository->chercherOffres($mots);
          
        }
      
           
       
        
        return $this->render('offretravail/chercheroffre.html.twig', [
            'offretravails' => $form,
            'offretravailbyid' =>  $resultOfSearch,
        ]);
    }*/
   
}
