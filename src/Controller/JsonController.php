<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Form\Allusers1Type;
use App\Repository\AllusersRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\BanRepository;
use App\Entity\Ban;
use Twilio\Rest\Client;


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
    #[Route('/vf', name: 'app_json_vf', methods: ['GET', 'POST'])]
    public function vf(MailerInterface $mailer, Request $request, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {
        $user = new Allusers();
        $user->setEmail($request->get('Email'));
        $verification = $allusersRepository->generateVerificationCode();
        $recipient = $user->getEmail();
        $allusersRepository->sendVerificationEmail($recipient, $mailer, $verification);
        $user->setCode($verification);
        $AN = $serializer->serialize($user, 'json', ['groups' => 'allusers']);
        return new Response($AN);

    }

    #[Route('/new', name: 'app_json_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {
        $user = new Allusers();
        $user->setPassword($request->get('password'));
        $user->setBio($request->get('type'));
        $user->setEmail($request->get('Email'));
        $b = $request->get('Birthday');
        $birthdayDate = DateTimeImmutable::createFromFormat('Y-m-d', $b);
        $user->setBirthday($birthdayDate);
        $user->setLastName($request->get('LastName'));
        $user->setName($request->get('Name'));
        $user->setNationality($request->get('Nationality'));
        $user->setNickname($request->get('Nickname'));
        $user->setType($request->get('type'));
        $user->setAvatar($request->get('type'));
        $user->setBackground($request->get('type'));
        $user->setDescription($request->get('type'));
        $allusersRepository->save($user, true);
        $AN = $serializer->serialize($user, 'json', ['groups' => 'allusers']);
        return new Response($AN);

    }

    #[Route('/Login', name: 'app_json_login', methods: ['GET', 'POST'])]
    public function Login(NormalizerInterface $normalizer, MailerInterface $mailer, Request $request, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {


        $em = $this->getDoctrine()->getManager();
        $user = new Allusers();
        $password = $request->get('password');
        $email = $request->get('Email');
        $user = $this->getDoctrine()->getRepository(Allusers::class)->findOneBy(['Email' => $email]);
        if (!$user) {
            $jsonContent = $normalizer->normalize(-1);
            return new Response(json_encode($jsonContent));
        }
        $encryptedPassword = $user->getPassword();
        $salt = $user->getSalt();
        if (!$allusersRepository->decryptPassword($encryptedPassword, $salt, $password)) {
            $jsonContent = $normalizer->normalize(-1);
            return new Response(json_encode($jsonContent));
        }
        if ($user->is2fa() == 1) {

            $twilioClient = new client('AC4730297eb72be182dde74c2a2143deb8', 'fba49a82e157a83953c49896694c44ec');
            $verification = $allusersRepository->generateVerificationCode();
            $this->sendSmsMessage($twilioClient, $user->getNumber(), $verification);
            $user->setCode($verification);
        }
        $AN = $serializer->serialize($user, 'json', ['groups' => 'allusers']);
        return new Response($AN);

    }

    #[
        Route('/newb', name: 'app_json_newb', methods: ['GET', 'POST'])]
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
    public function editb($id, Request $request, Ban $ban, AllusersRepository $allusersRepository, BanRepository $banRepository, SerializerInterface $serializer): Response
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
    public function edit($id_user, Request $request, Allusers $alluser, AllusersRepository $allusersRepository, SerializerInterface $serializer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $allusersRepository->find($id_user);
        $user->setPassword($request->get('password') ?? $user->getPassword());
        $user->setBio($request->get('Bio') ?? $user->getBio());
        $user->setEmail($request->get('Email') ?? $user->getEmail());
        $user->setLastName($request->get('Last_Name') ?? $user->getLastName());
        $user->setName($request->get('name') ?? $user->getName());
        $user->setNationality($request->get('Nationality') ?? $user->getNationality());
        $user->setNickname($request->get('Nickname') ?? $user->getNickname());
        $user->setSalt($request->get('salt') ?? $user->getSalt());
        $user->setType($request->get('Type') ?? $user->getType());
        $user->setAvatar($request->get('Type') ?? $user->getAvatar());
        $user->setBackground($request->get('Type') ?? $user->getBackground());
        $user->setDescription($request->get('Type') ?? $user->getDescription());
        $user->setNumber($request->get('number') ?? $user->getNumber());
        if ($user->getNumber() != 0 && $user->getNumber() != null)
            $user->set2fa(true);
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

    public function sendSmsMessage(Client $twilioClient, string $number, string $code): Response
    {
        $twilioClient->messages->create("+216" . $number, [
            "body" => $code,
            "from" => $this->getParameter('twilio_number')
        ]);
        return new Response();
    }
}
