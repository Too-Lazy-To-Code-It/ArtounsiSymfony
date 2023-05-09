<?php

namespace App\Controller;

use App\Form\OffretravailType;
use App\Repository\OffretravailRepository;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ArtistepostulerRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offretravail;
use App\Repository\CategoryRepository;
use App\Repository\GrosmotsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AllusersRepository;
use Symfony\Component\Form\FormError;
use DateTime;
use App\Entity\Category;
use App\Entity\Offretravailarchive;
use App\Repository\OffretravailarchiveRepository;

class OffretravailmobileController extends AbstractController
{
    #[Route('/json/alloffres', name: 'alloffresjson', methods: ['GET'])]
    public function alloffresjson(SerializerInterface $serializer, NormalizerInterface $normalizer, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {

        $offretravails = $offretravailRepository->findAll();



        $json = $serializer->serialize($offretravails, 'json', ['groups' => "offres"]);

        return new Response($json);
    }
    #[Route('/showoffr', name: 'showoffr', methods: ['GET'])]
    public function showoffr(SerializerInterface $serializer, NormalizerInterface $normalizer, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {

        $offretravails = $offretravailRepository->findAll();



        $json = $serializer->serialize($offretravails, 'json', ['groups' => "offres"]);

        return new Response($json);
    }
    #[Route('/grosmot', name: 'agrosmot', methods: ['GET'])]
    public function agrosmot(GrosmotsRepository $grosmotsRepository, SerializerInterface $serializer, NormalizerInterface $normalizer, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {

        $offretravails = $grosmotsRepository->findAll();
        ///  $offretravailsNormalises=$normalizer->normalize( $offretravails,'json',['groups'=>"offres"]);


        $json = $serializer->serialize($offretravails, 'json', ['groups' => "mot"]);

        return new Response($json);
    }


    #[Route('/json/mesoffres/{id}', name: 'mesoffresjson', methods: ['GET'])]
    public function mesoffres($id, NormalizerInterface $normalizer, OffretravailRepository $offretravailRepository, ArtistepostulerRepository $artiste)
    {


        $offretravailbyid = $offretravailRepository->findBy(['id_user' => $id]);
        $offretravailbyidNormalises = $normalizer->normalize($offretravailbyid, 'json', ['groups' => "offres"]);


        $json = json_encode($offretravailbyidNormalises);

        return new Response($json);
    }


    #[Route('/newjson/{id}', name: 'newjson', methods: ['GET', 'POST'])]
    public function new($id, Request $req, NormalizerInterface $Normalizer, CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot, AllusersRepository $allusersRepository)
    {


        $em = $this->getDoctrine()->getManager();
        $offretravail = new Offretravail();
        $user = $allusersRepository->find($id);

        $now = new DateTime();
        $offretravail->setIdUser($user);
        $category = $categoryRepository->find($req->get('idcategorie'));

// Get the name of the category
        if ($category) {
            $nomcategorie = $category->getNameCategory();
        } else {
            // Handle the case where no category was found
            $nomcategorie = 'Unknown category';
        }

        $nickname = $allusersRepository->find($id)->getNickname();
        $offretravail->setNickname($nickname);
        $offretravail->setIdUser($user);
        $offretravail->setCategorieoffre($nomcategorie);
        $offretravail->setTitreoffre($req->get('titreoffre'));
        $offretravail->setDescriptionoffre($req->get('descriptionoffre'));
        $offretravail->setDateajoutoofre($now);
        $offretravail->setIdcategorie($categoryRepository->find($req->get("idcategorie")));


        $offretravail->setTypeoffre($req->get('typeoffre'));
        $offretravail->setLocalisationoffre($req->get('localisationoffre'));
        $em->persist($offretravail);
        $em->flush();

        $jsonContent = $Normalizer->normalize($offretravail, 'json', ['groups' => 'offres']);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/updatejson/{id}/{iduser}', name: 'updatejson', methods: ['GET', 'POST'])]
    public function updateStudentJSON(Request $req, $iduser, $id, NormalizerInterface $Normalizer, CategoryRepository $categoryRepository, OffretravailRepository $offretravailRepository, GrosmotsRepository $mot, AllusersRepository $allusersRepository)
    {

        $em = $this->getDoctrine()->getManager();
        $offretravail = $em->getRepository(Offretravail::class)->find($id);
        $user = $allusersRepository->find($iduser);

        $now = new DateTime();
        $offretravail->setIdUser($user);
        $category = $categoryRepository->find($req->get('idcategorie'));

// Get the name of the category
        if ($category) {
            $nomcategorie = $category->getNameCategory();
        } else {
            // Handle the case where no category was found
            $nomcategorie = 'Unknown category';
        }

        $nickname = $allusersRepository->find($iduser)->getNickname();
        $offretravail->setNickname($nickname);
        $offretravail->setIdUser($user);
        $offretravail->setCategorieoffre($nomcategorie);
        $offretravail->setTitreoffre($req->get('titreoffre'));
        $offretravail->setDescriptionoffre($req->get('descriptionoffre'));
        $offretravail->setDateajoutoofre($now);
        $offretravail->setIdcategorie($categoryRepository->find($req->get("idcategorie")));


        $offretravail->setTypeoffre($req->get('typeoffre'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($offretravail, 'json', ['groups' => 'offres']);
        return new Response("offre updated successfully " . json_encode($jsonContent));
    }

    #[Route("/deleteoffre/{id}", name: "deleteStudentJSON")]
    public function deleteStudentJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $offretravail = $em->getRepository(Offretravail::class)->find($id);
        $em->remove($offretravail);
        $em->flush();
        $jsonContent = $Normalizer->normalize($offretravail, 'json', ['groups' => 'offres']);
        return new Response("offre deleted successfully " . json_encode($jsonContent));
    }

    #[Route('/cat', name: 'catshow', methods: ['GET'])]
    public function catshow(CategoryRepository $categoryRepository, SerializerInterface $serializer)
    {

        $categorie = $categoryRepository->findAll();

        $json = $serializer->serialize($categorie, 'json', ['groups' => "category"]);

        return new Response($json);
    }

}
    