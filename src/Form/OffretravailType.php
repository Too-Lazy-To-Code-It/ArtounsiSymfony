<?php

namespace App\Form;

use App\Entity\Offretravail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OffretravailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreoffre')
            ->add('descriptionoffre')
            ->add('idcategorie', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name_category',
               
            ])
            ->add('typeoffre', ChoiceType::class, [
                'choices' => [
                    'Contrat' => 'Contrat',
                    'Freelance' => 'Freelance',
                    'Permanante' => 'Permanante',
                ],
            ])
            ->add('localisationoffre', ChoiceType::class, [
                'choices' => [
                    'Tunis' => 'Tunis',
                    'Algerie' => 'Algerie',
                   'France' => 'France',
                ],
            ])
         
       
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offretravail::class,
        ]);
    }
}
