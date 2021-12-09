<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [ 'label'=> 'Nom', 'attr' => ['class' => 'form-control', 'placeholder' => 'Nom']])
            ->add('prenom',TextType::class, [ 'label'=> 'Prénom', 'attr' => ['class' => 'form-control', 'placeholder' => 'Prenom']])
            ->add('date', DateType::class, ['label'=> 'Date de naissance', 'format' => 'yyyy-MM-dd', 'widget' => 'single_text', 'html5'=>false, 'attr' => ['class' => 'form-control', 'placeholder' => 'Date de naissance']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
