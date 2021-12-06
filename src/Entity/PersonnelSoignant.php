<?php

namespace App\Entity;

use App\Repository\PersonnelSoignantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonnelSoigantRepository::class)
 */
class PersonnelSoignant
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
    private $IdPersonnelSoignant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateNaissance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPersonnelSoignant(): ?int
    {
        return $this->IdPersonnelSoignant;
    }

    public function setIdPersonnelSoignant(int $IdPersonnelSoignant): self
    {
        $this->IdPersonnelSoignant = $IdPersonnelSoignant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }
}
