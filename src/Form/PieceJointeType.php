<?php

namespace App\Form;

use App\Entity\PieceJointe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class PieceJointeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'fichierImageJointe',
                VichFileType::class,
                [
                    'label' => 'Ajouter une photo'
                ]
            );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PieceJointe::class,
        ]);
    }
}
