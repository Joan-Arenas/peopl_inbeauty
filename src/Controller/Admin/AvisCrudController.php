<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AvisCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string

    {
        return Avis::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setPageTitle('index', 'Liste Des Avis')
            ->setPaginatorPageSize(4);
    }


    public function configureFields(string $pageName): iterable
    {
        $commentaire = TextField::new('commentaire', 'COMMENTAIRE');
        $note = TextEditorField::new('note', 'NOTE');

        if ($pageName === Crud::PAGE_INDEX || $pageName === Crud::PAGE_DETAIL) {
            $champs = [$commentaire, $note];
        } else {
            $champs = [$commentaire];
        }

        return $champs;

    }

}
