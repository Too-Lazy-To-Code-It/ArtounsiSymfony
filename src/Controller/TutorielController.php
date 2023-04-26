<?php

namespace App\Controller;

use App\Entity\Tutoriel;
use App\Form\TutorielType;
use App\Entity\RatingTutoriel;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Repository\TutorielRepository;
use App\Repository\RatingTutorielRepository;
use App\Repository\AllusersRepository;
use App\Repository\CategoryRepository;
use App\Repository\FavorisTuroialRepository;
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


#[Route('/tutoriel')]
class TutorielController extends AbstractController
{
    #[Route('/', name: 'app_tutoriel_index', methods: ['GET','POST'])]
    public function index(Request $request,PaginatorInterface $paginator, ManagerRegistry $mr, TutorielRepository $tutorielRepository,CategoryRepository $CategoryRepository,QrcodeService $qrcodeService): Response
    {
        //dd($qrcodeService->qrcode('symfony'));
        $qrCode = null;

        $em = $mr->getManager();
        $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p');

        $keyword = null;
        $category = null;
        if($request->isMethod("POST"))
        {
            $keyword = $request->get('keyword');
            $category = $request->get('Category');

            if($keyword=="" && $category=="null")
                $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p');
            else if(($keyword==""||$keyword==null) && $category!="null")
                $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p')
                                                  ->where("p.id_categorie = :category")
                                                  ->setParameter('category',$category);

            else if(($keyword!=""||$keyword!=null) && $category=="null")
                $allTutorielsQuery = $em->createQuery("SELECT t FROM APP\Entity\Tutoriel t WHERE t.title like :title")
                                                              ->setParameter('title', '%'.$keyword.'%');

            else
                $allTutorielsQuery = $em->createQuery("SELECT t FROM APP\Entity\Tutoriel t WHERE t.title like :title AND t.id_categorie = :category")
                                                              ->setParameter('title', '%'.$keyword.'%')
                                                              ->setParameter('category',$category);
        }
        
        $tutoriels = $paginator->paginate(
            //Doctrine query
            $allTutorielsQuery,
            //Define the page parameter
            $request->query->getInt('page', 1),
            //Items per page
            4
        );
        
        return $this->render('tutoriel/index.html.twig', [
            'keyword' => $keyword,
            'Categorie' => $category,
            'tutoriels' => $tutoriels,
            'toptutoriels' => $tutorielRepository->findTop(),
            'categories' => $CategoryRepository->findAll(),
    
        ]);
    }

    #[Route('/show/names', name: 'app_tutoriel_names', methods: ['GET','POST'])]
    public function names(Request $request,PaginatorInterface $paginator, ManagerRegistry $mr, TutorielRepository $tutorielRepository,CategoryRepository $CategoryRepository): Response
    {

        $em = $mr->getManager();
        $tutoriels =$tutorielRepository->findAll();
        $names = array();
        foreach($tutoriels as $tutoriell){
            array_push($names,$tutoriell->getTitle());
        }
        return new JsonResponse( ['success' => true,'names' => $names ]);
    }

    #[Route('/search/{keyword}/{category}', name: 'app_tutoriel_index_search', methods: ['GET','POST'])]
    public function search(Request $request,PaginatorInterface $paginator, ManagerRegistry $mr, TutorielRepository $tutorielRepository,CategoryRepository $CategoryRepository, $keyword, $category): Response
    {
        $em = $mr->getManager();
        $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p');
        
            $keyword = $request->get('keyword');
            $category = $request->get('Category');

            if($keyword=="" && $category=="null")
                $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p')
                                                  ->getQuery()
                                                  ->getResult();
            else if(($keyword==""||$keyword==null) && $category!="null")
                $allTutorielsQuery=$tutorielRepository->createQueryBuilder('p')
                                                  ->where("p.id_categorie = :category")
                                                  ->setParameter('category',$category)
                                                  ->getQuery()
                                                  ->getResult();

            else if(($keyword!=""||$keyword!=null) && $category=="null")
                $allTutorielsQuery = $em->createQuery("SELECT t FROM APP\Entity\Tutoriel t WHERE t.title like :title")
                                                              ->setParameter('title', '%'.$keyword.'%')->getResult();

            else
                $allTutorielsQuery = $em->createQuery("SELECT t FROM APP\Entity\Tutoriel t WHERE t.title like :title AND t.id_categorie = :category")
                                                              ->setParameter('title', '%'.$keyword.'%')
                                                              ->setParameter('category',$category)
                                                              ->getResult();
        

        
        
        return new JsonResponse( ['keyword' => $keyword,
        'Categorie' => $category,
        'tutoriels' => $tutoriels,
        'toptutoriels' => $tutorielRepository->findTop(),
        'categories' => $CategoryRepository->findAll(), ]);
    }

    #[Route('/back', name: 'app_tutoriel_index_back', methods: ['GET','POST'])]
    public function indexback(Request $request,PaginatorInterface $paginator,TutorielRepository $tutorielRepository): Response
    {

        $form = $this->createForm(TutorielSearchType::class);
        $form->handleRequest($request);
        $tutorielsPerCategory=$tutorielRepository->tutorielsPerCategory();
        $vpm = [];
        $d = new \DateTime();
        
        for ($i =1; $i <= 12; $i++) {
            $vpm[$i] =  $tutorielRepository->ViewsPerMonth(1,$i)[0]['views'];
        }

        return $this->render('tutoriel/indexback.html.twig', [
            'tutorielsPerView' => $tutorielRepository->tutorielsPerView(),
            'tutorielsPerCategory' => $tutorielsPerCategory,
            'tutoriels' => $tutorielRepository->findAll(),
            'toptutoriels' => $tutorielRepository->findBy([],[],4),
            'form' => $form->createView(),
            'vpm' => $vpm
        ]);
    }

    #[Route('/showfavoris', name: 'app_tutoriel_favoris', methods: ['GET'])]
    public function showfavoris(TutorielRepository $tutorielRepository, FavorisTuroialRepository $favorisTuroialRepository,AllusersRepository $allusersRepository): Response
    {
        return $this->render('tutoriel/favoris.html.twig', [
            'tutoriels' => $favorisTuroialRepository->findBy(array('id_user'=>$allusersRepository->find(1))),
            'toptutoriels' => $tutorielRepository->findBy([],[],4),
        ]);
    }


    #[Route('/new', name: 'app_tutoriel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TutorielRepository $tutorielRepository): Response
    {
        $tutoriel = new Tutoriel();
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('Image')->getData();

            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );

            //on stocke l'image dans la bd
            $tutoriel->setPathimg($fichier);

            $tutorielRepository->save($tutoriel, true);

            $this->addFlash('success','Tutoriel Added successfuly');

            return $this->redirectToRoute('app_tutoriel_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tutoriel/new.html.twig', [
            'tutoriel' => $tutoriel,
            'form' => $form,
        ]);
    }

    #[Route('/{id_tutoriel}', name: 'app_tutoriel_show', methods: ['GET', 'POST'])]
    public function show(Request $request, ManagerRegistry $mr, Tutoriel $tutoriel, FavorisTuroialRepository $favorisTuroialRepository,TutorielRepository $tutorielRepository, AllusersRepository $allusersRepository, RatingTutorielRepository $ratingTutorielRepositoty, $id_tutoriel): Response
    {          
        $em = $mr->getManager();
        if($ratingTutorielRepositoty->findOneBy(array('tutorielId'=>$tutorielRepository->find($id_tutoriel),'idRater'=>$allusersRepository->find(1))))
            $oldrating = $ratingTutorielRepositoty->findOneBy(array('tutorielId'=>$tutorielRepository->find($id_tutoriel),'idRater'=>$allusersRepository->find(1)));
        else
        {
            $oldrating = new RatingTutoriel();
            $oldrating->setRating(0);
        }

        $avgrating = $em->createQuery("SELECT avg(r.rating) as avg FROM APP\Entity\RatingTutoriel r WHERE r.tutorielId = :tutorielId")
                            ->setParameter('tutorielId', $id_tutoriel)->getResult();

        return $this->render('tutoriel/show.html.twig', [
            'oldrating' => $oldrating,
            'tutoriel' => $tutoriel,
            'favori' => $favorisTuroialRepository->findOneBy(array('id_user'=>$allusersRepository->find(1),'id_tutoriel'=>$id_tutoriel)),
            'avg' => $avgrating[0]
        ]);
    }

    #[Route('/{id_tutoriel}/edit', name: 'app_tutoriel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tutoriel $tutoriel, TutorielRepository $tutorielRepository): Response
    {
        $form = $this->createForm(TutorielType::class, $tutoriel);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('Image')->getData();
            if($image!=null){
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            $tutoriel->setPathimg($fichier);}

            $tutorielRepository->save($tutoriel, true);
            $this->addFlash('success','Tutoriel Modified successfuly');

            return $this->redirectToRoute('app_tutoriel_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tutoriel/edit.html.twig', [
            'tutoriel' => $tutoriel,
            'form' => $form,
        ]);
    }

    

    #[Route('/delete/{id_tutoriel}', name: 'app_tutoriel_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, TutorielRepository $tutorielRepository, ManagerRegistry $mr, $id_tutoriel): Response
    {
        $em = $mr->getManager();
        $tutoriel = $tutorielRepository->find($id_tutoriel);
        $em->remove($tutoriel);
        $em->flush();
        $this->addFlash('success','Tutoriel Deleted successfuly');
        return $this->redirectToRoute('app_tutoriel_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
