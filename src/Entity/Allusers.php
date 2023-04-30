<?php

namespace App\Entity;

use App\Repository\AllusersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use symfony\Component\Serializer\Normalizer\NormalizerInterface;


#[ORM\Entity(repositoryClass: AllusersRepository::class)]
class Allusers implements UserInterface
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("allusers")]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Assert\Length(min:4, minMessage:"entrer un titre valide avec minimum 3 caracteres")]
    #[Groups("allusers")]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Ban::class, orphanRemoval: true)]
    private Collection $test;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $Last_Name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Assert\Email(message: "not valid email type")]
    #[Groups("allusers")]
    private ?string $Email = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?\DateTimeInterface $Birthday = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Assert\UserPassword(message: "not valid password type")]
    #[Groups("allusers")]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Groups("allusers")]
    private ?string $salt = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $nationality = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $nickname = null;

    #[ORM\Column(length: 255)]
    #[Groups("allusers")]
    private ?string $avatar = null;

    #[ORM\Column(length: 255)]
    #[Groups("allusers")]
    private ?string $background = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "can't be empty")]
    #[Groups("allusers")]
    private ?string $bio = null;



    /**
     * @return bool|null
     */
    public function getVerified(): ?bool
    {
        return $this->Verified;
    }

    /**
     * @param bool|null $Verified
     */
    public function setVerified(?bool $Verified): void
    {
        $this->Verified = $Verified;
    }

    /**
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->VerificationCode;
    }

    /**
     * @param string|null $VerificationCode
     */
    public function setVerificationCode(?string $VerificationCode): void
    {
        $this->VerificationCode = $VerificationCode;
    }

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Demandetravail::class)]
    private Collection $demandetravails;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Artistepostuler::class)]
    private Collection $artistepostulers;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Offretravail::class)]
    private Collection $offretravails;

    #[ORM\OneToMany(mappedBy: 'id_artist', targetEntity: Challenge::class)]
    private Collection $challenges;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Post::class)]
    private Collection $posts;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: PostLike::class)]
    private Collection $postLikes;

    #[ORM\OneToMany(mappedBy: 'id_artist', targetEntity: Tutoriel::class)]
    private Collection $tutoriels;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: View::class)]
    private Collection $views;

    #[ORM\OneToMany(mappedBy: 'participator_id', targetEntity: Rating::class)]
    private Collection $ratings;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Participation::class)]
    private Collection $participations;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: FavorisTuroial::class)]
    private Collection $favorisTuroials;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Offretravailarchive::class)]
    private Collection $offretravailarchives;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Panier::class)]
    private Collection $paniers;

    #[ORM\OneToMany(mappedBy: 'id_user', targetEntity: Produits::class)]
    private Collection $produits;

    #[ORM\Column(length: 255)]
    private ?string $number = null;

    #[ORM\Column]
    private ?bool $_2fa = null;

    public function __toString(): string
    {
        return $this->nickname;
    }


    public function __construct()
    {
        $this->test = new ArrayCollection();
        $this->demandetravails = new ArrayCollection();
        $this->artistepostulers = new ArrayCollection();
        $this->offretravails = new ArrayCollection();
        $this->challenges = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->postLikes = new ArrayCollection();
        $this->tutoriels = new ArrayCollection();
        $this->views = new ArrayCollection();
        $this->ratings = new ArrayCollection();
        $this->participations = new ArrayCollection();
        $this->favorisTuroials = new ArrayCollection();
        $this->offretravailarchives = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->produits = new ArrayCollection();


    }

    public function getid_user(): ?int
    {
        return $this->id_user;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Ban>
     */
    public function getTest(): Collection
    {
        return $this->test;
    }

    public function addTest(Ban $test): self
    {
        if (!$this->test->contains($test)) {
            $this->test->add($test);
            $test->setIdUser($this);
        }

        return $this;
    }

    public function removeTest(Ban $test): self
    {
        if ($this->test->removeElement($test)) {
            // set the owning side to null (unless already changed)
            if ($test->getIdUser() === $this) {
                $test->setIdUser(null);
            }
        }

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_Name;
    }

    public function setLastName(string $Last_Name): self
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->Birthday;
    }

    public function setBirthday(\DateTimeInterface $Birthday): self
    {
        $this->Birthday = $Birthday;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

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

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }


    public function getRoles(): array
    {
        return [$this->type];
    }


    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function checkCredentials(string $password): bool
    {
        if (!password_verify($password, $this->getPassword())) {
            throw new BadCredentialsException('Invalid credentials');
        }

        return true;
    }


    public function getUsername(): ?string
    {
        return $this->Email;
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }


    /**
     * @return Collection<int, Demandetravail>
     */
    public function getDemandetravails(): Collection
    {
        return $this->demandetravails;
    }

    public function addDemandetravail(Demandetravail $demandetravail): self
    {
        if (!$this->demandetravails->contains($demandetravail)) {
            $this->demandetravails->add($demandetravail);
            $demandetravail->setIdUser($this);
        }

        return $this;
    }

    public function removeDemandetravail(Demandetravail $demandetravail): self
    {
        if ($this->demandetravails->removeElement($demandetravail)) {
            // set the owning side to null (unless already changed)
            if ($demandetravail->getIdUser() === $this) {
                $demandetravail->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Artistepostuler>
     */
    public function getArtistepostulers(): Collection
    {
        return $this->artistepostulers;
    }

    public function addArtistepostuler(Artistepostuler $artistepostuler): self
    {
        if (!$this->artistepostulers->contains($artistepostuler)) {
            $this->artistepostulers->add($artistepostuler);
            $artistepostuler->setIdUser($this);
        }

        return $this;
    }

    public function removeArtistepostuler(Artistepostuler $artistepostuler): self
    {
        if ($this->artistepostulers->removeElement($artistepostuler)) {
            // set the owning side to null (unless already changed)
            if ($artistepostuler->getIdUser() === $this) {
                $artistepostuler->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Offretravail>
     */
    public function getOffretravails(): Collection
    {
        return $this->offretravails;
    }

    public function addOffretravail(Offretravail $offretravail): self
    {
        if (!$this->offretravails->contains($offretravail)) {
            $this->offretravails->add($offretravail);
            $offretravail->setIdUser($this);
        }

        return $this;
    }

    public function removeOffretravail(Offretravail $offretravail): self
    {
        if ($this->offretravails->removeElement($offretravail)) {
            // set the owning side to null (unless already changed)
            if ($offretravail->getIdUser() === $this) {
                $offretravail->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Challenge>
     */
    public function getChallenges(): Collection
    {
        return $this->challenges;
    }

    public function addChallenge(Challenge $challenge): self
    {
        if (!$this->challenges->contains($challenge)) {
            $this->challenges->add($challenge);
            $challenge->setIdArtist($this);
        }

        return $this;
    }

    public function removeChallenge(Challenge $challenge): self
    {
        if ($this->challenges->removeElement($challenge)) {
            // set the owning side to null (unless already changed)
            if ($challenge->getIdArtist() === $this) {
                $challenge->setIdArtist(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setIdUser($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getIdUser() === $this) {
                $post->setIdUser(null);
            }
        }

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
            $comment->setIdUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getIdUser() === $this) {
                $comment->setIdUser(null);
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
            $postLike->setIdUser($this);
        }

        return $this;
    }

    public function removePostLike(PostLike $postLike): self
    {
        if ($this->postLikes->removeElement($postLike)) {
            // set the owning side to null (unless already changed)
            if ($postLike->getIdUser() === $this) {
                $postLike->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tutoriel>
     */
    public function getTutoriels(): Collection
    {
        return $this->tutoriels;
    }

    public function addTutoriel(Tutoriel $tutoriel): self
    {
        if (!$this->tutoriels->contains($tutoriel)) {
            $this->tutoriels->add($tutoriel);
            $tutoriel->setIdArtist($this);
        }

        return $this;
    }

    public function removeTutoriel(Tutoriel $tutoriel): self
    {
        if ($this->tutoriels->removeElement($tutoriel)) {
            // set the owning side to null (unless already changed)
            if ($tutoriel->getIdArtist() === $this) {
                $tutoriel->setIdArtist(null);
            }
        }

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
            $view->setIdUser($this);
        }

        return $this;
    }

    public function removeView(View $view): self
    {
        if ($this->views->removeElement($view)) {
            // set the owning side to null (unless already changed)
            if ($view->getIdUser() === $this) {
                $view->setIdUser(null);
            }
        }

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
            $rating->setParticipatorId($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getParticipatorId() === $this) {
                $rating->setParticipatorId(null);
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
            $participation->setIdUser($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getIdUser() === $this) {
                $participation->setIdUser(null);
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
            $favorisTuroial->setIdUser($this);
        }

        return $this;
    }

    public function removeFavorisTuroial(FavorisTuroial $favorisTuroial): self
    {
        if ($this->favorisTuroials->removeElement($favorisTuroial)) {
            // set the owning side to null (unless already changed)
            if ($favorisTuroial->getIdUser() === $this) {
                $favorisTuroial->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Offretravailarchive>
     */
    public function getOffretravailarchives(): Collection
    {
        return $this->offretravailarchives;
    }

    public function addOffretravailarchive(Offretravailarchive $offretravailarchive): self
    {
        if (!$this->offretravailarchives->contains($offretravailarchive)) {
            $this->offretravailarchives->add($offretravailarchive);
            $offretravailarchive->setIdUser($this);
        }

        return $this;
    }

    public function removeOffretravailarchive(Offretravailarchive $offretravailarchive): self
    {
        if ($this->offretravailarchives->removeElement($offretravailarchive)) {
            // set the owning side to null (unless already changed)
            if ($offretravailarchive->getIdUser() === $this) {
                $offretravailarchive->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Panier>
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers->add($panier);
            $panier->setIdUser($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getIdUser() === $this) {
                $panier->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Produits>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setIdUser($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getIdUser() === $this) {
                $produit->setIdUser(null);
            }
        }

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function is2fa(): ?bool
    {
        return $this->_2fa;
    }

    public function set2fa(bool $_2fa): self
    {
        $this->_2fa = $_2fa;

        return $this;
    }


}
