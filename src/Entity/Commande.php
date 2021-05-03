<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_commande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numVoie_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rue_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cp_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays_livraison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?DateTime
    {
        return $this->date_commande;
    }

    public function setDateCommande(DateTime $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getNumVoieLivraison(): ?string
    {
        return $this->numVoie_livraison;
    }

    public function setNumVoieLivraison(string $numVoie_livraison): self
    {
        $this->numVoie_livraison = $numVoie_livraison;

        return $this;
    }

    public function getRueLivraison(): ?string
    {
        return $this->rue_livraison;
    }

    public function setRueLivraison(string $rue_livraison): self
    {
        $this->rue_livraison = $rue_livraison;

        return $this;
    }

    public function getCpLivraison(): ?string
    {
        return $this->cp_livraison;
    }

    public function setCpLivraison(string $cp_livraison): self
    {
        $this->cp_livraison = $cp_livraison;

        return $this;
    }

    public function getVilleLivraison(): ?string
    {
        return $this->ville_livraison;
    }

    public function setVilleLivraison(string $ville_livraison): self
    {
        $this->ville_livraison = $ville_livraison;

        return $this;
    }

    public function getPaysLivraison(): ?string
    {
        return $this->pays_livraison;
    }

    public function setPaysLivraison(string $pays_livraison): self
    {
        $this->pays_livraison = $pays_livraison;

        return $this;
    }

    public function getTelLivraison(): ?string
    {
        return $this->tel_livraison;
    }

    public function setTelLivraison(string $tel_livraison): self
    {
        $this->tel_livraison = $tel_livraison;

        return $this;
    }

}
