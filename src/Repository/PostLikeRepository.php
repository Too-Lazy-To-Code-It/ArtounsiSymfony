<?php

namespace App\Repository;

use App\Entity\PostLike;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @extends ServiceEntityRepository<PostLike>
 *
 * @method PostLike|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostLike|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostLike[]    findAll()
 * @method PostLike[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostLike::class);
    }

    public function save(PostLike $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PostLike $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    


    
//     public function like(Request $request, PostLikeRepository $postLikeRepository): JsonResponse
// {
//     $postId = $request->request->get('postId');
//     $userId = $this->getUser()->getId(); // get the ID of the logged-in user

//     $postLike = new PostLike();
//     $postLike->setIdPost($postId);
//     $postLike->setIdUser($userId);

//     $postLikeRepository->save($postLike, true);

//     $likesCount = $postLikeRepository->count(['idPost' => $postId]);

//     return new JsonResponse(['likesCount' => $likesCount]);
// }

//    /**
//     * @return PostLike[] Returns an array of PostLike objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PostLike
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
