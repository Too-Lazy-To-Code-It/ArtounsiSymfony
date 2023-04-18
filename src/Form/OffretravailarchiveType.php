<?php

namespace App\Form;

use App\Entity\Offretravailarchive;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffretravailarchiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreoffre')
            ->add('descriptionoffre')
            ->add('categorieoffre')
            ->add('nickname')
            ->add('dateajoutoffre')
            ->add('typeoffre')
            ->add('localisationoffre')
            ->add('id_user')
            ->add('idcategorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offretravailarchive::class,
        ]);
    }
}
