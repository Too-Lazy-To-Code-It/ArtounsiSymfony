<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("produits")]
    private ?int $idproduit = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    #[Groups("produits")]
    
    private ?Allusers $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category',nullable: false)]
    #[Assert\NotBlank(message:"Category is required")]
    #[Groups("produits")]
   
    private ?Category $idcategorie = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Name of product is required")]
    #[Groups("produits")]
 
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Description is required")]
    #[Groups("produits")]
   
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Groups("produits")]
    private ?string $image = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Price is required")]
    #[Groups("produits")]
   
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("produits")]
   
    private ?\DateTimeInterface $dateajout = null;

    #[ORM\OneToMany(mappedBy: 'idproduit', targetEntity: Lignepanier::class)]
    private Collection $lignepaniers;

    public function __construct()
    {
        $this->lignepaniers = new ArrayCollection();
    }

    public function getidproduit(): ?int
    {
        return $this->idproduit;
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

    public function getIdcategorie(): ?category
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(?category $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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
            $lignepanier->setIdproduit($this);
        }

        return $this;
    }

    public function removeLignepanier(Lignepanier $lignepanier): self
    {
        if ($this->lignepaniers->removeElement($lignepanier)) {
            // set the owning side to null (unless already changed)
            if ($lignepanier->getIdproduit() === $this) {
                $lignepanier->setIdproduit(null);
            }
        }

        return $this;
    }
}
