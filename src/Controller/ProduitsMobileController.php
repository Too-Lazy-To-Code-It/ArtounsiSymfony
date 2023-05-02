<?php

namespace App\Controller;


use App\Entity\Produits;
use App\Entity\Allusers;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitsRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Security;
use DateTime;
use App\Repository\AllusersRepository;
use Doctrine\ORM\EntityManagerInterface;
class ProduitsMobileController extends AbstractController
{
  

    #[Route('/TousLesproduits/mobile', name: 'ListeProduits')]

    public function getProduits(ProduitsRepository $repo,SerializerInterface $serializer)
     {    $produits=$repo->findAll();
        // La fonction normalize transforme le tableau d'objets produits en tableau associatif simple 
            //$produitsNormalises=$normalizer->normalize($produits,'json',['groups' => "produits"]);

       //La fonction json_encode transforme un tableau associatif en format JSON 
            // $json=json_encode($produitsNormalises);

            $json=$serializer->serialize($produits,'json',['groups' => "produits"]);

          //Nous renvoyons une réponse http qui prend en paramètre un tableau en format JSON 
             return new Response($json);
     }
 

 #Afficher un produit par id   
     #[Route('/ProduitMobile/{idproduit}', name: 'produit_par_id')]
     public function ProduitId($idproduit, ProduitsRepository $repo, NormalizerInterface $normalizer)
     { 
            $produit = $repo->find($idproduit);
            $produitNormalises = $normalizer->normalize($produit, 'json', ['groups' => "produits"]);
            return new Response(json_encode($produitNormalises));
    }

#Ajouter un produit 
    #[Route("/ajouterProduitJSON/new", name: "ajouterProduitJSON")]
    public function ajouterProduitJSON(Request $req,   NormalizerInterface $Normalizer, AllusersRepository $usr ,EntityManagerInterface $entityManager)
   {
 
    $em = $this->getDoctrine()->getManager();
    $user = $entityManager->getRepository(Allusers::class)->find(1);
    $category = $entityManager->getRepository(Category::class)->findOneBy(array("name_category"=>$req->get('category')));
    

    
    $produit = new Produits();
  

    $produit ->setIdUser($user);

    $produit ->setNom($req->get('nom'));
    $produit ->setDescription($req->get('description'));
    $produit ->setIdcategorie($category);
    $produit ->setImage($req->get('image'));
    $produit ->setPrix($req->get('prix'));
    $produit->setDateajout(new DateTime());

    $em->persist($produit );
    $em->flush();

    $jsonContent = $Normalizer->normalize($produit , 'json', ['groups' => 'produits']);
    return new Response(json_encode($jsonContent));
   }


#Modifier un produit 
#[Route("/modifierProduitJSON/{idproduit}", name: "modifierProduitJSON")]
public function modifierProduitJSON($idproduit,Request $req,   NormalizerInterface $Normalizer, AllusersRepository $usr ,EntityManagerInterface $entityManager)
{ $em = $this->getDoctrine()->getManager();
  $produit = $em->getRepository(Produits::class)->find($idproduit);
  $user = $entityManager->getRepository(Allusers::class)->find(1);
  $category = $entityManager->getRepository(Category::class)->find($req->get('idcategorie'));

  $produit ->setIdUser($user);
  $produit ->setNom($req->get('nom'));
  $produit ->setDescription($req->get('description'));
  $produit ->setIdcategorie($category);
  $produit ->setImage($req->get('image'));
  $produit ->setPrix($req->get('prix'));
  $produit->setDateajout(new DateTime());
  $em->flush();

  $jsonContent = $Normalizer->normalize($produit, 'json', ['groups' => 'produits']);
  return new Response("Le produit a été modifié avec succès " . json_encode($jsonContent));

}

#Supprimer un produit 
#[Route("/supprimerProduitJSON/{idproduit}", name: "supprimerProduitJSON")]
public function supprimerProduitJSON($idproduit,Request $req,   NormalizerInterface $Normalizer, AllusersRepository $usr ,EntityManagerInterface $entityManager)
{  $em = $this->getDoctrine()->getManager();
   $produit = $em->getRepository(Produits::class)->find($idproduit);
   $em->remove($produit);
   $em->flush();
   $jsonContent = $Normalizer->normalize($produit, 'json', ['groups' => 'produits']);
   return new Response("Le produit a été supprimé avec succès " . json_encode($jsonContent));
}






}