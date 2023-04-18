<?php

namespace App\Entity;

use App\Repository\TutorielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TutorielRepository::class)]
class Tutoriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_tutoriel = null;

    #[ORM\ManyToOne(inversedBy: 'tutoriels')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?allusers $id_artist = null;

    #[ORM\ManyToOne(inversedBy: 'tutoriels')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?category $id_categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $pathimg = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $niveau = null;

    #[ORM\OneToMany(mappedBy: 'id_tutoriel', targetEntity: Video::class)]
    private Collection $videos;

    #[ORM\OneToMany(mappedBy: 'id_tutoriel', targetEntity: FavorisTuroial::class)]
    private Collection $favorisTuroials;

    public function __construct()
    {
        $this->videos = new ArrayCollection();
        $this->favorisTuroials = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_tutoriel;
    }

    public function getIdArtist(): ?allusers
    {
        return $this->id_artist;
    }

    public function setIdArtist(?allusers $id_artist): self
    {
        $this->id_artist = $id_artist;

        return $this;
    }

    public function getIdCategorie(): ?category
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?category $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getPathimg(): ?string
    {
        return $this->pathimg;
    }

    public function setPathimg(string $pathimg): self
    {
        $this->pathimg = $pathimg;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * @return Collection<int, Video>
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos->add($video);
            $video->setIdTutoriel($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getIdTutoriel() === $this) {
                $video->setIdTutoriel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, FavorisTuroial>
     */
    public function getFavorisTuroials(): Collection
    {
        return $this->favorisTuroials;
    }

    public function addFavorisTuroial(FavorisTuroial $favorisTuroial): self
    {
        if (!$this->favorisTuroials->contains($favorisTuroial)) {
            $this->favorisTuroials->add($favorisTuroial);
            $favorisTuroial->setIdTutoriel($this);
        }

        return $this;
    }

    public function removeFavorisTuroial(FavorisTuroial $favorisTuroial): self
    {
        if ($this->favorisTuroials->removeElement($favorisTuroial)) {
            // set the owning side to null (unless already changed)
            if ($favorisTuroial->getIdTutoriel() === $this) {
                $favorisTuroial->setIdTutoriel(null);
            }
        }

        return $this;
    }
}
