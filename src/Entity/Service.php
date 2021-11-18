<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
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
    private $IdService;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomService;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ZoneGeographique;

    /**
     * @ORM\ManyToMany(targetEntity=Sejour::class, inversedBy="services")
     */
    private $sejour;

    /**
     * @ORM\OneToMany(targetEntity=Chambre::class, mappedBy="service")
     */
    private $chambres;

    public function __construct()
    {
        $this->sejour = new ArrayCollection();
        $this->chambres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdService(): ?int
    {
        return $this->IdService;
    }

    public function setIdService(int $IdService): self
    {
        $this->IdService = $IdService;

        return $this;
    }

    public function getNomService(): ?string
    {
        return $this->NomService;
    }

    public function setNomService(string $NomService): self
    {
        $this->NomService = $NomService;

        return $this;
    }

    public function getZoneGeographique(): ?string
    {
        return $this->ZoneGeographique;
    }

    public function setZoneGeographique(string $ZoneGeographique): self
    {
        $this->ZoneGeographique = $ZoneGeographique;

        return $this;
    }

    /**
     * @return Collection|Sejour[]
     */
    public function getSejour(): Collection
    {
        return $this->sejour;
    }

    public function addSejour(Sejour $sejour): self
    {
        if (!$this->sejour->contains($sejour)) {
            $this->sejour[] = $sejour;
        }

        return $this;
    }

    public function removeSejour(Sejour $sejour): self
    {
        $this->sejour->removeElement($sejour);

        return $this;
    }

    /**
     * @return Collection|Chambre[]
     */
    public function getChambres(): Collection
    {
        return $this->chambres;
    }

    public function addChambre(Chambre $chambre): self
    {
        if (!$this->chambres->contains($chambre)) {
            $this->chambres[] = $chambre;
            $chambre->setService($this);
        }

        return $this;
    }

    public function removeChambre(Chambre $chambre): self
    {
        if ($this->chambres->removeElement($chambre)) {
            // set the owning side to null (unless already changed)
            if ($chambre->getService() === $this) {
                $chambre->setService(null);
            }
        }

        return $this;
    }
}
