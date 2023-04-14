<?php

namespace App\Form;

use App\Entity\Allusers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AllusersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('Last_Name')
            ->add('Email')
            ->add('Birthday')
            ->add('password')
            ->add('salt')
            ->add('nationality')
            ->add('type')
            ->add('nickname')
            ->add('avatar')
            ->add('background')
            ->add('description')
            ->add('bio')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Allusers::class,
        ]);
    }
}
