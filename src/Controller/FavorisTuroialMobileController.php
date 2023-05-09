<?php

namespace App\Controller;

use App\Entity\FavorisTuroial;
use App\Form\FavorisTuroialType;
use App\Repository\FavorisTuroialRepository;
use App\Repository\AllusersRepository;
use App\Repository\TutorielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class FavorisTuroialMobileController extends AbstractController
{
    #[Route('/addfavoriTutoriel/{id_tutoriel}/{id_user}', name: 'app_favoris_tutoriel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, $id_user, AllusersRepository $allusersRepository , FavorisTuroialRepository $favorisTuroialRepository, TutorielRepository $tutorielRepository,$id_tutoriel): Response
    {
        $favorisTuroial = new FavorisTuroial();
        $favorisTuroial->setIdTutoriel($tutorielRepository->find($id_tutoriel));
        $favorisTuroial->setIdUser($allusersRepository->find($id_user));

            $favorisTuroialRepository->save($favorisTuroial, true);
            return new Response(1);            
        }

    #[Route('/removefavoriTutoriel/{id_tutoriel}/{id_user}', name: 'app_favoris_turoial_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, $id_user, FavorisTuroial $favorisTuroial, FavorisTuroialRepository $favorisTuroialRepository,AllusersRepository $allusersRepository, ManagerRegistry $mr, $id_tutoriel): Response
    {
        $em = $mr->getManager();
        $favori = $favorisTuroialRepository->findOneBy(array('id_user'=>$allusersRepository->find($id_user),'id_tutoriel'=>$id_tutoriel));
        $em->remove($favori);
        $em->flush();
        return new Response(0);
    }

    #[Route('/checkfavoriTutoriel/{id_tutoriel}/{id_user}', name: 'app_favoris_turoial_check', methods: ['GET', 'POST'])]
    public function check(Request $request, $id_user, TutorielRepository $tr, FavorisTuroialRepository $favorisTuroialRepository,AllusersRepository $allusersRepository, ManagerRegistry $mr, $id_tutoriel,NormalizerInterface $normalizer): Response
    {
        $favori = $favorisTuroialRepository->findBy(array( "id_tutoriel" => $tr->find($id_tutoriel),"id_user"=> $allusersRepository->find($id_user) ));
        $jsonContent = $normalizer->normalize($favori, 'json', ['groups' => 'favori']);
        $json = json_encode($jsonContent);

        return new Response($json);

    }

    #[Route('/fetchCountFavorisTutoriel/{idTutoriel}', name: 'fetchCountFavorisTutoriel')]
    public function fetchCountFavorisTutoriel($idTutoriel, Request $request, ManagerRegistry $doctrine, TutorielRepository $tutorielRepository, ManagerRegistry $mr,  NormalizerInterface $Normalizer): Response
    {        
        $em = $mr->getManager();
        $avgrating = $em->createQuery("SELECT Count(f) as id_favoris FROM App\Entity\FavorisTuroial f, App\Entity\Tutoriel t WHERE t.id_tutoriel=f.id_tutoriel AND f.id_tutoriel = :tutorielId")
                            ->setParameter('tutorielId', $idTutoriel)->getResult();
        
        $jsonContent = $Normalizer->normalize($avgrating, 'json');
        return new Response(json_encode($jsonContent));
    }

}
