<?php

namespace App\Entity;

use App\Repository\LignepanierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LignepanierRepository::class)]
class Lignepanier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idlignepanier = null;

    #[ORM\ManyToOne(inversedBy: 'lignepaniers')]
    #[ORM\JoinColumn(name:'idpanier',referencedColumnName:'idpanier',nullable: false)]
    private ?panier $idpanier = null;

    #[ORM\ManyToOne(inversedBy: 'lignepaniers')]
    #[ORM\JoinColumn(name:'idproduit',referencedColumnName:'idproduit',nullable: false)]
    private ?produits $idproduit = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateajout = null;

    public function getId(): ?int
    {
        return $this->idlignepanier;
    }

    public function getIdpanier(): ?panier
    {
        return $this->idpanier;
    }

    public function setIdpanier(?panier $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
    }

    public function getIdproduit(): ?produits
    {
        return $this->idproduit;
    }

    public function setIdproduit(?produits $idproduit): self
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
