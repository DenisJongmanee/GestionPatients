<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToMany(targetEntity=Sejour::class, mappedBy="Chambre")
     */
    private $sejours;

    /**
     * @ORM\ManyToMany(targetEntity=Lit::class, inversedBy="chambres")
     */
    private $Lit;

    public function __construct()
    {
        $this->sejours = new ArrayCollection();
        $this->Lit = new ArrayCollection();
    }

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

    /**
     * @return Collection|Sejour[]
     */
    public function getSejours(): Collection
    {
        return $this->sejours;
    }

    public function addSejour(Sejour $sejour): self
    {
        if (!$this->sejours->contains($sejour)) {
            $this->sejours[] = $sejour;
            $sejour->addChambre($this);
        }

        return $this;
    }

    public function removeSejour(Sejour $sejour): self
    {
        if ($this->sejours->removeElement($sejour)) {
            $sejour->removeChambre($this);
        }

        return $this;
    }

    /**
     * @return Collection|Lit[]
     */
    public function getLit(): Collection
    {
        return $this->Lit;
    }

    public function addLit(Lit $lit): self
    {
        if (!$this->Lit->contains($lit)) {
            $this->Lit[] = $lit;
        }

        return $this;
    }

    public function removeLit(Lit $lit): self
    {
        $this->Lit->removeElement($lit);

        return $this;
    }

    public function __toString()
    {
        return "N°" . $this->NumChambre;
    }
}
