<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotosRepository::class)]
class Photos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $dog_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_url = null;

##------------------------= ID =----------------------------------

    public function getId(): ?int
    {
        return $this->id;
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

##------------------------= IMAGE URL =----------------------------------

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }
}
