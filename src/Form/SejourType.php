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
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SejourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('IdSejour', NumberType::class)
            ->add('DateEntreeSejour', DateTimeType::class)
            ->add('DateSortieSejour', DateTimeType:: class)
            ->add('Probleme', TextType::class)
            ->add('patients', EntityType::class, ['class' => Patient::class])
            ->add('services', EntityType::class, ['class'=> Service::class ])
            ->add('lit', EntityType::class, ['class' => Lit::class])
            ->add('Chambre', EntityType::class, ['class'=> Chambre::class]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sejour::class,
        ]);
    }
}
