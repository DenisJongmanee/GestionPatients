<?php

namespace App\Form;

use App\Entity\PersonnelSoignant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class PersonnelSoignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('IdPersonnelSoignant', NumberType::class)
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('DateNaissance', BirthdayType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonnelSoignant::class,
        ]);
    }
}
