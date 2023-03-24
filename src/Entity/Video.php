<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_video = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_p = null;

    #[ORM\ManyToOne(inversedBy: 'videos')]
    #[ORM\JoinColumn(name:'id_tutoriel',referencedColumnName:'id_tutoriel',nullable: false)]

    private ?tutoriel $id_tutoriel = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $pathvideo = null;

    #[ORM\Column(length: 255)]
    private ?string $pathimage = null;

    #[ORM\OneToMany(mappedBy: 'id_video', targetEntity: View::class)]
    private Collection $views;

    public function __construct()
    {
        $this->views = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_video;
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

    public function getIdTutoriel(): ?tutoriel
    {
        return $this->id_tutoriel;
    }

    public function setIdTutoriel(?tutoriel $id_tutoriel): self
    {
        $this->id_tutoriel = $id_tutoriel;

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
        return $this->views;
    }

    public function addView(View $view): self
    {
        if (!$this->views->contains($view)) {
            $this->views->add($view);
            $view->setIdVideo($this);
        }

        return $this;
    }

    public function removeView(View $view): self
    {
        if ($this->views->removeElement($view)) {
            // set the owning side to null (unless already changed)
            if ($view->getIdVideo() === $this) {
                $view->setIdVideo(null);
            }
        }

        return $this;
    }
}
