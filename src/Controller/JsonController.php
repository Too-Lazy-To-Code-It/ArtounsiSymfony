<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Form\Allusers1Type;
use App\Repository\AllusersRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\BanRepository;
use App\Entity\Ban;


#[Route('/json')]
class JsonController extends AbstractController
{
    #[Route('/users', name: 'app_json_index', methods: ['GET'])]
    public function index(AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {

        $users = $allusersRepository->findAll();
        $AN = $serializer->serialize($users, 'json', ['groups' => 'allusers']);
        return new Response($AN);

    }

    #[Route('/bans', name: 'app_json_indexb', methods: ['GET'])]
    public function indexb(BanRepository $BanRepository, SerializerInterface $serializer): Response
    {

        $Bans = $BanRepository->findAll();
        $AN = $serializer->serialize($Bans, 'json', ['groups' => 'bans']);
        return new Response($AN);

    }

    /**
     * @throws \Exception
     */
    #[Route('/new', name: 'app_json_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Allusers();
        $user->setPassword($request->get('password'));
        $user->setBio($request->get('Bio'));
        $user->setEmail($request->get('Email'));
        $b = $request->get('Birthday');
        $birthdayDate = DateTimeImmutable::createFromFormat('Y-m-d', $b);
        $user->setBirthday($birthdayDate);
        $user->setLastName($request->get('LastName'));
        $user->setName($request->get('Name'));
        $user->setNationality($request->get('Nationality'));
        $user->setNickname($request->get('Nickname'));
        $user->setSalt($request->get('salt'));
        $user->setType($request->get('Type'));
        $user->setAvatar($request->get('Type'));
        $user->setBackground($request->get('Type'));
        $user->setDescription($request->get('Type'));
        $em->persist($user);
        $em->flush();
        $AN = $serializer->serialize($user, 'json', ['groups' => 'alluserss']);
        return new Response($AN);


    }

    #[Route('/newb', name: 'app_json_newb', methods: ['GET', 'POST'])]
    public function newb(Request $request, SerializerInterface $serializer, AllusersRepository $allusersRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ban = new Ban();
        $ban->setIdUser($allusersRepository->find($request->get('id')));
        $ban->setReason($request->get('Reason'));
        $d = $request->get('Date');
        $Date = DateTimeImmutable::createFromFormat('Y-m-d', $d);
        $ban->setDateB($Date);
        $em->persist($ban);
        $em->flush();
        $AN = $serializer->serialize($ban, 'json', ['groups' => 'bans']);
        return new Response($AN);


    }

    #[Route('/{id_user}', name: 'app_json_show', methods: ['GET'])]
    public function show(Allusers $alluser, $id_user, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {
        $user = $allusersRepository->find($id_user);
        $AN = $serializer->serialize($user, 'json', ['groups' => 'allusers']);
        return new Response($AN);

    }
    #[Route('/{id}/editb', name: 'app_json_editb', methods: ['GET', 'POST'])]
    public function editb($id,Request $request, Ban $ban,AllusersRepository $allusersRepository, BanRepository $banRepository,SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ban = $banRepository->find($id);
        $ban->setReason($request->get('Reason'));
        $d = $request->get('Date');
        $Date = DateTimeImmutable::createFromFormat('Y-m-d', $d);
        $ban->setDateB($Date);
        $em->persist($ban);
        $em->flush();
        $AN = $serializer->serialize($ban, 'json', ['groups' => 'bans']);
        return new Response($AN);

    }

    #[Route('/ban/{id}', name: 'app_ban_show', methods: ['GET'])]
    public function showb(Ban $ban, SerializerInterface $serializer, $id, BanRepository $banRepository): Response
    {
        $ban = $banRepository->find($id);
        $AN = $serializer->serialize($ban, 'json', ['groups' => 'bans']);
        return new Response($AN);
    }


    #[Route('/{id_user}/edit', name: 'app_json_edit', methods: ['GET', 'POST'])]
    public function edit($id_user,Request $request, Allusers $alluser, AllusersRepository $allusersRepository,SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $allusersRepository->find($id_user);
        $user->setPassword($request->get('password'));
        $user->setBio($request->get('Bio'));
        $user->setEmail($request->get('Email'));
        $b = $request->get('Birthday');
        $birthdayDate = DateTimeImmutable::createFromFormat('Y-m-d', $b);
        $user->setBirthday($birthdayDate);
        $user->setLastName($request->get('LastName'));
        $user->setName($request->get('Name'));
        $user->setNationality($request->get('Nationality'));
        $user->setNickname($request->get('Nickname'));
        $user->setSalt($request->get('salt'));
        $user->setType($request->get('Type'));
        $user->setAvatar($request->get('Type'));
        $user->setBackground($request->get('Type'));
        $user->setDescription($request->get('Type'));
        $em->persist($user);
        $em->flush();
        $AN = $serializer->serialize($user, 'json', ['groups' => 'alluserss']);
        return new Response($AN);

    }

    #[Route('/deleteuser/{id_user}', name: 'app_json_delete')]
    public function delete(Request $request, Allusers $alluser, AllusersRepository $allusersRepository, SerializerInterface $serializer, $id_user): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Allusers::class)->find($id_user);
        $em->remove($user);
        $em->flush();
        $AN = $serializer->serialize($user, 'json', ['groups' => 'allusers']);
        return new Response($AN);
    }
}
