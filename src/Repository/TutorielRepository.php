<?php

namespace App\Repository;

use App\Entity\Tutoriel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tutoriel>
 *
 * @method Tutoriel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tutoriel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tutoriel[]    findAll()
 * @method Tutoriel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TutorielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tutoriel::class);
    }

    public function save(Tutoriel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Tutoriel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findTop()
    {
        $query = $this->getEntityManager()
                              ->createQuery('SELECT t FROM APP\Entity\Tutoriel t, App\Entity\FavorisTuroial f WHERE t.id_tutoriel=f.id_tutoriel GROUP BY t.title ORDER BY count(f) DESC');
        return $query->getResult();
    }

    public function tutorielsPerCategory(){
        $number = $this->getEntityManager()
        ->createQuery('SELECT count(t) FROM APP\Entity\Tutoriel t')
        ->getResult();
        $query = $this->getEntityManager()
                              ->createQuery('SELECT c.name_category, count(c) as aaa FROM APP\Entity\Tutoriel t, APP\Entity\Category c WHERE t.id_categorie=c.id_category GROUP BY c.name_category');

        return $query->getResult();
    }

    public function tutorielsPerView(){
        $query = $this->getEntityManager()
                              ->createQuery('SELECT t.title, count(w) as views FROM APP\Entity\Tutoriel t, APP\Entity\Video v, App\Entity\View w WHERE t.id_tutoriel=v.id_tutoriel AND v.id_video=w.id_video GROUP BY t.title ORDER BY views DESC');
        return $query->getResult();
    }

    public function ViewsPerMonth(int $id, int $m){
        $d = new \DateTime();
        $query = $this->getEntityManager()
                              ->createQuery('SELECT MONTH(w.date_v) as month, count(w) as views FROM APP\Entity\Tutoriel t, APP\Entity\Video v, App\Entity\View w WHERE t.id_tutoriel=v.id_tutoriel AND v.id_video=w.id_video AND MONTH(w.date_v)=:month AND YEAR(w.date_v)=Year(:d) AND t.id_artist = :id ORDER BY views DESC')
                                            ->setParameter('month',$m)
                                            ->setParameter('d',$d)
                                            ->setParameter('id',$id);
        return $query->getResult();
    }

//    /**
//     * @return Tutoriel[] Returns an array of Tutoriel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tutoriel
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
