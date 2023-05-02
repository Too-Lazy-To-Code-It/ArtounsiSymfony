<?php

namespace App\Repository;

use App\Entity\Demandetravail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Demandetravail>
 *
 * @method Demandetravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Demandetravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Demandetravail[]    findAll()
 * @method Demandetravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandetravailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Demandetravail::class);
    }

    public function save(Demandetravail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Demandetravail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Demandetravail[] Returns an array of Demandetravail objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Demandetravail
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function chercherdemandes(string $mots)
{
    $entityManager=$this->getEntityManager();
    $query=$entityManager
        ->createQuery("SELECT s FROM APP\Entity\Demandetravail s WHERE LOWER(s.titreDemande)  LIKE :mot OR LOWER(s.descriptionDemande) LIKE :mot")
        ->setParameter('mot', '%' . $mots . '%')
    ;
    return $query->getResult();
}
public function findByoffressimilaires(int $id)
{
    $entityManager=$this->getEntityManager();
    $query=$entityManager
        ->createQuery("SELECT o FROM App\Entity\Offretravail o INNER JOIN App\Entity\Demandetravail d WITH o.titreoffre = d.titreDemande WHERE d.id_user  = :id ")
        ->setParameter('id', $id )
    ;
    return $query->getResult();
}
public function findOneBySomeField($id)
{       $file= $this->getEntityManager()->getRepository( Demandetravail::class)->findBy(['idDemande' => $id]);
    return $this->file('/home/website/upload/'.$file);

}
}
