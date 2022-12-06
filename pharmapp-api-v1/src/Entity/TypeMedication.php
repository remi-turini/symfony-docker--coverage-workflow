<?php

namespace App\Entity;

use App\Repository\TypeMedicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeMedicationRepository::class)]
class TypeMedication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\ManyToMany(targetEntity: Medication::class, inversedBy: 'typeMedications')]
    private $medication;

    public function __construct()
    {
        $this->medication = new ArrayCollection();
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

    /**
     * @return Collection<int, Medication>
     */
    public function getMedication(): Collection
    {
        return $this->medication;
    }

    public function addMedication(Medication $medication): self
    {
        if (!$this->medication->contains($medication)) {
            $this->medication[] = $medication;
        }

        return $this;
    }

    public function removeMedication(Medication $medication): self
    {
        $this->medication->removeElement($medication);

        return $this;
    }
}
