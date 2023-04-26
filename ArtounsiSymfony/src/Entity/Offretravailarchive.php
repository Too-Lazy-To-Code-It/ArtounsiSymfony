<?php

namespace App\Entity;

use App\Repository\OffretravailarchiveRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffretravailarchiveRepository::class)]
class Offretravailarchive
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idoffre = null;

    #[ORM\ManyToOne(inversedBy: 'offretravailarchives')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
  
    private ?Allusers $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $titreoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $nickname = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateajoutoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $typeoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $localisationoffre = null;

    #[ORM\ManyToOne(inversedBy: 'offretravailarchives')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?Category $idcategorie = null;

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
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

    public function getTitreoffre(): ?string
    {
        return $this->titreoffre;
    }

    public function setTitreoffre(string $titreoffre): self
    {
        $this->titreoffre = $titreoffre;

        return $this;
    }

    public function getDescriptionoffre(): ?string
    {
        return $this->descriptionoffre;
    }

    public function setDescriptionoffre(string $descriptionoffre): self
    {
        $this->descriptionoffre = $descriptionoffre;

        return $this;
    }

    public function getCategorieoffre(): ?string
    {
        return $this->categorieoffre;
    }

    public function setCategorieoffre(string $categorieoffre): self
    {
        $this->categorieoffre = $categorieoffre;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getDateajoutoffre(): ?\DateTimeInterface
    {
        return $this->dateajoutoffre;
    }

    public function setDateajoutoffre(\DateTimeInterface $dateajoutoffre): self
    {
        $this->dateajoutoffre = $dateajoutoffre;

        return $this;
    }

    public function getTypeoffre(): ?string
    {
        return $this->typeoffre;
    }

    public function setTypeoffre(string $typeoffre): self
    {
        $this->typeoffre = $typeoffre;

        return $this;
    }

    public function getLocalisationoffre(): ?string
    {
        return $this->localisationoffre;
    }

    public function setLocalisationoffre(string $localisationoffre): self
    {
        $this->localisationoffre = $localisationoffre;

        return $this;
    }

    public function getIdcategorie(): ?Category
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(?Category $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }
}
