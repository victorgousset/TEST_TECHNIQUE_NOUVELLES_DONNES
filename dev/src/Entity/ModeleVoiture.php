<?php

namespace App\Entity;

use App\Repository\ModeleVoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModeleVoitureRepository::class)
 */
class ModeleVoiture
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
    public $id_voiture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVoiture(): ?int
    {
        return $this->id_voiture;
    }

    public function setIdVoiture(int $id_voiture): self
    {
        $this->id_voiture = $id_voiture;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
