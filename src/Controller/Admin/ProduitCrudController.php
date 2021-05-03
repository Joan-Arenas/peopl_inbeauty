<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use App\Form\PieceJointeType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use phpDocumentor\Reflection\Types\Integer;
use Vich\UploaderBundle\Form\Type\VichFileType;
use function Sodium\add;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }


    //    ***** METHODE POUR AFFICHER LE TITRE DES VOLETS ECT DS LE CRUD *****

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setEntityLabelInSingular('Produit')
            ->setEntityLabelInPlural('Produits')
            ->setPageTitle('index', 'Liste Des Produits')
            ->setDateTimeFormat(DateTimeField::INTL_DATE_PATTERNS[DateTimeField::FORMAT_MEDIUM].' ' .
                DateTimeField::INTL_TIME_PATTERNS[DateTimeField::FORMAT_MEDIUM])
            ->setPaginatorPageSize(5);

    }

    // ***** POUR AFFICHER LES CHAMPS DU PRODUIT DS LE DASHBOARD *****

    public function configureFields(string $pageName): iterable
    {
        $panelProduit = FormField::addPanel('INFOS PRODUITS');
        $id = IdField::new('id')->onlyOnIndex();
        $nom = TextField::new('nom', 'Nom du produit');
        $marque = AssociationField::new('marque', 'Marque');
        $categorie = AssociationField::new('categorie', 'Catégorie');
        $description = TextEditorField::new('description');
        $dateCreation = DateTimeField::new('dateCreation', 'Date de création');
        $dateMaj = DateTimeField::new('dateMaj', 'Date Mise à Jour')->onlyOnIndex();
        $slug = SlugField::new('slug')->setTargetFieldName('nom');
        $prix = NumberField::new('prix')->addCssClass('EUR');
        $dispo = BooleanField::new('dispo');



        $affichageProduits = [
            $panelProduit, $id, $nom, $categorie, $marque, $description, $dateCreation, $dateMaj, $prix, $slug, $dispo,
        ];

// ***** CREE UN AUTRE VOLET DANS LA CREATION DU PRODUIT *****

        $panelImages = FormField::addPanel('INFO IMAGE');
        $nomPhoto = ImageField::new('nomPhoto')
            ->setFormType(VichFileType::class)
            ->setBasePath('/images/produits')
            ->hideOnForm();

// ***** CREE LE UPLOADER DU PRODUIT GRACE A UNE CLASS QUE L'ON A CREER "VichImageField" DANS LE CONTROLLER *****

        $fichierPhoto = VichImageField::new('fichierPhoto', 'Photo')
            ->onlyOnForms();

        $fichierImageJointe = CollectionField::new('pieceJointes')
            ->setEntryType(PieceJointeType::class)
            ->setFormTypeOption('by_reference', false)
            ->onlyOnForms();

        $nomImageJointe = AssociationField::new('pieceJointes')
            ->setFormType(VichFileType::class)
            ->setTemplatePath('pj/image.html.twig')
            ->onlyOnDetail();


// ***** CONDITION POUR AFFICHER OU NON LES PIECES JOINTES DANS LE CRUD DU PRODUIT *****

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL) {

            $affichageImages = [$panelImages, $nomPhoto, $fichierPhoto, $nomImageJointe];

        } else {
            $affichageImages = [$panelImages, $nomPhoto, $fichierPhoto, $fichierImageJointe];
        }

        return array_merge($affichageProduits, $affichageImages);
    }

// ***** CONFIGURE LES ACTIONS QUE J'AI PARAMETTRé "VOIR", "SUPPRIMER" ECT... *****

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

}
