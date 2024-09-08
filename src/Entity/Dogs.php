<?php

namespace App\Entity;

use App\Repository\DogRepository;
use App\Enum\Gender;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DogsRepository::class)]
class Dogs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(type: 'string', length: 25)]
    private ?Gender $gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birth_date = null;

    #[ORM\Column(length: 15)]
    private ?string $microchip_number = null;

    #[ORM\Column(length: 11)]
    private ?string $registration_number = null;

    #[ORM\Column]
    private ?bool $available = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

##------------------------= ID =----------------------------------

    public function getId(): ?int
    {
        return $this->id;
    }

##------------------------= NAME =----------------------------------

public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

##------------------------= GENDER =----------------------------------

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

##------------------------= COLOR =----------------------------------

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }

##------------------------= DIRTH DATE =----------------------------------

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): static
    {
        $this->birth_date = $birth_date;

        return $this;
    }

##------------------------= MICROCHIP NUMBER =----------------------------------

    public function getMicrochipNumber(): ?string
    {
        return $this->microchip_number;
    }

    public function setMicrochipNumber(string $microchip_number): static
    {
        $this->microchip_number = $microchip_number;

        return $this;
    }

##------------------------= REGISTRATION NUMBER =----------------------------------

    public function getRegistrationNumber(): ?string
    {
        return $this->registration_number;
    }

    public function setRegistrationNumber(string $registration_number): static
    {
        $this->registration_number = $registration_number;

        return $this;
    }

##------------------------= AVAILABLE =----------------------------------

    public function isAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): static
    {
        $this->available = $available;

        return $this;
    }

##------------------------= DESCRIPRION =----------------------------------

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}

##----------------------------------------------------------