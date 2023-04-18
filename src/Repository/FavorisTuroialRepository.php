<?php

namespace App\Repository;

use App\Entity\FavorisTuroial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FavorisTuroial>
 *
 * @method FavorisTuroial|null find($id, $lockMode = null, $lockVersion = null)
 * @method FavorisTuroial|null findOneBy(array $criteria, array $orderBy = null)
 * @method FavorisTuroial[]    findAll()
 * @method FavorisTuroial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavorisTuroialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FavorisTuroial::class);
    }

    public function save(FavorisTuroial $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FavorisTuroial $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FavorisTuroial[] Returns an array of FavorisTuroial objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FavorisTuroial
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
