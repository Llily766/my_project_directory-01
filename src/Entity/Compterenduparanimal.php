<?php

namespace App\Entity;

use App\Repository\CompterenduparanimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompterenduparanimalRepository::class)]
class Compterenduparanimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $compterendu = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $regimealimentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompterendu(): ?string
    {
        return $this->compterendu;
    }

    public function setCompterendu(string $compterendu): static
    {
        $this->compterendu = $compterendu;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRegimealimentaire(): ?string
    {
        return $this->regimealimentaire;
    }

    public function setRegimealimentaire(string $regimealimentaire): static
    {
        $this->regimealimentaire = $regimealimentaire;

        return $this;
    }
}
