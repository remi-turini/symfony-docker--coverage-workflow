<?php

namespace App\Entity;

use App\Repository\MedicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: MedicationRepository::class)]
class Medication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $cip;

    #[ORM\OneToMany(mappedBy: 'medication', targetEntity: MedicationUser::class), Ignore()]
    private $medicationUsers;

    #[ORM\ManyToMany(targetEntity: TypeMedication::class, mappedBy: 'medication'), Ignore()]
    private $typeMedications;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $isRequest;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $obsolete;

    public function __construct()
    {
        $this->medicationUsers = new ArrayCollection();
        $this->typeMedications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCip(): ?string
    {
        return $this->cip;
    }

    public function setCip(?string $cip): self
    {
        $this->cip = $cip;

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
            $medicationUser->setMedication($this);
        }

        return $this;
    }

    public function removeMedicationUser(MedicationUser $medicationUser): self
    {
        if ($this->medicationUsers->removeElement($medicationUser)) {
            // set the owning side to null (unless already changed)
            if ($medicationUser->getMedication() === $this) {
                $medicationUser->setMedication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TypeMedication>
     */
    public function getTypeMedications(): Collection
    {
        return $this->typeMedications;
    }

    public function addTypeMedication(TypeMedication $typeMedication): self
    {
        if (!$this->typeMedications->contains($typeMedication)) {
            $this->typeMedications[] = $typeMedication;
            $typeMedication->addMedication($this);
        }

        return $this;
    }

    public function removeTypeMedication(TypeMedication $typeMedication): self
    {
        if ($this->typeMedications->removeElement($typeMedication)) {
            $typeMedication->removeMedication($this);
        }

        return $this;
    }

    public function getIsRequest(): ?bool
    {
        return $this->isRequest;
    }

    public function setIsRequest(?bool $isRequest): self
    {
        $this->isRequest = $isRequest;

        return $this;
    }

    public function getObsolete(): ?bool
    {
        return $this->obsolete;
    }

    public function setObsolete(?bool $obsolete): self
    {
        $this->obsolete = $obsolete;

        return $this;
    }
}
