<?php

namespace App\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Demandetravail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Category;
class DemandetravailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
         
            ->add('titreDemande')
            ->add('descriptionDemande')
            ->add('pdf', FileType::class, [
                'data_class' => null, ])
    

            ->add('idcategorie', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name_category',
               
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demandetravail::class,
        ]);
    }
}
