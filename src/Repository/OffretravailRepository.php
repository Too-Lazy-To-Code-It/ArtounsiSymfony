<?php

namespace App\Repository;

use App\Entity\Offretravail;
use App\Entity\Grosmots;
use Doctrine\Bundle\DoctrineBundle\Repository\GrosmotsRepository;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offretravail>
 *
 * @method Offretravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offretravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offretravail[]    findAll()
 * @method Offretravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffretravailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offretravail::class);
    }

    public function save(Offretravail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offretravail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Offretravail[] Returns an array of Offretravail objects
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

//    public function findOneBySomeField($value): ?Offretravail
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

   
public function chercherOffres(string $mots)
{
    $entityManager=$this->getEntityManager();
    $query=$entityManager
        ->createQuery("SELECT s FROM APP\Entity\Offretravail s WHERE LOWER(s.titreoffre)  LIKE :mot OR LOWER(s.descriptionoffre) LIKE :mot")
        ->setParameter('mot', '%' . $mots . '%')
    ;
    return $query->getResult();
}
public function findBydemandessimilaires(int $id)
{
    $entityManager=$this->getEntityManager();
    $query=$entityManager
        ->createQuery("SELECT d FROM App\Entity\Demandetravail d INNER JOIN  App\Entity\Offretravail o WITH o.titreoffre = d.titreDemande WHERE d.id_user  = :id ")
        ->setParameter('id', $id )
    ;
    return $query->getResult();
}
  /*  public function cherrdgtrcherfOffres(string $mots)
    {
        $offresTravailtrouver = [];

        $words = explode(' ', $mots);

        foreach ($words as $motss) {
            $qb = $this->createQueryBuilder('o');

            $qb->where($qb->expr()->like('o.titreOffre', ':motss'))
               ->orWhere($qb->expr()->like('o.nickname', ':motss'))
               ->orWhere($qb->expr()->like('o.descriptionoffre', ':motss'))
               ->orWhere($qb->expr()->like('o.categorieoffre', ':motss'))
               ->setParameter('motss', '%' . $motss . '%');

            $results = $qb->getQuery()->getResult();

            foreach ($results as $result) {
                if (!$this->containsId($offresTravailtrouver, $result->getIdOffre())) {
                    $offresTravailtrouver[] = $result;
                }
            }
        }

        return $offresTravailtrouver;
    }
*/
    public function containsId(array $list, int $id): bool
    {
        foreach ($list as $offre) {
            if ($offre->getIdOffre() === $id) {
                return true;
            }
        }

        return false;
    }
    
 
 
    public function findOneBySomeField($id)
        {         return $this->getEntityManager()->getRepository( Offretravail::class)->findBy(['id' => $id]);
       }
    
}
