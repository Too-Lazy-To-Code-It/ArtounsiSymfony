<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Choice;

use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;


class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title_p', null, [
                'label' => 'Title',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%;'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Title cannot be blank.']),
                    new Assert\Length(['min' => 2, 'max' => 255, 'minMessage' => 'Title must be at least {{ limit }} characters.', 'maxMessage' => 'Title cannot be longer than {{ limit }} characters.']),
                ],
            ])
            ->add('description_p', null, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%;'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Description cannot be blank.']),
                    new Assert\Length(['min' => 10, 'max' => 255, 'minMessage' => 'Description must be at least {{ limit }} characters.', 'maxMessage' => 'Description cannot be longer than {{ limit }} characters.']),
                ],
            ])
            ->add('media', FileType::class, [
                'required' => true,
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%;'
                ]
            ])
            ->add('captcha', Recaptcha3Type::class, [
            'constraints' => new Recaptcha3(),
            'action_name' => 'contact',
        ])
            ->add('post_type', ChoiceType::class, [
            'label' => 'Type',
            'choices' => [
                'Blog' => 'blog',
                'Portfolio' => 'portfolio',
            ],
            'expanded' => false,
            'multiple' => false,
            'attr' => [
                'class' => 'form-control'
            ],
            'constraints' => [
                new Choice(['choices' => ['blog', 'portfolio'], 'message' => 'Please select a valid post type.'])
            ]
        ])
            ->add('id_user', null, [
                'attr' => [
                    'style' => 'width: 100%;'
                ]
            ])
            ->add('id_category', null, [
                'label' => 'Category',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'is_edit' => false,
            'file_name' => null,
        ]);
    }
}