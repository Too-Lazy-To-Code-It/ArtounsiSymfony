<?php

namespace App\Controller;
use App\Form\OffretravailType;
use App\Repository\OffretravailRepository;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ArtistepostulerRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offretravail;
use App\Repository\CategoryRepository;
use App\Repository\GrosmotsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AllusersRepository;
use Symfony\Component\Form\FormError;
use DateTime;
use App\Entity\Offretravailarchive;
use App\Repository\OffretravailarchiveRepository;

class OffretravailmobileController extends AbstractController
{  #[Route('/json/alloffres', name: 'alloffresjson', methods: ['GET'])]
    public function index(SerializerInterface $serializer,NormalizerInterface $normalizer,OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {
      
            $offretravails = $offretravailRepository->findAll();
        ///  $offretravailsNormalises=$normalizer->normalize( $offretravails,'json',['groups'=>"offres"]);
          
           
          
            $json = $serializer->serialize(  $offretravails,'json',['groups'=>"offres"]);
        
            return new Response($json);
    }
    
    #[Route('/json/mesoffres', name: 'mesoffresjson', methods: ['GET'])]
    public function mesoffres(NormalizerInterface $normalizer,OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {
      
         
            $offretravailbyid = $offretravailRepository->findBy(['id_user' => 1]);
            $offretravailbyidNormalises=$normalizer->normalize( $offretravailbyid,'json',['groups'=>"offres"]);
           
           
            $json = json_encode( $offretravailbyidNormalises);
        
            return new Response($json);
    }
    #[Route('/new', name: 'newjson', methods: ['GET', 'POST'])]
    public function new(NormalizerInterface $normalizer,Request $request,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot,AllusersRepository $allusersRepository)
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
           
            $mawjoud= $offretravailRepository->findBy(['id_user' => 1, 'titreoffre' => $titre]);
            if( $mawjoud){$this->addFlash('error', 'Vous avez déjà publier cette offre'); $verif=false;}
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
        $jsoncontent= $normalizer->normalize($offretravail,'json',['groups'=>"offres"]);
        return  new Response(json_encode($jsoncontent));
         }
        
    
       
    }
    
    
    
    #[Route('/{idoffre}/editjson', name: 'editjson', methods: ['GET', 'POST'])]
        public function edit(NormalizerInterface $normalizer,Request $request, Offretravail $offretravail,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository,GrosmotsRepository $mot)
        {
            $form = $this->createForm(OffretravailType::class, $offretravail);
            $form->handleRequest($request);
            $verif=true;
            if ($form->isSubmitted()) { $titre = $form->get('titreoffre')->getData();
                $desc= $form->get('descriptionoffre')->getData();
                $mawjoud= $offretravailRepository->findBy(['id_user' => 1, 'titreoffre' => $titre]);
    
                if( $mawjoud){$this->addFlash('error', 'Vous avez déjà publier cette offre'); $verif=false;}
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
    
                $jsoncontent= $normalizer->normalize($offretravail,'json',['groups'=>"offres"]);
                return  new Response(json_encode($jsoncontent));
            }
    
            
        }
    
    
    
    
        #[Route('/{idoffre}', name: 'deletejson', methods: ['POST'])]
        public function delete(NormalizerInterface $normalizer,$idoffre,Request $request, Offretravail $offretravail, OffretravailRepository $offretravailRepository,OffretravailarchiveRepository $offretravailarchiveRepository)
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
    
           
            $jsoncontent= $normalizer->normalize($offretravail,'json',['groups'=>"offres"]);
            return  new Response(json_encode($jsoncontent));
        }
    
    }
    