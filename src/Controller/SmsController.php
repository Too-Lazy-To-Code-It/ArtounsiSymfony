<?php

namespace App\Controller;

use App\Entity\Allusers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;

class SmsController extends AbstractController
{
    #[Route('/sms', name: 'app_sms')]
    public function index(): Response
    {
        return $this->render('sms/index.html.twig', [
            'controller_name' => 'SmsController',
        ]);
    }
    #[Route('/sms1', name: 'app_sms1')]
    public function sendSmsMessage(Client $twilioClient):Response
    {
        $twilioClient->messages->create("+21624800307", [
            "body" => "TEST 1",
            "from" => $this->getParameter('twilio_number')
        ]);
        return new Response();
    }
}
