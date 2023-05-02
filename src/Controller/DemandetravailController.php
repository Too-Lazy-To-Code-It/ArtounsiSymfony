<?php

namespace App\Controller;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\Demandetravail;
use App\Entity\Artistepostuler;
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
use App\Repository\ArtistepostulerRepository;
use DateTime;use Knp\Component\Pager\PaginatorInterface;
use App\Repository\OffretravailRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;
#[Route('/demandetravail')]
class DemandetravailController extends AbstractController
{
    #[Route('/', name: 'app_demandetravail_index', methods: ['GET'])]
    public function index(Request $request,PaginatorInterface $paginator,DemandetravailRepository $demandetravailRepository): Response
    {
        
        $demandetravails = $demandetravailRepository->findAll();
        $demandetravails=$paginator->paginate(
            $demandetravails, //on passe les données 
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2//nbre d'articles par page  
        );
        $demandetravailbyid = $demandetravailRepository->findBy(['id_user' => 1]);
        return $this->render('demandetravail/index.html.twig', [
            'demandetravails' => $demandetravails,
            'demandetravailbyid' =>  $demandetravailbyid,
        ]);
    }
    #[Route('/{idOffre}/mail', name: 'app_demandetravail_mail', methods: ['GET'])]
     public function sendEmail(ArtistepostulerRepository $artistrepo,OffretravailRepository $offretravailRepository,$idOffre,MailerInterface $mailer,AllusersRepository $allusersRepository): Response
     { 
     $verif=true;
     $demande = $offretravailRepository->find($idOffre);
     $offretitre=$demande->getTitreoffre();
     $nickname=$demande->getNickname();
     $user=$allusersRepository->find($demande->getIdUser());
     $nameofconnnectedstudio=$allusersRepository->find(1)->getNickname();
     $iduserconnected=$allusersRepository->find(1)->getid_user();
     $descriptionstudioconnecter=$allusersRepository->find(1)->getDescription();
     $mailstudioconnected=$allusersRepository->find(1)->getEmail();
     $emailofuser = $user->getEmail();
     $verifexsitance=$artistrepo->findBy(['idoffre' => $idOffre,'id_user'=>$iduserconnected]);
    if(  $verifexsitance)
      {$verif=false;}
    else{
     $email = (new Email())
        ->from('nourelhoudachawebi@gmail.com')
        ->to( $emailofuser)
        //->cc('cc@example.com')
        //->bcc('bcc@example.com')
        //->replyTo('fabien@example.com')
        //->priority(Email::PRIORITY_HIGH)
        ->subject('Nouveau Candidature pour le poste de " '.$offretitre)
        ->text('Sending emails is fun again!')
        ->html("<body style=\"background-color:url('https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\" bgcolor=\"white\" style=\"border:2px solid black\">
            <tbody>
                <tr>
                    <td align=\"center\">
                        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"col-550\" width=\"550\">
                            <tbody>
                                <tr>
                                    <td align=\"center\" style=\"background-color: #C10C99;
                                        height: 50px;\">
    
                                        <a href=\"#\" style=\"text-decoration: none;\">
                                            <p style=\"color:white;
                                                font-weight:bold;\">
                                                arTounsi
                                            </p>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr style=\"height: 300px;\">
                <td align=\"center\" style=\"border: none;
                        border-bottom: 2px solid #1C233D;
                        padding-right: 20px;padding-left:20px;background-color: #1C233D\">
                        <p style=\" font-weight: bolder;font-size: 42px; letter-spacing: 0.025em; color:white;\">
                        Bonjour  ". $nickname."!
                     </p>
                 </td>
             </tr>
             <tr style=\"display: inline-block;\">
             <td style=\"height: 150px;
                     padding: 20px;
                     border: none;
                     border-bottom: 2px solid #361B0E;
                     background-color: #1C233D; \">

                 <h2 style=\"text-align: left;
                         align-items: center; color:white\">

                         Le candidature $nameofconnnectedstudio decrivé par : $descriptionstudioconnecter avec le mail $mailstudioconnected est interessé par votre offre $offretitre</h2>
                         </td>
                         </tr>
                         <tr style=\"border: none;
                         background-color: #C10C99;
                         height: 40px;
                         color:white;
                         padding-bottom: 20px;
                         text-align: center;\">
             
                             <td height=\"40px\" align=\"center\">
                                 <p style=\"color:white;
                         line-height: 1.5em;\">
                                     arTounsi
                                 </p>
             
             
                         </tbody>
                        </table>
                        </tr>
                        </body> 
                          " );
          
     $mailer->send($email);
     $artistepostuler=new Artistepostuler();
     $artistepostuler->setIdoffre($demande);
     $artistepostuler->setIdUser( $user);
     $artistepostuler->setNomartiste( $nickname);
     $artistepostuler->setTitreoffre($offretitre);
     $artistepostuler->setNotif(false);
     $now = new DateTime();
     $artistepostuler->setDatepostuler($now);
     $artistrepo->save($artistepostuler, true);
    
     return $this->redirectToRoute('app_demande_travail_chercheroffre', [], Response::HTTP_SEE_OTHER);
}  
}

   
    #[Route('/chercher', name: 'app_demande_travail_chercheroffre', methods: ['GET', 'POST'])]
public function chercheroffre(OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artistepostulerRepository, Request $request): Response
{
    $resultOfSearch=$offretravailRepository->findAll();
    $postulerStatusArray = array_fill(0, count($resultOfSearch), true); // initialize all values to true
    
    foreach ($resultOfSearch as $key => $offer) {
        $idOffre = $offer->getIdOffre();
        $verifExsitance = $artistepostulerRepository->findBy(['idoffre' => $idOffre]);
        if ($verifExsitance) {
            $postulerStatusArray[$key] = false;
        }
    }

    if($request->isMethod("POST"))
    {
        $keyword = $request->get('niveau');
        $resultOfSearch =  $offretravailRepository->chercherOffres( $keyword);
    }
    return $this->render('demandetravail/chercheroffre.html.twig',array (
        'offretravailbyid' =>  $resultOfSearch,
        'postulerStatusArray' => $postulerStatusArray,
    ));
}

    #[Route('/offressimilaires', name: 'app_demandetravail_offressimilaires', methods: ['GET'])]

    public function offressimilaires(ArtistepostulerRepository $artistepostulerRepository,DemandetravailRepository $demandetravailRepository, Request $request,AllusersRepository $allusersRepository): Response
    {
     
     $id=1;
          $demandessimilaires=$demandetravailRepository->findByoffressimilaires($id);
          $postulerStatusArray = array_fill(0, count($demandessimilaires), true); 
          foreach ( $demandessimilaires as $key => $offer) {
            $idOffre = $offer->getIdOffre();
            $verifExsitance = $artistepostulerRepository->findBy(['idoffre' => $idOffre]);
            if ($verifExsitance) {
                $postulerStatusArray[$key] = false;
            }
        }// initialize all values to true
          return $this->render('demandetravail/chercheroffre.html.twig',array (
            
              'offretravailbyid' =>   $demandessimilaires,
              'postulerStatusArray' => $postulerStatusArray,
          ));
        
    }
   #[Route('/{idDemande}/edit', name: 'app_demandetravail_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,$idDemande, CategoryRepository $categoryRepository,Demandetravail $demandetravail, DemandetravailRepository $demandetravailRepository,GrosmotsRepository $mot): Response
    { 
      
        $form = $this->createForm(DemandetravailType::class, $demandetravail);
       
        $form->handleRequest($request); 
       // Set the PDF file in the form
       $pd=$demandetravail->getPdf();
       $newFilePath =$this->getParameter('upload_directory') . '/' .  $pd; 
       $pdffile= new File ($newFilePath);
       //$form->get('pdf')->setData( $pdffile);

        $verif=true;
        if ($form->isSubmitted()) { $titre = $form->get('titreDemande')->getData();
            $desc= $form->get('descriptionDemande')->getData();
            $mawjoud=$demandetravailRepository->findBy(['id_user' => 1, 'titreDemande' => $titre]);
            if( $mawjoud){$this->addFlash('error', 'Vous avez déjà publier cette demande'); $verif=false;}
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
            if( $titre==null){  $error = new FormError('attention champs vide');
                $form->get('titreDemande')->addError($error); $verif=false;
            }
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
            'pdf'=> $pdffile,
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
            $mawjoud=$demandetravailRepository->findBy(['id_user' => 1, 'titreDemande' => $titre]);

            if( $mawjoud){$this->addFlash('error', 'Vous avez déjà publier cette demande'); $verif=false;}
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
