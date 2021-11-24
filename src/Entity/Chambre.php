<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumChambre;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreLits;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="chambres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumChambre(): ?int
    {
        return $this->NumChambre;
    }

    public function setNumChambre(int $NumChambre): self
    {
        $this->NumChambre = $NumChambre;

        return $this;
    }

    public function getNombreLits(): ?int
    {
        return $this->NombreLits;
    }

    public function setNombreLits(int $NombreLits): self
    {
        $this->NombreLits = $NombreLits;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
