<?php

namespace App\Entity;

use App\Repository\LitterDogsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LitterDogsRepository::class)]
class LitterDogs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $litter_id = null;

    #[ORM\Column]
    private ?int $dog_id = null;

##------------------------= ID =----------------------------------

    public function getId(): ?int
    {
        return $this->id;
    }

##------------------------= LITTER ID =----------------------------------

    public function getLitterId(): ?int
    {
        return $this->litter_id;
    }

    public function setLitterId(int $litter_id): static
    {
        $this->litter_id = $litter_id;

        return $this;
    }

##------------------------= DOG ID =----------------------------------

    public function getDogId(): ?int
    {
        return $this->dog_id;
    }

    public function setDogId(int $dog_id): static
    {
        $this->dog_id = $dog_id;

        return $this;
    }
}
