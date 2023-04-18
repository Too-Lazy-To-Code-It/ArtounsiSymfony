<?php

namespace App\Repository;

use App\Entity\Artistepostuler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Artistepostuler>
 *
 * @method Artistepostuler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artistepostuler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artistepostuler[]    findAll()
 * @method Artistepostuler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtistepostulerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artistepostuler::class);
    }

    public function save(Artistepostuler $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Artistepostuler $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function notif(int $id)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT s FROM APP\Entity\Artistepostuler s WHERE s.idoffre =:id ")
            ->setParameter('id', $id)
        ;
        return $query->getResult();
    }
//    /**
//     * @return Artistepostuler[] Returns an array of Artistepostuler objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Artistepostuler
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
