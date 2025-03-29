<?php

namespace App\Entity;

use App\Repository\TripRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TripRepository::class)]
class Trip
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $trip_id = null;

    #[ORM\Column(length: 255)]
    private ?string $trip_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTripId(): ?int
    {
        return $this->trip_id;
    }

    public function setTripId(int $trip_id): static
    {
        $this->trip_id = $trip_id;

        return $this;
    }

    public function getTripName(): ?string
    {
        return $this->trip_name;
    }

    public function setTripName(string $trip_name): static
    {
        $this->trip_name = $trip_name;

        return $this;
    }
}
