<?php

namespace App\Form;

use App\Entity\Offretravail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffretravailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreoffre')
            ->add('descriptionoffre')
            ->add('categorieoffre')
            ->add('nickname')
            ->add('dateajoutoofre')
            ->add('typeoffre')
            ->add('localisationoffre')
            ->add('id_user')
            ->add('idcategorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offretravail::class,
        ]);
    }
}
