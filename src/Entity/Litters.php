<?php

namespace App\Entity;

use App\Repository\LitterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LittersRepository::class)]
class Litters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $litter_date = null;

    #[ORM\Column]
    private ?int $mother_id = null;

    #[ORM\Column]
    private ?int $father_id = null;

##------------------------= ID =----------------------------------

    public function getId(): ?int
    {
        return $this->id;
    }

##------------------------= LITTER DATE =----------------------------------

    public function getLitterDate(): ?\DateTimeInterface
    {
        return $this->litter_date;
    }

    public function setLitterDate(\DateTimeInterface $litter_date): static
    {
        $this->litter_date = $litter_date;

        return $this;
    }

##------------------------= FATHER ID =----------------------------------

    public function getFatherId(): ?int
    {
        return $this->father_id;
    }

    public function setFatherId(int $father_id): static
    {
        $this->father_id = $father_id;

        return $this;
    }


##------------------------= MOTHER ID =----------------------------------

    public function getMotherId(): ?int
    {
        return $this->mother_id;
    }

    public function setMotherId(int $mother_id): static
    {
        $this->mother_id = $mother_id;

        return $this;
    }
}

