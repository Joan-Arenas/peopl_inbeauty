<?php

namespace App\Controller;

use App\Service\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/panier", name="panier_")
 */
class PanierController extends AbstractController
{
    /**
     * @var PanierService
     */
    private $appService;

    public function __construct(PanierService $appService)
    {
        $this->appService = $appService;
    }

    /**
     * 1] ***** Contenue du panier ******************
     * @Route("/", name="contenu")
     */
    public function index(): Response
    {
        $contenuDuPanier = $this->appService->contenuDuPanier();

        return $this->render(
            'panier/panier.html.twig',
            [
                'contenuDuPanier' => $contenuDuPanier
            ]);
    }

    /**
     * Ajoute le produit avec le 'id' dans le panier *****
     * @Route("/ajouter/{id}", name="ajouter")
     * @param int $id
     * @return JsonResponse
     */
    public function ajouter(int $id): JsonResponse
    {
        $this->appService->ajouterAuPanier($id);
        $qteProduit = $this->appService->qteDuProduit($id);
        return new JsonResponse(
            [
                'qte' => $qteProduit,
                'id' => $id
            ]
        );
    }

    /**
     * Diminue la quantité du produit   **********
     * @Route("/diminuer/{id}", name="diminuer")
     * @param int $id
     * @return JsonResponse
     */
    public function diminuer(int $id): JsonResponse
    {
        $this->appService->diminuerQteDuPanier($id);
        $qteProduit = $this->appService->qteDuProduit($id);
        return new JsonResponse(
            [
                'qte' => $qteProduit,
                'id' => $id
            ]
        );
    }

    /**
     * Supprime le produit   **************
     * @Route("/supprimer/{id}", name="supprimer")
     * @param int $id
     * @return RedirectResponse
     */
    public function supprimer(int $id): RedirectResponse
    {
        $this->appService->supprimerDuPanier($id);
        return $this->redirectToRoute("panier_contenu");
    }


}
