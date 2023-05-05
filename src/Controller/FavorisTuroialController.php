<?php

namespace App\Controller;

use App\Entity\Allusers;
use App\Entity\FavorisTuroial;
use App\Form\FavorisTuroialType;
use App\Repository\FavorisTuroialRepository;
use App\Repository\AllusersRepository;
use App\Repository\TutorielRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/favoris/turoial')]
class FavorisTuroialController extends AbstractController
{
    #[Route('/Tutoriel/addfavori/{id_tutoriel}', name: 'app_favoris_tutoriel_new', methods: ['GET', 'POST'])]
    public function new(SessionInterface $session,Request $request, AllusersRepository $allusersRepository, FavorisTuroialRepository $favorisTuroialRepository, TutorielRepository $tutorielRepository, $id_tutoriel): Response
    {
        $userId = $session->get('user_id');
        if ($userId!=null) {
            $user = $allusersRepository->find($userId);
        }
        $favorisTuroial = new FavorisTuroial();
        $favorisTuroial->setIdTutoriel($tutorielRepository->find($id_tutoriel));
        $favorisTuroial->setIdUser($allusersRepository->find($userId));

        $favorisTuroialRepository->save($favorisTuroial, true);
        return $this->redirectToRoute('app_tutoriel_show', [
            'id_tutoriel' => $id_tutoriel,
            'user'=>$user,
        ], Response::HTTP_SEE_OTHER);
    }

    #[Route('/Tutoriel/removefavori/{id_tutoriel}', name: 'app_favoris_turoial_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, FavorisTuroial $favorisTuroial, FavorisTuroialRepository $favorisTuroialRepository, AllusersRepository $allusersRepository, ManagerRegistry $mr, $id_tutoriel): Response
    {
        $em = $mr->getManager();
        $favori = $favorisTuroialRepository->findOneBy(array('id_user' => $allusersRepository->find($userId), 'id_tutoriel' => $id_tutoriel));
        $em->remove($favori);
        $em->flush();
        return $this->redirectToRoute('app_tutoriel_show', ['id_tutoriel' => $id_tutoriel], Response::HTTP_SEE_OTHER);
    }
}
