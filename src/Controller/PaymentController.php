<?php

namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Lignepanier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe ;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\LignepanierRepository;
use Stripe\Checkout\Session;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Controller\PdfController;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PanierRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;




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
    public function checkout(UrlGeneratorInterface $urlGenerator,SessionInterface $session): Response
    {
     
        Stripe::setApiKey('sk_test_51MiOyPHjp8SAtqB82djmo7hRd9lvbM7i9MEBNsA9gJVxFhhEDLoL5pyTANP176euOnp6Zrk1ooSGVo3rJY8Qwo2a00gYTeyxb1');
        $panier = $session->get('panier');
        $total = $session->get('total');
        $nomProduit = $session->get('Nom du produit');
        $nomProduit = implode(", ", $session->get('nomsProduits'));
        $session = Session::create([
            'payment_method_types'=>['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                  'name'=> $nomProduit,
                ],
                'unit_amount' => $total * 100, //convertir le total en centimes
            ],
              'quantity' => 1,
            ]
        ],
            'mode'        =>   'payment',

            # These placeholder URLs will be replaced in a following step.

            'success_url' => $urlGenerator->generate('success-url', ['idpanier' => $panier->getidpanier()], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $urlGenerator->generate('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        
          return $this->redirect($session->url, 303);

    }



    #[Route('/success-url/{idpanier}', name: 'success-url')]
    public function successUrl(int $idpanier,LignepanierRepository $lignepanierRepository): Response
    {   $idpanier = intval($idpanier); // convert the string to an integer
        // Récupérer le panier correspondant à l'idpanier
        $panier = $this->getDoctrine()->getRepository(Panier::class)->find($idpanier);
        $lignesPanier = $lignepanierRepository->findBy(['idpanier' => $idpanier]);
        return $this->render('payment/success.html.twig', ['lignesPanier' => $lignesPanier, 'idpanier' => $idpanier,'panier' => $panier]);
    }





    #[Route('/cancel_url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig', []);
    }




######
private $panierController;

    public function __construct(PanierController $panierController)
    {
        $this->panierController = $panierController;
    }




 
      #[Route('/pdf22/{idpanier}', name: 'pdf')]
   public function pdf(string $idpanier, LignepanierRepository $lignepanierRepository, SessionInterface $session, ManagerRegistry $doctrine): Response
  { 
    $panier = $session->get('panier');
    
    // Copier les données du panier dans une variable temporaire
    $contenuPanier = $session->get('contenuPanier');
    $idpanier = intval($idpanier); // convert the string to an integer
    $total = $session->get('total');

    // Configure Dompdf according to your needs
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');

    // Instantiate Dompdf with our options
    $dompdf = new Dompdf($pdfOptions);
    $date_facture = date('Y-m-d H:i:s');
    // Retrieve the HTML generated in our twig file
    $html = $this->renderView('payment/pdf.html.twig', [
        'lignesPanier' => $lignepanierRepository->findBy(['idpanier' => $idpanier]),
        'total' => $total,
        'date_facture' => $date_facture,
    ]);

    // Load HTML to Dompdf
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Generate the response with the PDF content
    $response = new Response($dompdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="example.pdf"'
    ]);
   
    return $response;
   // Call the ViderPanier method to clear the panier
    $this->panierController->ViderPanier($idpanier, $doctrine, $session, $lignepanierRepository);
    
  }



}



