<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $etudiant_id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\ManyToOne(inversedBy: 'etudiants')]
    #[ORM\JoinColumn(nullable: false)]
    /**
      * @ORM\ManyToOne(targetEntity= "Institut")
      * @ORM\JoinColumn(name="institut_id", referencedColumnName="id")
      */

    private ?institut $instit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtudiantId(): ?int
    {
        return $this->etudiant_id;
    }

    public function setEtudiantId(int $etudiant_id): static
    {
        $this->etudiant_id = $etudiant_id;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getInstit(): ?institut
    {
        return $this->instit;
    }

    public function setInstit(?institut $instit): static
    {
        $this->instit = $instit;

        return $this;
    }
}
