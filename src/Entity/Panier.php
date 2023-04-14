<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idpanier = null;

    #[ORM\ManyToOne(inversedBy: 'paniers')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $id_user = null;

    #[ORM\Column(length: 255)]
    private ?int $nbr_produits = null;

    #[ORM\Column]
    private ?float $montant_total = null;

    #[ORM\OneToMany(mappedBy: 'idpanier', targetEntity: Lignepanier::class)]
    private Collection $lignepaniers;

    public function __construct()
    {
        $this->lignepaniers = new ArrayCollection();
    }

    public function getidpanier(): ?int
    {
        return $this->idpanier;
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

    public function getNbrProduits(): ?string
    {
        return $this->nbr_produits;
    }

    public function setNbrProduits(string $nbr_produits): self
    {
        $this->nbr_produits = $nbr_produits;

        return $this;
    }

    public function getMontantTotal(): ?float
    {
        return $this->montant_total;
    }

    public function setMontantTotal(float $montant_total): self
    {
        $this->montant_total = $montant_total;

        return $this;
    }

    /**
     * @return Collection<int, Lignepanier>
     */
    public function getLignepaniers(): Collection
    {
        return $this->lignepaniers;
    }

    public function addLignepanier(Lignepanier $lignepanier): self
    {
        if (!$this->lignepaniers->contains($lignepanier)) {
            $this->lignepaniers->add($lignepanier);
            $lignepanier->setIdpanier($this);
        }

        return $this;
    }

    public function removeLignepanier(Lignepanier $lignepanier): self
    {
        if ($this->lignepaniers->removeElement($lignepanier)) {
            // set the owning side to null (unless already changed)
            if ($lignepanier->getIdpanier() === $this) {
                $lignepanier->setIdpanier(null);
            }
        }

        return $this;
    }
}
