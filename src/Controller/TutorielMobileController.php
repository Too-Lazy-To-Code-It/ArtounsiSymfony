<?php

namespace App\Controller;

use App\Entity\Tutoriel;
use App\Form\TutorielType;
use App\Entity\RatingTutoriel;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\TutorielRepository;
use App\Repository\VideoRepository;

use App\Repository\RatingTutorielRepository;
use App\Repository\AllusersRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\RatingType;
use App\Form\TutorielSearchType;
use App\Entity\Rating;
use Knp\Component\Pager\PaginatorInterface;
use App\Services\QrcodeService;

class TutorielMobileController extends AbstractController
{
    #[Route('/showlisttutoriels', name: 'list_tutoriel')]
    public function index(Request $request, ManagerRegistry $mr, TutorielRepository $tutorielRepository,CategoryRepository $CategoryRepository, NormalizerInterface $normalizer): Response
    {
        $tutoriels = $tutorielRepository->findAll();
        
        $tutorielsNormalizes = $normalizer->normalize($tutoriels,'json',['groups' => "tutoriels"]);
        
        $json = json_encode($tutorielsNormalizes);
        
        return new Response($json);
    }

    #[Route("showtutoriel/{id}", name: "tutoriel")]
    public function TutorielId($id, NormalizerInterface $normalizer, VideoRepository $videoRepository)
    {
        $videos = $videoRepository->findBy(array("id_tutoriel"=>$id));
        $videosNormalizes = $normalizer->normalize($videos, 'json', ['groups' => "videos"]);
        $json = json_encode($videosNormalizes);
        return new Response($json);
    }

    #[Route("/addTutoriel", name: "addTutoriell")]
    public function addTutoriel(Request $req, AllusersRepository $allusersRepository, CategoryRepository $categoryRepository,  NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $tutoriel = new Tutoriel();
        $tutoriel->setTitle($req->get('title'));
        $tutoriel->setDescription($req->get('description'));
        $tutoriel->setNiveau($req->get('niveau'));
        $tutoriel->setPathimg($req->get('pathimg'));
        $tutoriel->setIdArtist($allusersRepository->find($req->get('id_artist')));
        $categorie = $categoryRepository->findOneBy(array('name_category'=>$req->get('id_categorie')));
        $tutoriel->setIdCategorie($categoryRepository->find($categorie->getId_category()));
        $em->persist($tutoriel);
        $em->flush();

        $jsonContent = $Normalizer->normalize($tutoriel, 'json', ['groups' => 'tutoriels']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("updatetutoriel/{id}", name: "updateTutoriel")]
    public function updateStudentJSON(Request $req, $id, AllusersRepository $allusersRepository, CategoryRepository $categoryRepository,  NormalizerInterface $Normalizer) {

        $em = $this->getDoctrine()->getManager();
        $tutoriel = $em->getRepository(Tutoriel::class)->find($id);
        $tutoriel->setTitle($req->get('title'));
        $tutoriel->setDescription($req->get('description'));
        $tutoriel->setNiveau($req->get('niveau'));
        $tutoriel->setPathimg($req->get('pathimg'));
        move_uploaded_file($req->get('pathimg'),"C:\Users\achref\Desktop\New folder (2)");
        $tutoriel->setIdArtist($allusersRepository->find(1));
        $tutoriel->setIdCategorie($categoryRepository->findOneBy(array('name_category'=>$req->get('id_categorie'))));
        
        $em->flush();

        $jsonContent = $Normalizer->normalize($tutoriel, 'json', ['groups' => 'tutoriels']);
        return new Response("Student updated successfully " . json_encode($jsonContent));
    }

    #[Route("deletetutoriel/{id}", name: "deleteTutoriel")]
    public function deleteStudentJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $tutoriel = $em->getRepository(Tutoriel::class)->find($id);
        $em->remove($tutoriel);
        $em->flush();
        $jsonContent = $Normalizer->normalize($tutoriel, 'json', ['groups' => 'tutoriel']);
        return new Response("Tutoriel deleted successfully " . json_encode($jsonContent));
    }
}