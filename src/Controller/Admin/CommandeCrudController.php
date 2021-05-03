<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commande::class;
    }

    //    ***** METHODE POUR AFFICHER LE TITRE DES VOLETS ECT DS LE CRUD *****

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setEntityLabelInSingular('Commande')
            ->setEntityLabelInPlural('Commandes')
            ->setPageTitle('index', 'Liste Des Commandes')
            ->setPaginatorPageSize(2);

    }

    public function configureFields(string $pageName): iterable
    {
        return [

            DateTimeField::new('date_commande', 'DATE DE LA COMMANDE'),
            TextField::new('statut', 'STATUT'),
            TextField::new('numVoieLivraison', 'N° DE VOIE'),
            TextField::new('rueLivraison', 'RUE DE LIVRAISON'),
            TextField::new('cpLivraison', 'CODE POSTALE'),
            TextField::new('villeLivraison', 'VILLE'),
            TextField::new('paysLivraison', 'PAYS'),
            TextField::new('telLivraison', 'TELEPHONE')

        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return  $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

}
