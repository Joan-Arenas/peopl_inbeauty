<?php


namespace App\Form;


use App\Entity\Categorie;
use App\Entity\Marque;
use App\Utils\Recherche;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'chaine',
                null,
                [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'champ de filtre...'
                    ]
                ]
            )
            ->add(
                'categories',
                EntityType::class,
                [
                    'label'=>false,
                    'class'=>Categorie::class,
                    'required'=>false,
                    'multiple'=>true,
                    'expanded'=>true
                ],
            )
            ->add(
                'marques',
                EntityType::class,
                [
                    'label'=>false,
                    'class'=>Marque::class,
                    'required'=>false,
                    'multiple'=>true,
                    'expanded'=>true
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Recherche::class,
                'method' => 'GET',
                'csrf_protection' => false
            ]
        );
    }
}