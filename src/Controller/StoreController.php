<?php

namespace App\Controller;

use App\Form\RechercheType;
use App\Repository\ProduitRepository;
use App\Utils\Recherche;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class StoreController
 * @package App\Controller
 * @Route ("/", name="store_")
 */
class StoreController extends AbstractController
{

    private $produitRepository;

    public function __construct(ProduitRepository $produitRepository)
    {
        $this->produitRepository = $produitRepository;
    }

    /**
     * @Route("/", name="accueil")
     * @param Request $request
     * @return Response
     */
    public function accueil(Request $request): Response

    {

//  ***** POUR CONSTRUIRE LE FORM DE RECHERCHE DES PRODUITS *****

        $produits = $this->produitRepository->findAll();

        $maRecherche = new Recherche();
        $form = $this->createForm(RechercheType::class, $maRecherche);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produits = $this->produitRepository->findProduitsByMaRecherche($maRecherche);
        }

//  ***** RECUPERE LA LISTE DES PRODUITS *****
        return $this->render(
            'store/index.html.twig',
            [
                'titre_page' => $titrePage = "Accueil",
                'titre_section' => $titreSection = "page accueil",
                'produits' => $produits,
                'formRecherche' => $form->createView(),

            ]);
    }

    /**
     * @Route("/produit/{id}-{slug}", name="produit")
     */
    public function produit(int $id): Response
    {

        return $this->render(
            'store/produit.html.twig',
            [
                'titre_page' => $titrePage = "Produit",
                'titre_section' => $titreSection = "page produit",

            ]);
    }
}
