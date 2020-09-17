<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParkingRepository::class)
 */
class Parking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nom;

    /**
     * @ORM\Column(type="integer")
     */
    public $place_libre;

    /**
     * @ORM\Column(type="integer")
     */
    public $place_occupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPlaceLibre(): ?int
    {
        return $this->place_libre;
    }

    public function setPlaceLibre(int $place_libre): self
    {
        $this->place_libre = $place_libre;

        return $this;
    }

    public function getPlaceOccupe(): ?int
    {
        return $this->place_occupe;
    }

    public function setPlaceOccupe(int $place_occupe): self
    {
        $this->place_occupe = $place_occupe;

        return $this;
    }
}
