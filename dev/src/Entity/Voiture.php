<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $id_parking;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $immatriculation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdParking(): ?int
    {
        return $this->id_parking;
    }

    public function setIdParking(int $id_parking): self
    {
        $this->id_parking = $id_parking;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }
}
