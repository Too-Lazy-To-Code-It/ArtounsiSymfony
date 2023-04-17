<?php

namespace App\Entity;

use App\Repository\FavorisTuroialRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavorisTuroialRepository::class)]
class FavorisTuroial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_favoris = null;

    #[ORM\ManyToOne( targetEntity: Allusers::class )]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $id_user = null;

    #[ORM\ManyToOne( targetEntity: Tutoriel::class )]
    #[ORM\JoinColumn(name:'id_tutoriel',referencedColumnName:'id_tutoriel',nullable: false)]
    private ?Tutoriel $id_tutoriel = null;

    public function getId(): ?int
    {
        return $this->id_favoris;
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

    public function getIdTutoriel(): ?tutoriel
    {
        return $this->id_tutoriel;
    }

    public function setIdTutoriel(?tutoriel $id_tutoriel): self
    {
        $this->id_tutoriel = $id_tutoriel;

        return $this;
    }
}
