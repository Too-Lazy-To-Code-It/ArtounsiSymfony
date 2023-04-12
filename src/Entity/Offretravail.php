<?php

namespace App\Entity;

use App\Repository\OffretravailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: OffretravailRepository::class)]
class Offretravail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idoffre = null;

    #[ORM\ManyToOne(inversedBy: 'offretravails')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
    private ?Allusers $id_user = null;
   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"veuiller saisir le titre de l'offre")]
    #[Assert\Length(min:3, minMessage:"entrer un titre valide avec minimum 3 caracteres")]
    private ?string $titreoffre = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:15, minMessage:"entrer une description valide avec minimum 15caracteres")]

    #[Assert\NotBlank(message:"veuiller saisir la description de l'offre")]
    private ?string $descriptionoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $nickname = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateajoutoofre = null;

    #[ORM\Column(length: 255)]
    private ?string $typeoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $localisationoffre = null;

    #[ORM\ManyToOne(inversedBy: 'offretravails')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?Category $idcategorie = null;

    #[ORM\OneToMany(mappedBy: 'idoffre', targetEntity: Artistepostuler::class)]
    private Collection $artistepostulers;

    public function __construct()
    {
        $this->artistepostulers = new ArrayCollection();
    }

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

    public function getDateajoutoofre(): ?\DateTimeInterface
    {
        return $this->dateajoutoofre;
    }

    public function setDateajoutoofre(\DateTimeInterface $dateajoutoofre): self
    {
        $this->dateajoutoofre = $dateajoutoofre;

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

    /**
     * @return Collection<int, Artistepostuler>
     */
    public function getArtistepostulers(): Collection
    {
        return $this->artistepostulers;
    }

    public function addArtistepostuler(Artistepostuler $artistepostuler): self
    {
        if (!$this->artistepostulers->contains($artistepostuler)) {
            $this->artistepostulers->add($artistepostuler);
            $artistepostuler->setIdoffre($this);
        }

        return $this;
    }

    public function removeArtistepostuler(Artistepostuler $artistepostuler): self
    {
        if ($this->artistepostulers->removeElement($artistepostuler)) {
            // set the owning side to null (unless already changed)
            if ($artistepostuler->getIdoffre() === $this) {
                $artistepostuler->setIdoffre(null);
            }
        }

        return $this;
    }
}
