<?php

namespace App\Entity;

use App\Repository\ArtistepostulerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistepostulerRepository::class)]
class Artistepostuler
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_artpostuler = null;

    #[ORM\ManyToOne(inversedBy: 'artistepostulers')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $nomartiste = null;

    #[ORM\Column(length: 255)]
    private ?string $titreoffre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datepostuler = null;

    #[ORM\ManyToOne(inversedBy: 'artistepostulers')]
    #[ORM\JoinColumn(name:'idoffre',referencedColumnName:'idoffre',nullable: false)]
    private ?offretravail $idoffre = null;

    public function getId(): ?int
    {
        return $this->id_artpostuler;
    }

    public function getIdUser(): ?Allusers
    {
        return $this->id_user;
    }

    public function setIdUser(?Allusers $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getNomartiste(): ?string
    {
        return $this->nomartiste;
    }

    public function setNomartiste(string $nomartiste): self
    {
        $this->nomartiste = $nomartiste;

        return $this;
    }

    public function getTitreoffre(): ?string
    {
        return $this->titreoffre;
    }

    public function setTitreoffre(string $titreoffre): self
    {
        $this->titreoffre = $titreoffre;

        return $this;
    }

    public function getDatepostuler(): ?\DateTimeInterface
    {
        return $this->datepostuler;
    }

    public function setDatepostuler(\DateTimeInterface $datepostuler): self
    {
        $this->datepostuler = $datepostuler;

        return $this;
    }

    public function getIdoffre(): ?offretravail
    {
        return $this->idoffre;
    }

    public function setIdoffre(?offretravail $idoffre): self
    {
        $this->idoffre = $idoffre;

        return $this;
    }
}
