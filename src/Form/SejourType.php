<?php

namespace App\Form;

use App\Entity\Patient;
use App\Entity\Sejour;
use App\Entity\Service;
use App\Entity\Lit;
use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SejourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('patients', EntityType::class, ['class' => Patient::class, 'attr' => ['class' => 'form-control', 'placeholder' => 'Patient']])
            ->add('DateEntreeSejour', DateType::class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Date entrée']])
            ->add('DateSortieSejour', DateType:: class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Date sortie']])
            ->add('Probleme', TextareaType::class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Problème']])
            
            ->add('services', EntityType::class, ['class'=> Service::class, 'attr' => ['class' => 'form-control', 'placeholder' => 'Service']])
            ->add('lit', EntityType::class, ['class' => Lit::class, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de lit']])
            ->add('Chambre', EntityType::class, ['class'=> Chambre::class, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de chambre']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sejour::class,
        ]);
    }
}
