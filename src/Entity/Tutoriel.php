<?php

namespace App\Entity;

use App\Repository\TutorielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[Assert\Cascade]
#[ORM\Entity(repositoryClass: TutorielRepository::class)]
class Tutoriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("tutoriels")]
    private ?int $id_tutoriel;


    #[ORM\ManyToOne( targetEntity: Category::class )]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?Category $id_categorie = null;

    #[ORM\ManyToOne( targetEntity: Allusers::class )]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
    private ?Allusers $id_artist = null;

    #[ORM\Column(length: 255)]
    #[Groups("tutoriels")]
    private ?string $pathimg = null;

    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'Your Title must be at least {{ limit }} characters long',
        maxMessage: 'Your Title cannot be longer than {{ limit }} characters',
    )]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    #[Groups("tutoriels")]
    private ?string $title = null;

    #[Assert\Length(
        min: 8,
        minMessage: 'Your Description must be at least {{ limit }} characters long',
    )]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    #[Groups("tutoriels")]
    private ?string $description = null;

    #[Assert\NotNull]
    #[Assert\NotBlank]
    #[ORM\Column]
    #[Groups("tutoriels")]
    private ?int $niveau = null;

    #[ORM\OneToMany(mappedBy: 'id_tutoriel', targetEntity: Video::class)]
    private Collection $videos;

    #[ORM\OneToMany(mappedBy: 'tutorielId', targetEntity: RatingTutoriel::class)]
    private Collection $ratingTutoriels;

    public function __construct()
    {
        $this->ratingTutoriels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_tutoriel;
    }

    public function getIdTutoriel(): ?int
    {
        return $this->id_tutoriel;
    }

    public function setIdTutoriel(int $id_tutoriel): self
    {
        $this->id_tutoriel = $id_tutoriel;

        return $this;
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

    public function addIdArtist(Allusers $idArtist): self
    {
        if (!$this->id_artist->contains($idArtist)) {
            $this->id_artist->add($idArtist);
            $idArtist->setTutoriel($this);
        }

        return $this;
    }

    public function removeIdArtist(Allusers $idArtist): self
    {
        if ($this->id_artist->removeElement($idArtist)) {
            // set the owning side to null (unless already changed)
            if ($idArtist->getTutoriel() === $this) {
                $idArtist->setTutoriel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RatingTutoriel>
     */
    public function getRatingTutoriels(): Collection
    {
        return $this->ratingTutoriels;
    }

    public function addRatingTutoriel(RatingTutoriel $ratingTutoriel): self
    {
        if (!$this->ratingTutoriels->contains($ratingTutoriel)) {
            $this->ratingTutoriels->add($ratingTutoriel);
            $ratingTutoriel->setTutorielId($this);
        }

        return $this;
    }

    public function removeRatingTutoriel(RatingTutoriel $ratingTutoriel): self
    {
        if ($this->ratingTutoriels->removeElement($ratingTutoriel)) {
            // set the owning side to null (unless already changed)
            if ($ratingTutoriel->getTutorielId() === $this) {
                $ratingTutoriel->setTutorielId(null);
            }
        }

        return $this;
    }
}
