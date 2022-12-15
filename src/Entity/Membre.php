<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: MembreRepository::class)]
class Membre implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $prenom_patient = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $nom_patient = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $categorie = null;

    #[ORM\Column( nullable:true)]
    private ?int $age = null;

    #[ORM\Column( nullable:true)]
    private ?int $telephone = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $sexe = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $taille = null;

    #[ORM\Column ( nullable:true)]
    private ?int $poids = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $nom_medecin = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $prenom_medecin = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $specialite = null;

    #[ORM\Column( nullable:true)]
    private ?int $numero_voie = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $voie = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $ville = null;

    #[ORM\Column( nullable:true)]
    private ?int $code_postal = null;

    #[ORM\Column( nullable:true)]
    private ?int $rpps = null;

    #[ORM\OneToMany(mappedBy: 'nom_patient', targetEntity: RendezVousC::class)]
    private Collection $rendezVousC;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $departement = null;

    public function __construct()
    {
        $this->rendezVousC = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenomPatient(): ?string
    {
        return $this->prenom_patient;
    }

    public function setPrenomPatient(string $prenom_patient): self
    {
        $this->prenom_patient = $prenom_patient;

        return $this;
    }

    public function getNomPatient(): ?string
    {
        return $this->nom_patient;
    }

    public function setNomPatient(string $nom_patient): self
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getNomMedecin(): ?string
    {
        return $this->nom_medecin;
    }

    public function setNomMedecin(string $nom_medecin): self
    {
        $this->nom_medecin = $nom_medecin;

        return $this;
    }

    public function getPrenomMedecin(): ?string
    {
        return $this->prenom_medecin;
    }

    public function setPrenomMedecin(string $prenom_medecin): self
    {
        $this->prenom_medecin = $prenom_medecin;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

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

    public function getRpps(): ?int
    {
        return $this->rpps;
    }

    public function setRpps(int $rpps): self
    {
        $this->rpps = $rpps;

        return $this;
    }

    /**
     * @return Collection<int, RendezVousC>
     */
    public function getRendezVousC(): Collection
    {
        return $this->rendezVousC;
    }

    public function addRendezVousC(RendezVousC $rendezVousC): self
    {
        if (!$this->rendezVousC->contains($rendezVousC)) {
            $this->rendezVousC->add($rendezVousC);
            $rendezVousC->setNomPatient($this);
        }

        return $this;
    }

    public function removeRendezVousC(RendezVousC $rendezVousC): self
    {
        if ($this->rendezVousC->removeElement($rendezVousC)) {
            // set the owning side to null (unless already changed)
            if ($rendezVousC->getNomPatient() === $this) {
                $rendezVousC->setNomPatient(null);
            }
        }

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
}
