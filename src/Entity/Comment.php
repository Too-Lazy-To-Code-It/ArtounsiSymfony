<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_comment = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    #[ORM\JoinColumn(name:'id_post',referencedColumnName:'id_post',nullable: false)]
    private ?post $id_post = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?allusers $id_user = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_comment = null;

    #[ORM\Column(length: 255)]
    private ?string $comment = null;

    public function getId(): ?int
    {
        return $this->id_comment;
    }

    public function getIdPost(): ?post
    {
        return $this->id_post;
    }

    public function setIdPost(?post $id_post): self
    {
        $this->id_post = $id_post;

        return $this;
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

    public function getDateComment(): ?\DateTimeInterface
    {
        return $this->date_comment;
    }

    public function setDateComment(\DateTimeInterface $date_comment): self
    {
        $this->date_comment = $date_comment;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
