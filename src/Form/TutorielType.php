<?php

namespace App\Form;

use App\Entity\Tutoriel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TutorielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pathimg')
            ->add('title')
            ->add('description')
            ->add('niveau')
            ->add('id_artist')
            ->add('id_categorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tutoriel::class,
        ]);
    }
}
