<?php

namespace App\Entity;

use App\Repository\PieceJointeRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PieceJointeRepository::class)
 * @Vich\Uploadable
 */
class PieceJointe
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
     * @param DateTime|null $updatedAt
     */
    public function setUpdatedAt(?DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @Vich\UploadableField(mapping="img_pj_produits", fileNameProperty="nomPhoto")
     * @var File|null
     */
    private $fichierImageJointe;

    /**
     * @ORM\Column (type="string")
     *
     * @var string|null
     */
    private $nomPhoto;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime|null
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="pieceJointes")
     */
    private $produit;


    /**
     * @param File|null $fichierImageJointe
     */
    public function setFichierImageJointe(?File $fichierImageJointe = null)
    {
        $this->fichierImageJointe = $fichierImageJointe;

        if (null !== $fichierImageJointe) {

            $this->updatedAt = new DateTime();
        }
    }

    public function getFichierImageJointe(): ?File
    {
        return $this->fichierImageJointe;
    }

    public function setNomPhoto(string $nomPhoto): void
    {
        $this->nomPhoto = $nomPhoto;
    }

    public function getNomPhoto(): ?string
    {
        return $this->nomPhoto;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}


