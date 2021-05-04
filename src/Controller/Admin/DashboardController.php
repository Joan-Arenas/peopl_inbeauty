<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Marque;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use ContainerJxO2xtZ\getPaginatorFactoryService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class DashboardController
 * @package App\Controller\Admin
 * @IsGranted("ROLE_ADMIN")
 * @Route("/admin", name="BackOffice_")
 */
class DashboardController extends AbstractDashboardController
{


    private $userRepository;
    private $commandeRepository;

    // ***** ON FAIT APPEL A "userRepository" POUR TROUVER LES USERS EN BDD  avec "findAll()"*****

    public function __construct(UserRepository $userRepository, CommandeRepository $commandeRepository)
    {

        $this->userRepository = $userRepository;
        $this->commandeRepository = $commandeRepository;
    }


    /**
     * @Route("/", name="accueil")
     */
    // ***** ICI ON ECRIT LA METHODE POUR COMPTER LES USER *****

    public function index(): Response
    {

        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', [
            "titre_page" => $titrePage = "Back Office",
            "nb_users" => count($this->userRepository->findAll()),


        ]);
    }



// ***** CONFIGURATION DU DASHBOARD *****

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('People InBeauty')
            ->setFaviconPath('assets/img/INBEAUTY.png');

    }

//***** POUR FAIRE LES LIENS A GAUCHE DANS LE SLID DU DASHOBOARD *****
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section("Gérer les Users");
        yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class);

        yield MenuItem::section("Gérer les Produits");
        yield MenuItem::linkToCrud('Produits', 'fas fa-gift', Produit::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-server', Categorie::class);
        yield MenuItem::linkToCrud('Marques', 'fas fa-server', Marque::class);
        yield MenuItem::linkToCrud('Commandes', 'fas fa-print', Commande::class);
        yield MenuItem::linkToCrud('Avis', 'far fa-comment-alt', Avis::class);

    }


//***** POUR AFFICHER LE NOM COMPLET DE CELUI QUI S'EST CONNECTé EN ADMIN *****
    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($this->getUser()->getNomComplet());

    }
}
