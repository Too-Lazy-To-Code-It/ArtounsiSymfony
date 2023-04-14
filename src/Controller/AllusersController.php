<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Form\AllusersType;
use App\Form\LoginType;
use App\Repository\AllusersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/allusers')]
class AllusersController extends AbstractController
{
    #[Route('/Login', name: 'app_allusers_login', methods: ['GET','POST'])]
    public function login(Request $request, AuthenticationUtils $authenticationUtils, AllusersRepository $allusersRepository): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $allusers = new Allusers();
        $form = $this->createForm(LoginType::class, $allusers);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $allusers->getEmail();
            $password = $allusers->getPassword();

            // Find user by email
            $user = $this->getDoctrine()->getRepository(Allusers::class)->findOneBy(['Email' => $email]);

            // Check if user exists
            if (!$user) {
                $this->addFlash('error', 'Invalid credentials.');
                return $this->redirectToRoute('app_allusers_new');
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
            return $this->redirectToRoute('app_allusers_index');
        }

        return $this->render('allusers/Login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'form' => $form->createView(),
        ]);
    }




    #[Route('/', name: 'app_allusers_index', methods: ['GET'])]
    public function index(AllusersRepository $allusersRepository): Response
    {
        return $this->render('allusers/users.html.twig', [
            'allusers' => $allusersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_allusers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AllusersRepository $allusersRepository): Response
    {
        $alluser = new Allusers();
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // handle avatar file upload
            $avatarFile = $form->get('avatar')->getData();
            if ($avatarFile) {
                $avatarFileName = uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $avatarFileName
                    );
                } catch (FileException $e) {
                    // handle exception if something goes wrong during file upload
                    // e.g. display a message to the user
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
                    // handle exception if something goes wrong during file upload
                    // e.g. display a message to the user
                }

                $alluser->setBackground($backgroundFileName);
            }

            $allusersRepository->save($alluser, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allusers/new.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
        ]);
    }


    #[Route('/{id_user}', name: 'app_allusers_show', methods: ['GET'])]
    public function show(Allusers $alluser): Response
    {
        return $this->render('allusers/usershow.html.twig', [
            'alluser' => $alluser,
        ]);
    }

    #[Route('/{id_user}/edit', name: 'app_allusers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        $form = $this->createForm(AllusersType::class, $alluser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $allusersRepository->save($alluser, true);

            return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allusers/edit.html.twig', [
            'alluser' => $alluser,
            'form' => $form,
        ]);
    }

    #[Route('/{id_user}', name: 'app_allusers_delete', methods: ['POST'])]
    public function delete(Request $request, Allusers $alluser, AllusersRepository $allusersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $alluser->getId_user(), $request->request->get('_token'))) {
            $allusersRepository->remove($alluser, true);
        }

        return $this->redirectToRoute('app_allusers_index', [], Response::HTTP_SEE_OTHER);
    }
}
