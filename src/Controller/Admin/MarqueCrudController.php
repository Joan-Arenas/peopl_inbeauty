<?php

namespace App\Controller\Admin;

use App\Entity\Marque;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MarqueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Marque::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setEntityLabelInSingular('Marque')
            ->setEntityLabelInPlural('Marques')
            ->setPageTitle('index', 'Liste Des Marques')
            ->setPaginatorPageSize(5);
    }


    public function configureFields(string $pageName): iterable
    {


        $panelMarque = FormField::addPanel('INFOS MARQUES');
        $id = IdField::new('id')->onlyOnIndex();
        $nom = TextField::new('nom', 'Nom de la marque');
        $slug = SlugField::new('slug')->setTargetFieldName('nom');

        $affichageMarque = [$panelMarque, $id, $nom, $slug];
        return array_merge($affichageMarque);
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

}
