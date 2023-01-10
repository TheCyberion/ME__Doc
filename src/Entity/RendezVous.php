<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $nom_patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPatient(): ?Membre
    {
        return $this->nom_patient;
    }

    public function setNomPatient(?Membre $nom_patient): self
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }
}
