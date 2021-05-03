<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProduitRepository;
use App\Service\InbeautyAppInterface;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 * @ORM\HasLifecycleCallbacks
 * @Vich\Uploadable
 *
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Veuillez renseigner le nom du produit svp")
     * @Assert\Length(max="50", maxMessage="Le nom du produit ne peut excéder 5O caratères")
     *
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     *
     */
    private $nomPhoto;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="img_produits", fileNameProperty="nomPhoto")
     */
    private $fichierPhoto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;


    /**
     * @ORM\Column(type="float")
     *
     */
    private $prix;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */

    private $dispo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateMaj;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=PieceJointe::class, mappedBy="produit", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $pieceJointes;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


    public function getNomPhoto(): ?string
    {
        return $this->nomPhoto;
    }

    public function setNomPhoto(?string $nomPhoto): self
    {
        $this->nomPhoto = $nomPhoto;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getFichierPhoto(): ?File
    {
        return $this->fichierPhoto;
    }

    /**
     * @param File|null $fichierPhoto
     */
    public function setFichierPhoto(?File $fichierPhoto): void
    {
        $this->fichierPhoto = $fichierPhoto;

        if ($fichierPhoto) {
            $this->dateMaj = new DateTime;
        }
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateCreation(): ?DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(DateTime $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }


    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDispo(): ?bool
    {
        return $this->dispo;
    }

    public function setDispo(?bool $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getDateMaj(): ?DateTime
    {
        return $this->dateMaj;
    }

    public function setDateMaj(DateTime $dateMaj): self
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    public function getCategorie(): ?categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /*------------------LES RAPPELS DE LA CLASS InbeautyAppInterface POUR LES MISES A JOUR DE LA DATE */

    /**
     * @ORM\PrePersist
     */
    public function avantPersist()
    {
        $this->nom = InbeautyAppInterface::capitalize($this->nom);
        $this->dateCreation = new DateTime();
    }

    //--------------- MISE A JOUR DE LA DATE

    /**
     * @ORM\PreUpdate
     */
    public function avantUpdate()
    {
        $this->nom = InbeautyAppInterface::capitalize($this->nom);
        $this->dateMaj = new DateTime();
    }

    /**
     * @return Collection|PieceJointe[]
     */
    public function getPieceJointes(): ?Collection
    {
        return $this->pieceJointes;
    }

    public function addPieceJointe(PieceJointe $pieceJointe): self
    {
        if (!$this->pieceJointes->contains($pieceJointe)) {
            $this->pieceJointes[] = $pieceJointe;
            $pieceJointe->setProduit($this);
        }

        return $this;
    }

    public function removePieceJointe(PieceJointe $pieceJointe): self
    {
        if ($this->pieceJointes->removeElement($pieceJointe)) {
            // set the owning side to null (unless already changed)
            if ($pieceJointe->getProduit() === $this) {
                $pieceJointe->setProduit(null);
            }
        }

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function __construct()
    {
        $this->pieceJointes = new ArrayCollection();
    }

}
