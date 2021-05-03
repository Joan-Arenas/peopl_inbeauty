<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }


//    ***** METHODE POUR AFFICHER LE TITRE DES VOLETS DS LE DASHBOARD *****

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setEntityLabelInSingular('Categorie')
            ->setEntityLabelInPlural('Categories')
            ->setPageTitle('index', 'Liste Des Catégories')
            ->setPaginatorPageSize(5);

    }

    public function configureFields(string $pageName): iterable
    {
        return [


            TextField::new('nom', 'NOM'),
            TextField::new('descriptif', 'DESCRIPTIF'),
            DateTimeField::new('dateCreation', 'DATE DE CREATION'),
            DateTimeField::new('dateMaj', 'DATE DE MISE A JOUR')

        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return  $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

}
