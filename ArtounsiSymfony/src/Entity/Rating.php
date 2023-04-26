<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_rating = null;

    #[ORM\Column]
    private ?int $rating = null;

    #[ORM\ManyToOne(inversedBy: 'ratings')]
    #[ORM\JoinColumn(name:'challenge_id',referencedColumnName:'id_challenge',nullable: false)]

    private ?challenge $challenge_id = null;

    #[ORM\ManyToOne(inversedBy: 'ratings')]
    #[ORM\JoinColumn(name:'participator_id',referencedColumnName:'id_user',nullable: false)]

    private ?allusers $participator_id = null;

    #[ORM\ManyToOne(inversedBy: 'ratings')]
    #[ORM\JoinColumn(name:'rater_id',referencedColumnName:'id_user',nullable: false)]

    private ?allusers $rater_id = null;

    public function getId(): ?int
    {
        return $this->id_rating;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getChallengeId(): ?challenge
    {
        return $this->challenge_id;
    }

    public function setChallengeId(?challenge $challenge_id): self
    {
        $this->challenge_id = $challenge_id;

        return $this;
    }

    public function getParticipatorId(): ?allusers
    {
        return $this->participator_id;
    }

    public function setParticipatorId(?allusers $participator_id): self
    {
        $this->participator_id = $participator_id;

        return $this;
    }

    public function getRaterId(): ?allusers
    {
        return $this->rater_id;
    }

    public function setRaterId(?allusers $rater_id): self
    {
        $this->rater_id = $rater_id;

        return $this;
    }
}
