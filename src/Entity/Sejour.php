<?php

namespace App\Entity;

use App\Repository\SejourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SejourRepository::class)
 */
class Sejour
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
    private $IdSejour;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateEntreeSejour;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateSortieSejour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Probleme;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @ORM\ManyToMany(targetEntity=Service::class, mappedBy="sejour")
     */
    private $services;

    /**
     * @ORM\ManyToOne(targetEntity=Lit::class, inversedBy="sejour")
     */
    private $lit;

    public function __construct()
    {
        $this->services = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSejour(): ?int
    {
        return $this->IdSejour;
    }

    public function setIdSejour(int $IdSejour): self
    {
        $this->IdSejour = $IdSejour;

        return $this;
    }

    public function getDateEntreeSejour(): ?\DateTimeInterface
    {
        return $this->DateEntreeSejour;
    }

    public function setDateEntreeSejour(\DateTimeInterface $DateEntreeSejour): self
    {
        $this->DateEntreeSejour = $DateEntreeSejour;

        return $this;
    }

    public function getDateSortieSejour(): ?\DateTimeInterface
    {
        return $this->DateSortieSejour;
    }

    public function setDateSortieSejour(\DateTimeInterface $DateSortieSejour): self
    {
        $this->DateSortieSejour = $DateSortieSejour;

        return $this;
    }

    public function getProbleme(): ?string
    {
        return $this->Probleme;
    }

    public function setProbleme(string $Probleme): self
    {
        $this->Probleme = $Probleme;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * @return Collection|Service[]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
            $service->addSejour($this);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        if ($this->services->removeElement($service)) {
            $service->removeSejour($this);
        }

        return $this;
    }

    public function getLit(): ?Lit
    {
        return $this->lit;
    }

    public function setLit(?Lit $lit): self
    {
        $this->lit = $lit;

        return $this;
    }
}
