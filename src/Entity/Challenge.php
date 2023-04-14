<?php

namespace App\Entity;

use App\Repository\ChallengeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChallengeRepository::class)]
class Challenge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_challenge = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_c = null;

    #[ORM\Column(length: 255)]
    private ?string $pathimg = null;

    #[ORM\Column]
    private ?int $niveau = null;

    #[ORM\ManyToOne(inversedBy: 'challenges')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?Category $id_categorie = null;

    #[ORM\ManyToOne(inversedBy: 'challenges')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
    private ?Allusers $id_artist = null;

    #[ORM\OneToMany(mappedBy: 'challenge_id', targetEntity: Rating::class)]
    private Collection $ratings;

    #[ORM\OneToMany(mappedBy: 'id_challenge', targetEntity: Participation::class)]
    private Collection $participations;

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_challenge;
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

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->date_c;
    }

    public function setDateC(\DateTimeInterface $date_c): self
    {
        $this->date_c = $date_c;

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

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getIdCategorie(): ?Category
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?Category $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getIdArtist(): ?Allusers
    {
        return $this->id_artist;
    }

    public function setIdArtist(?Allusers $id_artist): self
    {
        $this->id_artist = $id_artist;

        return $this;
    }

    /**
     * @return Collection<int, Rating>
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings->add($rating);
            $rating->setChallengeId($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getChallengeId() === $this) {
                $rating->setChallengeId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setIdChallenge($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getIdChallenge() === $this) {
                $participation->setIdChallenge(null);
            }
        }

        return $this;
    }
}
