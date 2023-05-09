<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Category;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;



date_default_timezone_set('Africa/Tunis');


#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("post")]
    private ?int $id_post = null;

    

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(name:'id_user',referencedColumnName:'id_user',nullable: false)]
    private ?Allusers $id_user = null;

    

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(name:'id_category',referencedColumnName:'id_category' ,nullable: false)]
    private ?category $id_category = null;

    #[Assert\Length(min:2,minMessage:"Le titre doit dépasser 2 caractéres")]
    #[ORM\Column(length: 255)]
    #[Groups("post")]
    private ?string $description_p = null;

    #[ORM\Column(length: 255)]
    #[Groups("post")]
    private ?string $media = null;

    #[ORM\Column(length: 255)]
    #[Groups("post")]
    private ?string $title_p = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("post")]
    private ?\DateTimeInterface $date_p = null;

    #[ORM\Column(length: 255)]
    #[Groups("post")]
    private ?string $post_type = null;

    #[ORM\OneToMany(mappedBy: 'id_post', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: 'id_post', targetEntity: PostLike::class)]
    private Collection $postLikes;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->postLikes = new ArrayCollection();

        $this->date_p = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id_post;
    }

    public function getIdUser(): ?Allusers
    {
        return $this->id_user;
    }
    public function getUserName(): ?string
{
    return $this->id_user ? $this->id_user->getName() : null;
}

    public function setIdUser(?Allusers $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdCategoryName(): ?string
    {
        return $this->id_category ? $this->id_category->getNameCategory() : null;
    }
    public function getIdCategory(): ?category
    {
        return $this->id_category;
    }

    public function setIdCategory(?category $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }

    public function getDescriptionP(): ?string
    {
        return $this->description_p;
    }

    public function setDescriptionP(string $description_p): self
    {
        $this->description_p = $description_p;

        return $this;
    }


    public function getMedia(): ?string
    {
        $media = $this->media;
        if (!$media) {
            return null;
        }
        return 'http://localhost/img/' . $media;
    }

    
   // TO put the media in this path "C:\xampp\htdocs\img"
    public function setMedia(UploadedFile $media): self
    {
        $extension = $media->getClientOriginalExtension();
        $newFileName = uniqid().'.'.$extension;
        $media->move('C:\xampp\htdocs\img', $newFileName);
        $this->media = $newFileName;

        return $this;
    }

    public function getTitleP(): ?string
    {
        return $this->title_p;
    }

    public function setTitleP(string $title_p): self
    {
        $this->title_p = $title_p;

        return $this;
    }

    public function getDateP(): ?\DateTimeInterface
    {
        return $this->date_p;
    }

    // public function setDateP(\DateTimeInterface $date_p): self
    // {
    //     $this->date_p = $date_p;

    //     return $this;
    // }
    public function setDateP(\DateTimeInterface $date_p = null): self
{
    
    if (!$date_p) {
        $date_p = new \DateTime('now', new \DateTimeZone('Africa/Tunis'));
    }
    $this->date_p = $date_p;
    return $this;
}


    public function getPostType(): ?string
    {
        return $this->post_type;
    }

    public function setPostType(string $post_type): self
    {
        $this->post_type = $post_type;

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setIdPost($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getIdPost() === $this) {
                $comment->setIdPost(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PostLike>
     */
    public function getPostLikes(): Collection
    {
        return $this->postLikes;
    }

    public function addPostLike(PostLike $postLike): self
    {
        if (!$this->postLikes->contains($postLike)) {
            $this->postLikes->add($postLike);
            $postLike->setIdPost($this);
        }

        return $this;
    }

    public function removePostLike(PostLike $postLike): self
    {
        if ($this->postLikes->removeElement($postLike)) {
            // set the owning side to null (unless already changed)
            if ($postLike->getIdPost() === $this) {
                $postLike->setIdPost(null);
            }
        }

        return $this;
    }



    public function getIdPost(): ?int
{
    return $this->id_post;
}
public function __toString(): string
    {
        return $this->getIdPost();
    }

}
