<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe ;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Stripe\Checkout\Session;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }




    #[Route('/checkout', name: 'checkout')]
    public function checkout(UrlGeneratorInterface $urlGenerator,SessionInterface $session,LignepanierRepository $lignepanierRepository): Response
    {
     
        Stripe::setApiKey('sk_test_51MiOyPHjp8SAtqB82djmo7hRd9lvbM7i9MEBNsA9gJVxFhhEDLoL5pyTANP176euOnp6Zrk1ooSGVo3rJY8Qwo2a00gYTeyxb1');
        $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $session->get('panier_id')]);
        $total = $session->get('total');
        $lineItems = [];
      foreach ($lignesPanier as $ligne) {
        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name'=> $ligne->getIdproduit()->getNom(),
                ],
                'unit_amount' => $total * 100, //convertir le total en centimes
            ],
            'quantity' => 1, // mettre la quantité à 1 pour chaque article
       ];
     }

    $sessionStripe = Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $lineItems,
        'mode' => 'payment',
        'success_url' => $urlGenerator->generate('success-url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        'cancel_url' => $urlGenerator->generate('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
    ]);

        
          return $this->redirect($session->url, 303);

    }

    #[Route('/success-url', name: 'success-url')]
    public function successUrl(): Response
    {
        return $this->render('payment/success.html.twig', []);
    }

    #[Route('/cancel_url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig', []);
    }

}



