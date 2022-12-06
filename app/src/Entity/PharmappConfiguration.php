<?php

namespace App\Entity;

use App\Repository\PharmappConfigurationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PharmappConfigurationRepository::class)]
class PharmappConfiguration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $keyName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKeyName(): ?string
    {
        return $this->keyName;
    }

    public function setKeyName(?string $keyName): self
    {
        $this->keyName = $keyName;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
