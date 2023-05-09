<?php

namespace App\Entity;

use App\Repository\GrosmotsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GrosmotsRepository::class)]
class Grosmots
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("mot")]
    private ?int $idMot = null;

    #[ORM\Column(length: 255)]
    #[Groups("mot")]
    #[Assert\NotBlank(message:"veuiller saisir un gros mot ")]
    private ?string $mot = null;

    public function getidMot(): ?int
    {
        return $this->idMot;
    }

    public function getMot(): ?string
    {
        return $this->mot;
    }

    public function setMot(string $mot): self
    {
        $this->mot = $mot;

        return $this;
    }
}