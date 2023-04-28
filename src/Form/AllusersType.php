<?php

namespace App\Form;

use App\Entity\Allusers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class AllusersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('Last_Name')
            ->add('Email')
            ->add('Birthday')
            ->add('password', PasswordType::class, ['attr' => ['id' => 'password-field', 'type' => 'password']])
            ->add('nationality')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Observer' => 'observer',
                    'Studio' => 'studio',
                    'Artist' => 'artist',
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label_attr' => [
                    'class' => 'form-label'
                ]
            ])
            ->add('nickname')
            ->add('avatar', FileType::class, [
                'label' => 'Avatar Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                    ])
                ]
            ])
            ->add('background', FileType::class, [
                'label' => 'Background Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                    ])
                ]
            ])
            ->add('description')
            ->add('bio');

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Allusers::class,
        ]);
    }
}
