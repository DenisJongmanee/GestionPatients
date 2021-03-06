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
            ->add('dateEntree', DateTimeType::class, ['label'=> "Date d'entre?? du s??jour", 'attr' => ['class' => 'form-control', 'placeholder' => 'Date entr??e']])
            ->add('dateSortie', DateTimeType:: class, ['label'=> "Date de sortie du s??jour", 'attr' => ['class' => 'form-control datetimepicker', 'placeholder' => 'Date sortie']])
            ->add('probleme', TextareaType::class, ['label'=> "Probl??me observ??",'attr' => ['class' => 'form-control', 'placeholder' => 'Probl??me']])
            
            ->add('service', ChoiceType::class, [ 'choices'=> $choicesService, 'attr' => ['class' => 'form-control', 'placeholder' => 'Service']])
            ->add('idLit', ChoiceType::class, ['label'=> "Num??ro de lit", 'choices' => $choicesLit, 'attr' => ['class' => 'form-control', 'placeholder' => 'Num??ro de lit']])
            ->add('idChambre', ChoiceType::class, ['label'=> "Num??ro de chambre",'choices'=> $choicesChambre, 'attr' => ['class' => 'form-control', 'placeholder' => 'Num??ro de chambre']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // $resolver->setDefaults([
        //     'data_class' => Sejour::class,
        // ]);
    }
}
