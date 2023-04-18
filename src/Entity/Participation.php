<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_participation = null;

    #[ORM\ManyToOne(inversedBy: 'participations')]
    #[ORM\JoinColumn(name:'id_challenge',referencedColumnName:'id_challenge',nullable: false)]

    private ?challenge $id_challenge = null;

    #[ORM\ManyToOne(inversedBy: 'participations')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]

    private ?allusers $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $img_participation = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id_participation;
    }

    public function getIdChallenge(): ?challenge
    {
        return $this->id_challenge;
    }

    public function setIdChallenge(?challenge $id_challenge): self
    {
        $this->id_challenge = $id_challenge;

        return $this;
    }

    public function getIdUser(): ?allusers
    {
        return $this->id_user;
    }

    public function setIdUser(?allusers $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getImgParticipation(): ?string
    {
        return $this->img_participation;
    }

    public function setImgParticipation(string $img_participation): self
    {
        $this->img_participation = $img_participation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
