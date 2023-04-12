<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_category = null;

    #[ORM\Column(length: 255)]
    private ?string $name_category = null;

    #[ORM\OneToMany(mappedBy: 'idcategorie', targetEntity: Demandetravail::class)]
    private Collection $demandetravails;

    #[ORM\OneToMany(mappedBy: 'categoriedemande', targetEntity: Demandetravail::class)]
    private Collection $demandetravailsC;

    #[ORM\OneToMany(mappedBy: 'idcategorie', targetEntity: Offretravail::class)]
    private Collection $offretravails;

    #[ORM\OneToMany(mappedBy: 'id_categorie', targetEntity: Challenge::class)]
    private Collection $challenges;

    #[ORM\OneToMany(mappedBy: 'id_category', targetEntity: Post::class)]
    private Collection $posts;

    #[ORM\OneToMany(mappedBy: 'id_categorie', targetEntity: Tutoriel::class)]
    private Collection $tutoriels;

    #[ORM\OneToMany(mappedBy: 'idcategorie', targetEntity: Offretravailarchive::class)]
    private Collection $offretravailarchives;



    public function __construct()
    {
        $this->demandetravails = new ArrayCollection();
        $this->demandetravailsC = new ArrayCollection();
        $this->offretravails = new ArrayCollection();
        $this->challenges = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->tutoriels = new ArrayCollection();
        $this->offretravailarchives = new ArrayCollection();

    }

    public function getId_category(): ?int
    {
        return $this->id_category;
    }

    public function getNameCategory(): ?string
    {
        return $this->name_category;
    }

    public function setNameCategory(string $name_category): self
    {
        $this->name_category = $name_category;

        return $this;
    }

    /**
     * @return Collection<int, Demandetravail>
     */
    public function getDemandetravails(): Collection
    {
        return $this->demandetravails;
    }

    public function addDemandetravail(Demandetravail $demandetravail): self
    {
        if (!$this->demandetravails->contains($demandetravail)) {
            $this->demandetravails->add($demandetravail);
            $demandetravail->setIdcategorie($this);
        }

        return $this;
    }

    public function removeDemandetravail(Demandetravail $demandetravail): self
    {
        if ($this->demandetravails->removeElement($demandetravail)) {
            // set the owning side to null (unless already changed)
            if ($demandetravail->getIdcategorie() === $this) {
                $demandetravail->setIdcategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Demandetravail>
     */
    public function getDemandetravailsC(): Collection
    {
        return $this->demandetravailsC;
    }

    public function addDemandetravailsC(Demandetravail $demandetravailsC): self
    {
        if (!$this->demandetravailsC->contains($demandetravailsC)) {
            $this->demandetravailsC->add($demandetravailsC);
            $demandetravailsC->setCategoriedemande($this);
        }

        return $this;
    }

    public function removeDemandetravailsC(Demandetravail $demandetravailsC): self
    {
        if ($this->demandetravailsC->removeElement($demandetravailsC)) {
            // set the owning side to null (unless already changed)
            if ($demandetravailsC->getCategoriedemande() === $this) {
                $demandetravailsC->setCategoriedemande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Offretravail>
     */
    public function getOffretravails(): Collection
    {
        return $this->offretravails;
    }

    public function addOffretravail(Offretravail $offretravail): self
    {
        if (!$this->offretravails->contains($offretravail)) {
            $this->offretravails->add($offretravail);
            $offretravail->setIdcategorie($this);
        }

        return $this;
    }

    public function removeOffretravail(Offretravail $offretravail): self
    {
        if ($this->offretravails->removeElement($offretravail)) {
            // set the owning side to null (unless already changed)
            if ($offretravail->getIdcategorie() === $this) {
                $offretravail->setIdcategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Challenge>
     */
    public function getChallenges(): Collection
    {
        return $this->challenges;
    }

    public function addChallenge(Challenge $challenge): self
    {
        if (!$this->challenges->contains($challenge)) {
            $this->challenges->add($challenge);
            $challenge->setIdCategorie($this);
        }

        return $this;
    }

    public function removeChallenge(Challenge $challenge): self
    {
        if ($this->challenges->removeElement($challenge)) {
            // set the owning side to null (unless already changed)
            if ($challenge->getIdCategorie() === $this) {
                $challenge->setIdCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setIdCategory($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getIdCategory() === $this) {
                $post->setIdCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tutoriel>
     */
    public function getTutoriels(): Collection
    {
        return $this->tutoriels;
    }

    public function addTutoriel(Tutoriel $tutoriel): self
    {
        if (!$this->tutoriels->contains($tutoriel)) {
            $this->tutoriels->add($tutoriel);
            $tutoriel->setIdCategorie($this);
        }

        return $this;
    }

    public function removeTutoriel(Tutoriel $tutoriel): self
    {
        if ($this->tutoriels->removeElement($tutoriel)) {
            // set the owning side to null (unless already changed)
            if ($tutoriel->getIdCategorie() === $this) {
                $tutoriel->setIdCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Offretravailarchive>
     */
    public function getOffretravailarchives(): Collection
    {
        return $this->offretravailarchives;
    }

    public function addOffretravailarchive(Offretravailarchive $offretravailarchive): self
    {
        if (!$this->offretravailarchives->contains($offretravailarchive)) {
            $this->offretravailarchives->add($offretravailarchive);
            $offretravailarchive->setIdcategorie($this);
        }

        return $this;
    }

    public function removeOffretravailarchive(Offretravailarchive $offretravailarchive): self
    {
        if ($this->offretravailarchives->removeElement($offretravailarchive)) {
            // set the owning side to null (unless already changed)
            if ($offretravailarchive->getIdcategorie() === $this) {
                $offretravailarchive->setIdcategorie(null);
            }
        }

        return $this;
    }


}
