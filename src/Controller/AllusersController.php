<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\Panier;
use App\Form\AllusersType;
use App\Form\AuthType;
use App\Form\LoginType;
use App\Form\VerificationCodeType;
use App\Repository\AllusersRepository;
use App\Repository\PanierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twilio\Rest\Client;
use symfony\Component\Serializer\Normalizer\NormalizerInterface;


#[Route('/allusers')]
class AllusersController extends AbstractController
{
    #[Route('/Logout', name: 'app_allusers_logout', methods: ['GET'])]
    public function logout(SessionInterface $session): RedirectResponse
    {
        $session->clear();
        return $this->redirectToRoute('app_allusers_login');
    }

    #[Route('/Login', name: 'app_allusers_login', methods: ['GET', 'POST'])]
    public function login(Request $request, AllusersRepository $allusersRepository): Response
    {
        if ($allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_home');
        }
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('Email')->getData();
            $password = $form->get('Password')->getData();

            // Find user by email
            $user = $this->getDoctrine()->getRepository(Allusers::class)->findOneBy(['Email' => $email]);

            // Check if user exists
            if (!$user) {
                $this->addFlash('error', 'Invalid credentials.');
                return $this->redirectToRoute('app_allusers_login');
            }

            // Verify password
            $encryptedPassword = $user->getPassword();
            $salt = $user->getSalt();

            if (!$allusersRepository->decryptPassword($encryptedPassword, $salt, $password)) {
                $this->addFlash('error', 'Invalid credentials.');

                return $this->redirectToRoute('app_allusers_new');
            }

            // Create session and redirect to home page
            $session = $request->getSession();
            $session->set('user_id', $user->getid_user());
            if ($user->is2fa() == 1) {

                $twilioClient = new client('AC4730297eb72be182dde74c2a2143deb8', 'fba49a82e157a83953c49896694c44ec');
                $verification = $allusersRepository->generateVerificationCode();
                $session->set('verification_code', $verification);
                $this->sendSmsMessage($twilioClient, $user->getNumber(), $verification);
                return $this->redirectToRoute('app_allusers_verif');
            } else if($user->getType()=='Admin')
                return $this->redirectToRoute('app_allusers_index');
            else
                return $this->redirectToRoute('app_home');

        }

        return $this->render('allusers/Login.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/', name: 'app_allusers_index', methods: ['GET'])]
    public function index(Request $request, AllusersRepository $allusersRepository): Response
    {
        if (!$allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_login');
        }
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);
        return $this->render('allusers/users.html.twig', [
            'user' => $user,
            'allusers' => $allusersRepository->findAll(),

        ]);
    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/register', name: 'app_allusers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AllusersRepository $allusersRepository, MailerInterface $mailer, SessionInterface $session): Response
    {
        if ($allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_home');
        }
        $alluser = new Allusers();
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->get('avatar')->getData();
            if ($avatarFile) {
                $avatarFileName = uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $avatarFileName
                    );
                } catch (FileException $e) {
                }

                $alluser->setAvatar($avatarFileName);
            }

            // handle background file upload
            $backgroundFile = $form->get('background')->getData();
            if ($backgroundFile) {
                $backgroundFileName = uniqid() . '.' . $backgroundFile->guessExtension();

                try {
                    $backgroundFile->move(
                        $this->getParameter('backgrounds_directory'),
                        $backgroundFileName
                    );
                } catch (FileException $e) {
                }

                $alluser->setBackground($backgroundFileName);
            }
            $verification = $allusersRepository->generateVerificationCode();
            $recipient = $form->get('Email')->getData();
            $allusersRepository->sendVerificationEmail($recipient, $mailer, $verification);
            $session->set('alluser', $alluser);
            $session->set('verification_code', $verification);

            // Redirect to the verification page
            return $this->redirectToRoute('app_allusers_verify');
        }

        return $this->renderForm('allusers/new.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
        ]);
    }


    #[Route('/verify', name: 'app_allusers_verify', methods: ['GET', 'POST'])]
    public function verify(PanierRepository $panierRepository,Request $request, SessionInterface $session, AllusersRepository $allusersRepository): Response
    {
        $alluser = $session->get('alluser');

        $form = $this->createForm(VerificationCodeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $verificationCode = $form->get('verificationCode')->getData();

            if ($verificationCode == $session->get('verification_code')) {
                $allusersRepository->save($alluser, true);

                $panier = new Panier();
                $panier->setNbrProduits(0);
                $panier->setMontantTotal(0);
                $panier->setIdUser($allusersRepository->findOneBy(['name' => $alluser->getName()]));
                $panierRepository->save($panier, true);
                $session->clear();
                $this->addFlash('success', 'Your email address has been verified. You can now log in.');
                return $this->redirectToRoute('app_allusers_login');
            } else {
                $session->clear();
                $this->addFlash('error', 'Invalid verification code. Please try again.');
                return $this->redirectToRoute('app_allusers_new');
            }
        }

        return $this->renderForm('allusers/verify.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/verif', name: 'app_allusers_verif', methods: ['GET', 'POST'])]
    public function verif(Request $request, SessionInterface $session): Response
    {
        $form = $this->createForm(VerificationCodeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $verificationCode = $form->get('verificationCode')->getData();

            if ($verificationCode == $session->get('verification_code')) {
                $session->remove('verification_code');
                $this->addFlash('success', 'Your email address has been verified. You can now log in.');
                return $this->redirectToRoute('app_allusers_login');
            } else {
                $session->clear();
                $this->addFlash('error', 'Invalid verification code. Please try again.');
                return $this->redirectToRoute('app_allusers_login');
            }
        }

        return $this->renderForm('allusers/verify.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/ve', name: 'app_allusers_ve', methods: ['GET', 'POST'])]
    public function VE(Request $request, SessionInterface $session): Response
    {
        $form = $this->createForm(VerificationCodeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('verificationCode')->getData();
            $user = $this->getDoctrine()->getRepository(Allusers::class)->findOneBy(['Email' => $email]);
            if ($user) {
                $session->set('user_id', $user->getid_user());
                return $this->redirectToRoute('app_allusers_vs');
            }
        }
        return $this->renderForm('allusers/verify.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/vs', name: 'app_allusers_vs', methods: ['GET', 'POST'])]
    public function VS(Request $request, SessionInterface $session, AllusersRepository $allusersRepository): Response
    {
        $form = $this->createForm(VerificationCodeType::class);
        $form->handleRequest($request);
        $userId = $session->get('user_id');
        $user = $allusersRepository->find($userId);
        if (!$user instanceof Allusers) {
            throw $this->createNotFoundException('User not found');
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('verificationCode')->getData();
            $user->setPassword($password);
            $allusersRepository->save($user, true);
            return $this->redirectToRoute('app_allusers_index');
        }
        return $this->renderForm('allusers/verify.html.twig', [
            'form' => $form
        ]);
    }


    #[Route('/{id_user}', name: 'app_allusers_show', methods: ['GET'])]
    public function show(Allusers $alluser, Request $request, AllusersRepository $allusersRepository, $id_user): Response
    {

        if (!$allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_login');
        }
        $userId = $request->getSession()->get('user_id');
        if ($id_user != $userId) {
            return $this->redirectToRoute('app_allusers_login');
        }
        $user = $allusersRepository->find($userId);

        return $this->render('allusers/usershow.html.twig', [
            'alluser' => $alluser,
            'user' => $user,
        ]);
    }

    #[Route('/{id_user}/edit', name: 'app_allusers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        if (!$allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_login');
        }
        else{
        $userId = $request->getSession()->get('user_id');
        $user = $allusersRepository->find($userId);}
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);
        $forme = $this->createForm(AuthType::class);
        $forme->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $allusersRepository->save($alluser, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }
        if ($forme->isSubmitted() && $forme->isValid()) {
            $user->setNumber($forme->get('number')->getData());
            $user->set2fa(true);
            $allusersRepository->saven($user, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('allusers/usershow.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
            'user' => $user,
            'forme' => $forme
        ]);
    }

    #[Route('/{id_user}', name: 'app_allusers_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        if (!$allusersRepository->isLoggedIn($request)) {
            return $this->redirectToRoute('app_allusers_login');
        }
        if ($this->isCsrfTokenValid('delete' . $alluser->getId_user(), $request->request->get('_token'))) {
            $allusersRepository->remove($alluser, true);
        }

        return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
    }

    public function sendSmsMessage(Client $twilioClient, string $number, string $code): Response
    {
        $twilioClient->messages->create("+216" . $number, [
            "body" => $code,
            "from" => $this->getParameter('twilio_number')
        ]);
        return new Response();
    }



}
