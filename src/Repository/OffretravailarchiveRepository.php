<?php

namespace App\Repository;

use App\Entity\Offretravailarchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offretravailarchive>
 *
 * @method Offretravailarchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offretravailarchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offretravailarchive[]    findAll()
 * @method Offretravailarchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffretravailarchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offretravailarchive::class);
    }

    public function save(Offretravailarchive $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offretravailarchive $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Offretravailarchive[] Returns an array of Offretravailarchive objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Offretravailarchive
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
