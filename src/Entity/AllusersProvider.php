<?php

namespace App\Entity;

use Doctrine\ORM\EntityManagerInterface;
use Exception;
use RuntimeException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class AllusersProvider implements UserProviderInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadUserByUsername(string $email): UserInterface
    {
        $user = $this->entityManager->getRepository(Allusers::class)->findOneBy(['Email' => $email]);

        if (!$user) {
            throw new BadCredentialsException('Invalid credentials');
        }

        return $user;
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        return $this->loadUserByUsername($user->getEmail());
    }

    public function supportsClass(string $class): bool
    {
        return Allusers::class === $class;
    }

    public function checkCredentials(UserInterface $user, string $password): bool
    {
        $hashedPassword = $user->getPassword();
        $salt = $user->getSalt();
        return $this->decryptPassword($hashedPassword, $salt, $password);
    }

    private function decryptPassword(string $encryptedPassword, string $salt, string $inputPassword): bool
    {
        try {
            $hashedPassword = hash('sha256', base64_decode($salt) . $inputPassword, true);
            $decodedHashedPassword = base64_encode($hashedPassword);
            return ($decodedHashedPassword === $encryptedPassword);
        } catch (Exception $e) {
            throw new RuntimeException("Error decrypting password: " . $e->getMessage());
        }
    }
}

