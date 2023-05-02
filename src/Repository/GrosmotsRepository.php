<?php

namespace App\Repository;

use App\Entity\Grosmots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Grosmots>
 *
 * @method Grosmots|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grosmots|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grosmots[]    findAll()
 * @method Grosmots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrosmotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grosmots::class);
    }

    public function save(Grosmots $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Grosmots $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Grosmots[] Returns an array of Grosmots objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Grosmots
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function listmot():array
{
    $entityManager=$this->getEntityManager();
    $query=$entityManager
        ->createQuery("SELECT s.mot FROM APP\Entity\Grosmots s" )
      
    
    ->getScalarResult();

    return array_column($query, 'mot');
}

 public function checkGrosMots(string $words): bool
    { 
  
       
        $listBadWords =$this->listmot();
        $badWord = "";
        $existe = false;
        $allbadwords = "";
        foreach ($listBadWords as $str) {
            if (stripos($words, $str) !== false) {
                $badWord .= "" . $str;
                if (strlen($str) >= 1) {
                    $badWordHiden = substr_replace($str, str_repeat('*', strlen($str) - 2), 1, -1);
                    if (!empty($badWordHiden)) {
                        $existe = true;
                        $allbadwords .= $badWordHiden . "  ";
                    }
                }
            }
        }
        
        return $existe;
    }
}
