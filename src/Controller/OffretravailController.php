<?php

namespace App\Controller;


use App\Entity\Allusers;
use App\Entity\Offretravail;
use MongoDB\Driver\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Form\OffretravailType;
use App\Repository\OffretravailRepository;
use App\Repository\DemandetravailRepository;
use App\Repository\CategoryRepository;
use App\Repository\GrosmotsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AllusersRepository;
use Symfony\Component\Form\FormError;
use DateTime;
use App\Repository\ArtistepostulerRepository;


use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

use App\Repository\OffretravailarchiveRepository;
use App\Entity\Offretravailarchive;


#[Route('/offretravail')]
class OffretravailController extends AbstractController
{
    #[Route('/', name: 'app_offretravail_index', methods: ['GET'])]
    public function index(SessionInterface $session,AllusersRepository $allusersRepository, Request $request, PaginatorInterface $paginator, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste,): Response
    {

        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }

        $offretravails = $offretravailRepository->findAll();
        $offretravails = $paginator->paginate(
            $offretravails, //on passe les données 
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2//nbre d'articles par page  
        );
        $count = 0;
        $offretravailbyid = $offretravailRepository->findBy(['id_user' => $userId]);
        $offres = $offretravailRepository->findBy(['id_user' => $userId]);
        $listartistespostuler = [];

        foreach ($offres as $f) {
            $idOffre = $f->getIdoffre();
            $offreuser = $artiste->notif($idOffre);
            $listartistespostuler = array_merge($listartistespostuler, $offreuser);
            $count += $artiste->countFalseNotif($idOffre);
        }

        return $this->render('offretravail/index.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
            'offre' => $listartistespostuler,
            'count' => $count,
            'user'=>$user,
        ]);
    }

    #[Route('/true', name: 'app_offretravail_notiftrue', methods: ['POST'])]
    public function notiftrue(SessionInterface $session,AllusersRepository $allusersRepository, Request $request, PaginatorInterface $paginator, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $count = 0;
        $offres = $offretravailRepository->findBy(['id_user' => $userId]);
        $listartistespostuler = [];
        foreach ($offres as $f) {
            $idOffre = $f->getIdoffre();
            $artiste->notiftrue($idOffre);
        }
        return $this->redirectToRoute('app_offretravail_index', [
            'user'=>$user,
        ], Response::HTTP_SEE_OTHER);

    }

    #[Route('/{idDemande}/mail', name: 'app_offretravail_mail', methods: ['GET'])]
    public function sendEmail(SessionInterface $session,AllusersRepository $allusersRepository, DemandetravailRepository $demandetravailRepository, Request $request, $idDemande, MailerInterface $mailer): Response
    {

        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $demande = $demandetravailRepository->find($idDemande);
        $demandetitre = $demande->getTitreDemande();
        $nickname = $demande->getNickname();
        $user = $allusersRepository->find($demande->getIdUser());
        $nameofconnnectedstudio = $allusersRepository->find($userId)->getNickname();
        $descriptionstudioconnecter = $allusersRepository->find($userId)->getDescription();
        $mailstudioconnected = $allusersRepository->find($userId)->getEmail();
        $emailofuser = $user->getEmail();
        $email = (new Email())
            ->from('adam.rafraf@esprit.tn')
            ->to($emailofuser)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Nouvelle Studio est  interessé par votre demande : ' . $demandetitre)
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
                        Bonjour  " . $nickname . "!
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
                Le studio $nameofconnnectedstudio decrivé  par : $descriptionstudioconnecter avec le mail $mailstudioconnected est interessé par votre demande  $demandetitre </h2>
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
                 ");
        $mailer->send($email);

        return $this->redirectToRoute('app_offretravail_chercherdemande', [
            'user'=>$user,
        ], Response::HTTP_SEE_OTHER);
    }


    #[Route('/demandessimilaires', name: 'app_offretravail_demandessimilaires', methods: ['GET'])]
    public function demandessimilaires(SessionInterface $session,OffretravailRepository $offretravailRepository, Request $request, AllusersRepository $allusersRepository): Response
    {

        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $demandessimilaires = $offretravailRepository->findBydemandessimilaires($userId);
        return $this->render('offretravail/chercherdemande.html.twig', array(
            'offretravails' => $offretravailRepository->findAll(),
            'offretravailbyid' => $demandessimilaires,
            'user'=>$user,
        ));

    }

    #[Route('/chercherdemande', name: 'app_offretravail_chercherdemande', methods: ['GET', 'POST'])]
    public function chercherdemande(SessionInterface $session,AllusersRepository $allusersRepository,DemandetravailRepository $offretravailRepository, Request $request): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $resultOfSearch = $offretravailRepository->findAll();
        if ($request->isMethod("POST")) {
            $keyword = $request->get('niveau');
            $resultOfSearch = $offretravailRepository->chercherdemandes($keyword);
        }
        return $this->render('offretravail/chercherdemande.html.twig', array(
            'offretravails' => $offretravailRepository->findAll(),
            'offretravailbyid' => $resultOfSearch,
            'user'=>$user,

        ));
    }


    #[Route('/new', name: 'app_offretravail_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,Request $request, CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot, AllusersRepository $allusersRepository): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $offretravail = new Offretravail();
        $user = $allusersRepository->find($userId);

        $now = new DateTime();
        $offretravail->setDateajoutoofre($now);
        $verif = true;
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $titre = $form->get('titreoffre')->getData();
            $desc = $form->get('descriptionoffre')->getData();

            $mawjoud = $offretravailRepository->findBy(['id_user' => $userId, 'titreoffre' => $titre]);
            if ($mawjoud) {
                $this->addFlash('error', 'Vous avez déjà publier cette offre');
                $verif = false;
            }
            if ($titre != "") {
                if ($mot->checkGrosMots($titre)) {
                    $error = new FormError('attention vous avez ecrit un gros mot');
                    $form->get('titreoffre')->addError($error);

                    $verif = false;
                }
            }
            if ($desc != "") {
                if ($mot->checkGrosMots($desc)) {
                    $error = new FormError('attention vous avez ecrit un gros mot');
                    $form->get('descriptionoffre')->addError($error);
                    $verif = false;
                }
            }
        }
        if ($form->isSubmitted() && $form->isValid() && $verif == true) {
            $offretravail->setIdUser($user);
            $nomcategorie = $categoryRepository->find($form->get('idcategorie')->getData())->getNameCategory();
            $nickname = $allusersRepository->find(1)->getNickname();
            $offretravail->setNickname($nickname);
            $offretravail->setIdUser($user);
            $offretravail->setCategorieoffre($nomcategorie);
            $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('offretravail/new.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_show', methods: ['GET'])]
    public function show(SessionInterface $session,AllusersRepository $allusersRepository,Offretravail $offretravail): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        return $this->render('offretravail/show.html.twig', [
            'offretravail' => $offretravail,
            'user'=>$user,
        ]);
    }

    #[Route('/{idoffre}/edit', name: 'app_offretravail_edit', methods: ['GET', 'POST'])]
    public function edit(SessionInterface $session,AllusersRepository $allusersRepository, Request $request, Offretravail $offretravail, CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $form = $this->createForm(OffretravailType::class, $offretravail);
        $form->handleRequest($request);
        $verif = true;
        if ($form->isSubmitted()) {
            $titre = $form->get('titreoffre')->getData();
            $desc = $form->get('descriptionoffre')->getData();
            $mawjoud = $offretravailRepository->findBy(['id_user' => $userId, 'titreoffre' => $titre]);

            if ($mawjoud) {
                $this->addFlash('error', 'Vous avez déjà publier cette offre');
                $verif = false;
            }
            if ($titre != "") {
                if ($mot->checkGrosMots($titre)) {
                    $error = new FormError('attention vous avez ecrit un gros mot');
                    $form->get('titreoffre')->addError($error);

                    $verif = false;
                }
            }
            if ($desc != "") {
                if ($mot->checkGrosMots($desc)) {
                    $error = new FormError('attention vous avez ecrit un gros mot');
                    $form->get('descriptionoffre')->addError($error);
                    $verif = false;
                }
            }

            if ($titre == null) {
                $error = new FormError('veuiller saisir le titre de loffre');
                $form->get('titreoffre')->addError($error);

                $verif = false;
            }
            if ($desc == "") {
                $error = new FormError('veuiller saisir la description de loffre');
                $form->get('descriptionoffre')->addError($error);

                $verif = false;
            }
        }
        if ($form->isSubmitted() && $form->isValid() && $verif == true) {
            $nomcategorie = $categoryRepository->find($form->get('idcategorie')->getData())->getNameCategory();

            $offretravail->setCategorieoffre($nomcategorie);
            $offretravailRepository->save($offretravail, true);

            return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravail/edit.html.twig', [
            'offretravail' => $offretravail,
            'form' => $form,
            'user'=>$user,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravail_delete', methods: ['POST'])]
    public function delete($idoffre, Request $request, Offretravail $offretravail, OffretravailRepository $offretravailRepository, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $offretravail->getIdoffre(), $request->request->get('_token'))) {
            $offre = $offretravailRepository->find($idoffre);
            $offretravailarchive = new Offretravailarchive();
            $offretravailarchive->setDescriptionoffre($offre->getDescriptionoffre());
            $offretravailarchive->setTitreoffre($offre->getTitreoffre());
            $offretravailarchive->setIdcategorie($offre->getIdcategorie());
            $offretravailarchive->setCategorieoffre($offre->getCategorieoffre());
            $offretravailarchive->setIdUser($offre->getIdUser());
            $offretravailarchive->setTypeoffre($offre->getTypeoffre());
            $offretravailarchive->setLocalisationoffre($offre->getLocalisationoffre());
            $now = new DateTime();
            $offretravailarchive->setDateajoutoffre($now);
            $offretravailarchive->setNickname($offre->getNickname());


            $offretravailarchiveRepository->save($offretravailarchive);
            $offretravailRepository->remove($offretravail, true);
        }

        return $this->redirectToRoute('app_dashboard_offres', [], Response::HTTP_SEE_OTHER);
    }


}
