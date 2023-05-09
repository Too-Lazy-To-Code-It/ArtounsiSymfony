<?php

namespace App\Entity;
use App\Repository\LignepanierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: LignepanierRepository::class)]
class Lignepanier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("lignepaniers")]
    private ?int $idlignepanier = null;

    #[ORM\ManyToOne(inversedBy: 'lignepaniers')]
    #[ORM\JoinColumn(name:'idpanier',referencedColumnName:'idpanier',nullable: false)]
    #[Groups("lignepaniers")]
    private ?Panier $idpanier = null;

    #[ORM\ManyToOne(inversedBy: 'lignepaniers')]
    #[ORM\JoinColumn(name:'idproduit',referencedColumnName:'idproduit',nullable: false)]
    #[Groups("lignepaniers")]
    private ?Produits $idproduit = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("lignepaniers")]
    private ?\DateTimeInterface $dateajout = null;

    public function getidlignepanier(): ?int
    {
        return $this->idlignepanier;
    }

    public function getIdpanier(): ?Panier
    {
        return $this->idpanier;
    }

    public function setIdpanier(?Panier $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
    }

    public function getIdproduit(): ?Produits
    {
        return $this->idproduit;
    }

    public function setIdproduit(?Produits $idproduit): self
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
    }
}
