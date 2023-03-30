<?php

namespace App\Form;

use App\Entity\Demandetravail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandetravailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nickname')
            ->add('titreDemande')
            ->add('descriptionDemande')
            ->add('pdf')
            ->add('dateajoutdemande')
            ->add('categoriedemande')
            ->add('id_user')
            ->add('idcategorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demandetravail::class,
        ]);
    }
}
