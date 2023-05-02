<?php

namespace App\Entity;

use App\Repository\PostLikeRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PostLikeRepository::class)]
class PostLike
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_like = null;

    #[ORM\ManyToOne(inversedBy: 'postLikes')]
    #[ORM\JoinColumn(name:'id_post',referencedColumnName:'id_post',nullable: false)]
    private ?Post $id_post = null;

    #[ORM\ManyToOne(inversedBy: 'postLikes')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $id_user = null;

    public function getId(): ?int
    {
        return $this->id_like;
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
    
}
