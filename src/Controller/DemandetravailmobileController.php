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
use App\Form\OffretravailType;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Offretravail;

use App\Entity\Category;
use App\Entity\Offretravailarchive;
use App\Repository\OffretravailarchiveRepository;

class DemandetravailmobileController extends AbstractController
{
    #[Route('/json/alldemandes', name: 'alldemandesjson', methods: ['GET'])]
    public function index(DemandetravailRepository $demandetravailRepository,SerializerInterface $serializer,NormalizerInterface $normalizer,OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {
      
        $demandetravails = $demandetravailRepository->findAll();
        ///  $offretravailsNormalises=$normalizer->normalize( $offretravails,'json',['groups'=>"offres"]);
          
           
          
            $json = $serializer->serialize( $demandetravails,'json',['groups'=>"demandes"]);
        
            return new Response($json);
    }
    
    #[Route('/json/mesdemandes/{id}', name: 'mesdemandesjson', methods: ['GET'])]
    public function mesoffres($id,DemandetravailRepository $demandetravailRepository,NormalizerInterface $normalizer,OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {
      
         
        $demandetravailbyid = $demandetravailRepository->findBy(['id_user' => $id]);  
                  $offretravailbyidNormalises=$normalizer->normalize($demandetravailbyid,'json',['groups'=>"demandes"]);
           
           
            $json = json_encode( $offretravailbyidNormalises);
        
            return new Response($json);
    }
    #[Route('/newdemande/{id}', name: 'newdemandejson', methods: ['GET', 'POST'])]
    public function newdemande($id,Request $req,   NormalizerInterface $Normalizer,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot,AllusersRepository $allusersRepository)
    { 
        

        $em = $this->getDoctrine()->getManager();
        $demandetravail = new Demandetravail();
        $user =$allusersRepository->find($id);
          
        $now = new DateTime();
    
        $category = $categoryRepository->find($req->get('idcategorie'));

// Get the name of the category
if ($category) {
    $nomcategorie = $category->getNameCategory();
} else {
    // Handle the case where no category was found
    $nomcategorie = 'Unknown category';
}
$demandetravail -> setCategoriedemande($nomcategorie);
$nickname=$allusersRepository->find($id)->getNickname();
$demandetravail-> setNickname( $nickname);
$demandetravail->setIdUser($user);
    
       
$demandetravail->setTitreDemande($req->get('titreDemande'));
$demandetravail->setDescriptionDemande($req->get('descriptionDemande'));
$demandetravail->setDateajoutdemande( $now);
$demandetravail->setIdcategorie($categoryRepository->find($req->get("idcategorie")));
/*   
$pdfFile = $req->get('pdf')->getData();
if(  $pdfFile!=null){
 $fileName = md5(uniqid()) . '.' .   $pdfFile->guessExtension();
$pdfFile->move(
 $this->getParameter('upload_directory'),
 $fileName
);*/
//on stocke l'image dans la bd

$demandetravail ->setPdf( $req->get('pdf'));
       
        $em->persist( $demandetravail);
        $em->flush();

        $jsonContent = $Normalizer->normalize( $demandetravail, 'json', ['groups' => 'offres']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/updatedemande/{id}/{iduser}', name: 'updatedemandejson', methods: ['GET', 'POST'])]
    public function updateStudentJSON($iduser,Request $req, $id, NormalizerInterface $Normalizer,CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot,AllusersRepository $allusersRepository)
    {

        $em = $this->getDoctrine()->getManager();
        $demandetravail = $em->getRepository(Demandetravail::class)->find($id);
        $user =$allusersRepository->find($iduser);
          
        $now = new DateTime();
        $demandetravail->setIdUser($user);
        $category = $categoryRepository->find($req->get('idcategorie'));

// Get the name of the category
if ($category) {
    $nomcategorie = $category->getNameCategory();
} else {
    // Handle the case where no category was found
    $nomcategorie = 'Unknown category';
}
      
$nickname=$allusersRepository->find($id)->getNickname();
$demandetravail-> setNickname( $nickname);
$demandetravail->setIdUser($user);
            
$demandetravail->setTitreDemande($req->get('titreDemande'));
$demandetravail->setDescriptionDemande($req->get('descriptionDemande'));
$demandetravail->setDateajoutdemande( $now);
$demandetravail->setIdcategorie($categoryRepository->find($req->get("idcategorie")));
      
$pdfFile = $req->get('pdf')->getData();
if(  $pdfFile!=null){
 $fileName = md5(uniqid()) . '.' .   $pdfFile->guessExtension();
$pdfFile->move(
 $this->getParameter('upload_directory'),
 $fileName
);
//on stocke l'image dans la bd

$demandetravail ->setPdf( $fileName);}
        $em->flush();

        $jsonContent = $Normalizer->normalize( $demandetravail, 'json', ['groups' => 'offres']);
        return new Response("offre updated successfully " . json_encode($jsonContent));
    }

    #[Route("/deletedemande/{id}", name: "deletedemande")]
    public function deletedemande(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $demandetravail = $em->getRepository(Demandetravail ::class)->find($id);
        $em->remove( $demandetravail);
        $em->flush();
        $jsonContent = $Normalizer->normalize( $demandetravail, 'json', ['groups' => 'demandes']);
        return new Response("demande deleted successfully " . json_encode($jsonContent));
    }
   





    #[Route('/{idOffre}/mail/{iduserconnected}/', name: 'app_demandetravail_mail', methods: ['GET'])]
    public function sendEmail(NormalizerInterface $Normalizer,$iduserconnected,ArtistepostulerRepository $artistrepo,OffretravailRepository $offretravailRepository,$idOffre,MailerInterface $mailer,AllusersRepository $allusersRepository): Response
    { 
    $verif='true';
    $demande = $offretravailRepository->find($idOffre);
    $offretitre=$demande->getTitreoffre();
    $nickname=$demande->getNickname();
    $user=$allusersRepository->find($iduserconnected);
    $nameofconnnectedstudio=$allusersRepository->find($iduserconnected)->getNickname();
    $iduserconnected=$allusersRepository->find($iduserconnected)->getid_user();
    $descriptionstudioconnecter=$allusersRepository->find($iduserconnected)->getDescription();
    $mailstudioconnected=$allusersRepository->find($iduserconnected)->getEmail();
    $emailofuser = $user->getEmail();
    $verifexsitance=$artistrepo->findBy(['idoffre' => $idOffre,'id_user'=>$iduserconnected]);
   if(  $verifexsitance)
     {$verif='false';}
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
   
  
       
}   return new Response($verif);
}

}
