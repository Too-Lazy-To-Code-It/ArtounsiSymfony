<?php

namespace App\Repository;

use App\Entity\Allusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @extends ServiceEntityRepository<Allusers>
 *
 * @method Allusers|null find($id_user, $lockMode = null, $lockVersion = null)
 * @method Allusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Allusers[]    findAll()
 * @method Allusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllusersRepository extends ServiceEntityRepository
{
    function generateSalt(): string
    {
        $salt = random_bytes(16);
        return base64_encode($salt);
    }

    function hashPassword($password, $salt): string
    {
        try {
            $hashedPassword = hash('sha256', base64_decode($salt) . $password, true);
            return base64_encode($hashedPassword);
        } catch (Exception $e) {
            throw new RuntimeException("Error hashing password: " . $e->getMessage());
        }
    }
    function decryptPassword($encryptedPassword, $salt, $inputPassword): bool
    {
        try {
            $hashedPassword = hash('sha256', base64_decode($salt) . $inputPassword, true);
            $decodedHashedPassword = base64_encode($hashedPassword);
            return ($decodedHashedPassword === $encryptedPassword);
        } catch (Exception $e) {
            throw new RuntimeException("Error decrypting password: " . $e->getMessage());
        }
    }


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Allusers::class);
    }

    public function save(Allusers $entity, bool $flush = false): void
    {
        $salt = $this->generateSalt();
        $hashedPassword = $this->hashPassword($entity->getPassword(), $salt);

        $entity->setSalt($salt);
        $entity->setPassword($hashedPassword);

        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Allusers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }




//    /**
//     * @return Allusers[] Returns an array of Allusers objects
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

//    public function findOneBySomeField($value): ?Allusers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function findOneByEmailOrNickname(string $emailOrNickname): ?Allusers
    {
        $entityManager = $this->getEntityManager();

        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('u')
            ->from(Allusers::class, 'u')
            ->where('u.Email = :emailOrNickname')
            ->orWhere('u.nickname = :emailOrNickname')
            ->setParameter('emailOrNickname', $emailOrNickname);

        $query = $queryBuilder->getQuery();

        return $query->getOneOrNullResult();
    }


}
