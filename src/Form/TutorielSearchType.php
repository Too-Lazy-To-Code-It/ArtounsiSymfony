<?php

namespace App\Form;

use App\Entity\Tutoriel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;
use App\Entity\Allusers;

class TutorielSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title',EntityType::class,
                [
                'class'=>Tutoriel::class,
                'choice_label'=>'title',
                'autocomplete' => true
                ])

        ->add('id_categorie',EntityType::class,
                ['class'=>Category::class,
                'choice_label'=>'name_category',
                'autocomplete' => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
