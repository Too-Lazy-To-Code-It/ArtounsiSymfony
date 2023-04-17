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

class TutorielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //->add('pathimg')
            
            ->add('title')
            ->add('description',TextareaType::class)
            ->add('niveau')
            ->add('id_categorie',EntityType::class,
            ['class'=>Category::class,
            'choice_label'=>'name_category'])
            ->add('id_artist',EntityType::class,
            ['class'=>Allusers::class,
            'choice_label'=>'nickname'])
            ->add('Image', FileType::class,
                    ['label' => 'image',
                    'multiple' => false,
                    'mapped' => false,
                    'required' => false])
                    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tutoriel::class,
        ]);
    }
}
