<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {



        return [
            IdField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('nom', 'NOM'),
            TextField::new('prenom', 'PRENOM'),
            TextField::new('email', 'EMAIL'),
            DateTimeField::new('dateCreation'),
            DateTimeField::new('dateMaj'),
            ArrayField::new('roles', 'ROLE'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return  $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
