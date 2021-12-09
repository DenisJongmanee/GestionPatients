<?php

namespace App\Form;

use App\Entity\Patient;
use App\Entity\Sejour;
use App\Entity\Service;
use App\Entity\Lit;
use App\Entity\Chambre;
use App\Service\LitService;
use App\Service\ServiceService;
use App\Service\ChambreService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Contracts\HttpClient\HttpClientInterface;
class SejourType extends AbstractType
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $apiService = new ServiceService($this->client);
        $services = $apiService->getServices();
        $choicesService = [];
        foreach ($services as $service) {
            $choicesService[$service["nom_service"]] = $service["id_service"];
        }

        $apiLit = new LitService($this->client);
        $lits = $apiLit->getLits();
        dump($lits);
        $choicesLit = [];
        foreach ($lits as $lit) {
            $choicesLit[$lit["num_lit"]] = $lit["id"];
        }

        $apiChambre = new ChambreService($this->client);
        $chambres = $apiChambre->getChambres();
        dump($chambres);
        $choicesChambre = [];
        foreach ($chambres as $chambre) {
            $choicesChambre[$chambre["num_chambre"]] = $chambre["id"];
        }
        

        $builder
            ->add('patient', EntityType::class, ['class' => Patient::class, 'attr' => ['class' => 'form-control', 'placeholder' => 'Patient']])
            ->add('dateEntree', DateTimeType::class, ['label'=> "Date d'entreé du séjour", 'attr' => ['class' => 'form-control', 'placeholder' => 'Date entrée']])
            ->add('dateSortie', DateTimeType:: class, ['label'=> "Date de sortie du séjour",'attr' => ['class' => 'form-control', 'placeholder' => 'Date sortie']])
            ->add('probleme', TextareaType::class, ['label'=> "Problème observé",'attr' => ['class' => 'form-control', 'placeholder' => 'Problème']])
            
            ->add('service', ChoiceType::class, [ 'choices'=> $choicesService, 'attr' => ['class' => 'form-control', 'placeholder' => 'Service']])
            ->add('idLit', ChoiceType::class, ['label'=> "Numéro de lit", 'choices' => $choicesLit, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de lit']])
            ->add('idChambre', ChoiceType::class, ['label'=> "Numéro de chambre",'choices'=> $choicesChambre, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de chambre']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sejour::class,
        ]);
    }
}
