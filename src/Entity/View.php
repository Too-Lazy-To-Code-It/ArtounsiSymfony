<?php

namespace App\Entity;

use App\Repository\ViewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ViewRepository::class)]
class View
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_view = null;

    #[ORM\ManyToOne(inversedBy: 'views')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?allusers $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'views')]
    #[ORM\JoinColumn(name:'id_video',referencedColumnName:'id_video',nullable: false)]

    private ?video $id_video = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_v = null;

    public function getId(): ?int
    {
        return $this->id_view;
    }

    public function getIdUser(): ?allusers
    {
        return $this->id_user;
    }

    public function setIdUser(?allusers $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdVideo(): ?video
    {
        return $this->id_video;
    }

    public function setIdVideo(?video $id_video): self
    {
        $this->id_video = $id_video;

        return $this;
    }

    public function getDateV(): ?\DateTimeInterface
    {
        return $this->date_v;
    }

    public function setDateV(\DateTimeInterface $date_v): self
    {
        $this->date_v = $date_v;

        return $this;
    }
}
