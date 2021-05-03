<?php


namespace App\Service;


use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService
{
    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * @var ProduitRepository
     */
    private $produitRepository;


    public function __construct(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $this->session = $session;
        $this->produitRepository = $produitRepository;
    }


    /**
     * 1] Permets de récupérer le contenue du panier *****************
     * @return array
     */
    public function contenuDuPanier(): array
    {
        $panier = $this->session->get('panier', []);
        $contenuDuPanier = [];

// ***** POUR CHAQUE PRODUIT RECUPERé DANS LE PANIER ON PREND SON ID *****
        foreach ($panier as $id => $quantite) {
            $produit = $this->produitRepository->find($id);
            if ($quantite && $produit->getDispo() ) {
                $contenuDuPanier[] = [
                    "quantite" => $quantite,
                    "produit" => $produit,
                    "sous_total"=> $quantite * $produit->getPrix()
                ];
            }

        }
        return $contenuDuPanier;
    }


    /**
     * 2] Permets d'ajouter au panier **************************
     * @param int $id
     */
    public function ajouterAuPanier(int $id)
    {
        $panier = $this->session->get('panier', []);
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $this->session->set('panier', $panier);

    }


    /**
     * 3] Permets de diminuer la Quantité d'un produit du panier **************
     * @param int $id
     */
    public function diminuerQteDuPanier(int $id)
    {
        $panier = $this->session->get('panier', []);
        if (!empty($panier[$id])) {
                $panier[$id]--;
        }
        $this->session->set('panier', $panier);
    }


    /**
     * 4] Permets de Supprimer un produit du panier **************
     *
     * @param int $id
     */
    public function supprimerDuPanier(int $id)
    {
        $panier = $this->session->get('panier', []);
        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $this->session->set('panier', $panier);
    }

    /**
     * 5] Permets de Recupérer une quantité pour un seul produit **************
     * @param int $id
     * @return int
     */
    public function qteDuProduit(int $id): int
    {
        $panier = $this->session->get('panier', []);
        if (!empty($panier[$id])) {
            return ($panier[$id]);
        }

        return 0;
    }


}