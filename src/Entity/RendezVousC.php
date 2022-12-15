<?php

namespace App\Entity;

use App\Repository\RendezVousCRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousCRepository::class)]
class RendezVousC
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVousC')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $nom_patient = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $prenom_patient = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $nom_medecin = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Membre $prenom_medecin = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $numero_voie = null;

    #[ORM\Column(length: 255)]
    private ?string $voie = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column]
    private ?int $code_postal = null;

    #[ORM\Column(length: 255)]
    private ?string $nature_rendez_vous = null;

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

    public function getPrenomPatient(): ?Membre
    {
        return $this->prenom_patient;
    }

    public function setPrenomPatient(?Membre $prenom_patient): self
    {
        $this->prenom_patient = $prenom_patient;

        return $this;
    }

    public function getNomMedecin(): ?Membre
    {
        return $this->nom_medecin;
    }

    public function setNomMedecin(?Membre $nom_medecin): self
    {
        $this->nom_medecin = $nom_medecin;

        return $this;
    }

    public function getPrenomMedecin(): ?Membre
    {
        return $this->prenom_medecin;
    }

    public function setPrenomMedecin(?Membre $prenom_medecin): self
    {
        $this->prenom_medecin = $prenom_medecin;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNumeroVoie(): ?int
    {
        return $this->numero_voie;
    }

    public function setNumeroVoie(int $numero_voie): self
    {
        $this->numero_voie = $numero_voie;

        return $this;
    }

    public function getVoie(): ?string
    {
        return $this->voie;
    }

    public function setVoie(string $voie): self
    {
        $this->voie = $voie;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getNatureRendezVous(): ?string
    {
        return $this->nature_rendez_vous;
    }

    public function setNatureRendezVous(string $nature_rendez_vous): self
    {
        $this->nature_rendez_vous = $nature_rendez_vous;

        return $this;
    }
}
