<?php

namespace App\Entity;

use App\Repository\LitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LitRepository::class)
 */
class Lit
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
    private $NumLit;

    /**
     * @ORM\OneToMany(targetEntity=Sejour::class, mappedBy="lit")
     */
    private $sejour;

    /**
     * @ORM\ManyToMany(targetEntity=Chambre::class, mappedBy="Lit")
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

    public function getNumLit(): ?int
    {
        return $this->NumLit;
    }

    public function setNumLit(int $NumLit): self
    {
        $this->NumLit = $NumLit;

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
            $sejour->setLit($this);
        }

        return $this;
    }

    public function removeSejour(Sejour $sejour): self
    {
        if ($this->sejour->removeElement($sejour)) {
            // set the owning side to null (unless already changed)
            if ($sejour->getLit() === $this) {
                $sejour->setLit(null);
            }
        }

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
            $chambre->addLit($this);
        }

        return $this;
    }

    public function removeChambre(Chambre $chambre): self
    {
        if ($this->chambres->removeElement($chambre)) {
            $chambre->removeLit($this);
        }

        return $this;
    }
}
