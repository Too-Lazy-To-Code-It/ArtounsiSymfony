<?php

namespace App\Repository;

use App\Entity\RatingTutoriel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RatingTutoriel>
 *
 * @method RatingTutoriel|null find($id, $lockMode = null, $lockVersion = null)
 * @method RatingTutoriel|null findOneBy(array $criteria, array $orderBy = null)
 * @method RatingTutoriel[]    findAll()
 * @method RatingTutoriel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingTutorielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RatingTutoriel::class);
    }

    public function save(RatingTutoriel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RatingTutoriel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RatingTutoriel[] Returns an array of RatingTutoriel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RatingTutoriel
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
