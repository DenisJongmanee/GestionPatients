<?php

namespace App\Form;


use App\Service\LitService;
use App\Service\ServiceService;
use App\Service\ChambreService;
use App\Service\PatientService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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

        $apiPatient = new PatientService($this->client);
        $patients = $apiPatient->getPatients();
        dump($patients);
        $choicesPatient = [];
        foreach ($patients as $patient) {
            $choicesPatient[$patient["nom"] . " " . $patient["prenom"]] = $patient["id"];
        }
    

        $builder
            ->add('patient', ChoiceType::class, [ 'label'=> "Patient", 'choices' => $choicesPatient, 'attr' => ['class' => 'form-control', 'placeholder' => 'Patient']])
            ->add('dateEntree', DateTimeType::class, ['label'=> "Date d'entreé du séjour", 'widget' => 'single_text', 'html5' => false, 'attr' => ['class' => 'form-control datetimepicker', 'placeholder' => 'Date entrée']])
            ->add('dateSortie', DateTimeType:: class, ['label'=> "Date de sortie du séjour", 'widget' => 'single_text', 'html5' => false, 'attr' => ['class' => 'form-control datetimepicker', 'placeholder' => 'Date sortie']])
            ->add('probleme', TextareaType::class, ['label'=> "Problème observé",'attr' => ['class' => 'form-control', 'placeholder' => 'Problème']])
            
            ->add('service', ChoiceType::class, [ 'choices'=> $choicesService, 'attr' => ['class' => 'form-control', 'placeholder' => 'Service']])
            ->add('idLit', ChoiceType::class, ['label'=> "Numéro de lit", 'choices' => $choicesLit, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de lit']])
            ->add('idChambre', ChoiceType::class, ['label'=> "Numéro de chambre",'choices'=> $choicesChambre, 'attr' => ['class' => 'form-control', 'placeholder' => 'Numéro de chambre']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // $resolver->setDefaults([
        //     'data_class' => Sejour::class,
        // ]);
    }
}
