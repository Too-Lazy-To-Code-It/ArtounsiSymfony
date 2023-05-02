<?php

namespace App\Form;

use App\Entity\Challenge;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sbyaute\StarRatingBundle\Form\StarRatingType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;
use App\Entity\Allusers;

class ChallengeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description',TextareaType::class)
            ->add('date_c',DateType::class)
            ->add('Image', FileType::class,
                    ['label' => 'image',
                    'multiple' => false,
                    'mapped' => false,
                    'required' => false])
            ->add('niveau',StarRatingType::class,[
                        'label' => 'Rating',
                        'stars' => 5,
                    ])
            ->add('id_categorie',EntityType::class,
            ['class'=>Category::class,
            'choice_label'=>'name_category'])
            ->add('id_artist',EntityType::class,
            ['class'=>Allusers::class,
            'choice_label'=>'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Challenge::class,
        ]);
    }
}
