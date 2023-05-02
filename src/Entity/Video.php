<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("videos")]
    private ?int $id_video = null;

    #[ORM\ManyToOne( targetEntity: Tutoriel::class )]
    #[ORM\JoinColumn(name:'id_tutoriel',referencedColumnName:'id_tutoriel' ,nullable: false)]
    private ?Tutoriel $id_tutoriel = null;

    #[ORM\Column(length: 255)]
    #[Groups("videos")]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("videos")]
    private ?\DateTimeInterface $date_p = null;

    #[Assert\Length(
        min: 8,
        minMessage: 'Your Description must be at least {{ limit }} characters long',
    )]
    #[ORM\Column(length: 255)]
    #[Groups("videos")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Groups("videos")]
    private ?string $pathvideo = null;

    #[ORM\Column(length: 255)]
    #[Groups("videos")]
    private ?string $pathimage = null;

    #[ORM\OneToMany(mappedBy: 'id_video', targetEntity: View::class)]
    private Collection $Views;

    public function __construct()
    {
        $this->Views = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_video;
    }

    public function getIdVideo(): ?int
    {
        return $this->id_video;
    }

    public function setIdVideo(int $id_video): self
    {
        $this->id_video = $id_video;

        return $this;
    }

    public function getIdTutoriel(): ?Tutoriel
    {
        return $this->id_tutoriel;
    }

    public function setIdTutoriel(?Tutoriel $id_tutoriel): self
    {
        $this->id_tutoriel = $id_tutoriel;

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

    public function getDateP(): ?\DateTimeInterface
    {
        return $this->date_p;
    }

    public function setDateP(\DateTimeInterface $date_p): self
    {
        $this->date_p = $date_p;

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

    public function getPathvideo(): ?string
    {
        return $this->pathvideo;
    }

    public function setPathvideo(string $pathvideo): self
    {
        $this->pathvideo = $pathvideo;

        return $this;
    }

    public function getPathimage(): ?string
    {
        return $this->pathimage;
    }

    public function setPathimage(string $pathimage): self
    {
        $this->pathimage = $pathimage;

        return $this;
    }

    /**
     * @return Collection<int, View>
     */
    public function getViews(): Collection
    {
        return $this->Views;
    }

    public function addView(View $view): self
    {
        if (!$this->Views->contains($view)) {
            $this->Views->add($view);
            $view->setVideo($this);
        }

        return $this;
    }

    public function removeView(View $view): self
    {
        if ($this->Views->removeElement($view)) {
            // set the owning side to null (unless already changed)
            if ($view->getVideo() === $this) {
                $view->setVideo(null);
            }
        }

        return $this;
    }
}
