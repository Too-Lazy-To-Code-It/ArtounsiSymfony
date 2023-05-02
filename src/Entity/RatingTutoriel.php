<?php

namespace App\Entity;

use App\Repository\RatingTutorielRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingTutorielRepository::class)]
class RatingTutoriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $rating = null;

    #[ORM\ManyToOne( targetEntity: Tutoriel::class )]
    #[ORM\JoinColumn(name:'tutorielId',referencedColumnName:'id_tutoriel',nullable: false)]
    private ?Tutoriel $tutorielId = null;

    #[ORM\ManyToOne( targetEntity: Allusers::class )]
    #[ORM\JoinColumn(name:'idRater',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $idRater = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getTutorielId(): ?Tutoriel
    {
        return $this->tutorielId;
    }

    public function setTutorielId(?Tutoriel $tutorielId): self
    {
        $this->tutorielId = $tutorielId;

        return $this;
    }

    public function getIdRater(): ?Allusers
    {
        return $this->idRater;
    }

    public function setIdRater(?Allusers $idRater): self
    {
        $this->idRater = $idRater;

        return $this;
    }
}
