<?php

namespace App\Form;

use App\Entity\Allusers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Allusers1Type extends AbstractType
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
            ->add('number')
            ->add('_2fa')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Allusers::class,
        ]);
    }
}
