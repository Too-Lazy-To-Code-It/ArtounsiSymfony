<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\DemandetravailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: DemandetravailRepository::class)]
class Demandetravail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("demandes")]
    public ?int $idDemande = null;

    #[ORM\ManyToOne(inversedBy: 'offretravails')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
    private ?Allusers $id_user = null;

    #[ORM\Column(length: 255)]
    #[Groups("demandes")]
    private ?string $nickname = null;

    #[ORM\Column(length: 255)]
    #[Groups("demandes")]
    #[Assert\NotBlank(message:"veuiller saisir le titre de la demande")]
    #[Assert\Length(min:4, minMessage:"entrer un titre valide avec minimum 3 caracteres")]
    private ?string $titreDemande = null;

    #[ORM\Column(length: 255)]
    #[Groups("demandes")]
    #[Assert\Length(min:15, minMessage:"entrer une description valide avec minimum 15caracteres")]
    #[Assert\NotBlank(message:"veuiller saisir la description de  la demande")]
    private ?string $descriptionDemande = null;

    #[ORM\ManyToOne(inversedBy: 'demandetravails')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?Category $idcategorie = null;

    #[ORM\Column(length: 255)]
    #[Groups("demandes")]
    #[Assert\NotBlank(message:"veuiller saisir votre cv avec format pdf")]
    private ?string $pdf = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("demandes")]
    private ?\DateTimeInterface $dateajoutdemande = null;

    #[ORM\Column(length: 255)]
    #[Groups("demandes")]
    private ?string $categoriedemande = null;

    public function getidemande(): ?int
    {
        return $this->idDemande;
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

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getTitreDemande(): ?string
    {
        return $this->titreDemande;
    }

    public function setTitreDemande(string $titreDemande): self
    {
        $this->titreDemande = $titreDemande;

        return $this;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): self
    {
        $this->descriptionDemande = $descriptionDemande;

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

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): self
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getDateajoutdemande(): ?\DateTimeInterface
    {
        return $this->dateajoutdemande;
    }

    public function setDateajoutdemande(\DateTimeInterface $dateajoutdemande): self
    {
        $this->dateajoutdemande = $dateajoutdemande;

        return $this;
    }

    public function getCategoriedemande(): ?string
    {
        return $this->categoriedemande;
    }

    public function setCategoriedemande(?string $categoriedemande): self
    {
        $this->categoriedemande = $categoriedemande;

        return $this;
    }


}