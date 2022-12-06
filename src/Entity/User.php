<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json', nullable: true)]
    private $roles = [];

    #[ORM\Column(type: 'string', nullable: true)]
    private $password;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $lastname;

    #[ORM\OneToOne(inversedBy: 'user', targetEntity: GoogleAuth::class, cascade: ['persist', 'remove'])]
    private $googleAuth;

    #[ORM\OneToOne(inversedBy: 'user', targetEntity: NotificationPreference::class, cascade: ['persist', 'remove'])]
    private $notificationPreference;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: MedicationUser::class), Ignore()]
    private $medicationUsers;

    public function __construct()
    {
        $this->medicationUsers = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getGoogleAuth(): ?GoogleAuth
    {
        return $this->googleAuth;
    }

    public function setGoogleAuth(?GoogleAuth $googleAuth): self
    {
        $this->googleAuth = $googleAuth;

        return $this;
    }

    public function getNotificationPreference(): ?NotificationPreference
    {
        return $this->notificationPreference;
    }

    public function setNotificationPreference(?NotificationPreference $notificationPreference): self
    {
        $this->notificationPreference = $notificationPreference;

        return $this;
    }

    /**
     * @return Collection<int, MedicationUser>
     */
    public function getMedicationUsers(): Collection
    {
        return $this->medicationUsers;
    }

    public function addMedicationUser(MedicationUser $medicationUser): self
    {
        if (!$this->medicationUsers->contains($medicationUser)) {
            $this->medicationUsers[] = $medicationUser;
            $medicationUser->setUser($this);
        }

        return $this;
    }

    public function removeMedicationUser(MedicationUser $medicationUser): self
    {
        if ($this->medicationUsers->removeElement($medicationUser)) {
            // set the owning side to null (unless already changed)
            if ($medicationUser->getUser() === $this) {
                $medicationUser->setUser(null);
            }
        }

        return $this;
    }
}
