<?php

namespace App\Entity;

use App\Repository\PersonnelSoigantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonnelSoigantRepository::class)
 */
class PersonnelSoigant
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
    private $IdPersonnelSoigant;

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

    public function getIdPersonnelSoigant(): ?int
    {
        return $this->IdPersonnelSoigant;
    }

    public function setIdPersonnelSoigant(int $IdPersonnelSoigant): self
    {
        $this->IdPersonnelSoigant = $IdPersonnelSoigant;

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
