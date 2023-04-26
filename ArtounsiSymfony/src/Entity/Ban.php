<?php

namespace App\Entity;

use App\Repository\BanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BanRepository::class)]
class Ban
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'test')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user' ,nullable: false)]
    private ?Allusers $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $Reason = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateB = null;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getReason(): ?string
    {
        return $this->Reason;
    }

    public function setReason(string $Reason): self
    {
        $this->Reason = $Reason;

        return $this;
    }

    public function getDateB(): ?\DateTimeInterface
    {
        return $this->DateB;
    }

    public function setDateB(\DateTimeInterface $DateB): self
    {
        $this->DateB = $DateB;

        return $this;
    }


}
