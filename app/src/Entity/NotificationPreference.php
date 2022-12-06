<?php

namespace App\Entity;

use App\Repository\NotificationPreferenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationPreferenceRepository::class)]
class NotificationPreference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $emailValidation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $notificationValidation;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $updatedAt;

    #[ORM\OneToOne(mappedBy: 'notificationPreference', targetEntity: User::class, cascade: ['persist', 'remove'])]
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailValidation(): ?string
    {
        return $this->emailValidation;
    }

    public function setEmailValidation(?string $emailValidation): self
    {
        $this->emailValidation = $emailValidation;

        return $this;
    }

    public function getNotificationValidation(): ?string
    {
        return $this->notificationValidation;
    }

    public function setNotificationValidation(?string $notificationValidation): self
    {
        $this->notificationValidation = $notificationValidation;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setNotificationPreference(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getNotificationPreference() !== $this) {
            $user->setNotificationPreference($this);
        }

        $this->user = $user;

        return $this;
    }
}
