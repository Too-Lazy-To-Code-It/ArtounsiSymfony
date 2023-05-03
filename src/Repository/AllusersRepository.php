<?php

namespace App\Repository;

use App\Entity\Allusers;
use App\Entity\Panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\String\ByteString;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Twilio\Rest\Client;

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
    public function sendSmsMessage(Client $twilioClient,string $to,string $text):Response
    {
        $twilioClient->messages->create($to, [
            "body" => $text,
            "from" => $this->getParameter('twilio_number')
        ]);
        return new Response();
    }


    /**
     * @throws TransportExceptionInterface
     */
    public function sendVerificationEmail(string $email,MailerInterface $mailer, $verificationCode)
    {

        // Create the email message
        $message = (new Email())
            ->from('adam.rafraf@esprit.tn')
            ->to($email)
            ->subject('Verification Code')
            ->text('Your verification code is: ' . $verificationCode);

        // Send the email using the mailer
        $mailer->send($message);
    }


    /**
     * @throws Exception
     */
    public function generateVerificationCode(): string
    {
        $length = 6;
        $charset = new UnicodeString('0123456789');
        $sb = new ByteString('');

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, $charset->length() - 1);
            $sb = $sb->append($charset->slice($randomIndex, 1));
        }

        return $sb->toString();
    }

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

    public function save(Allusers $entity, bool $flush = false,Panier $panier,PanierRepository $panierRepository): void
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
    public function saven(Allusers $entity, bool $flush = false): void
    {
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
