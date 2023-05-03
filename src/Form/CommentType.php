<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            // ->add('date_comment')
            ->add('comment', null, [
                'attr' => [
                    'style' => 'width: 100%;'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Title cannot be blank.']),
                    new Assert\Length(['min' => 2, 'max' => 255, 'minMessage' => 'Title must be at least {{ limit }} characters.', 'maxMessage' => 'Title cannot be longer than {{ limit }} characters.']),
                ],
            ])
            
            
            // ->add('id_post')
            // ->add('id_post', HiddenType::class, [
            //     'data' => $options['post_id'], // pass the id_post of the Post entity to the form
            // ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }

}
