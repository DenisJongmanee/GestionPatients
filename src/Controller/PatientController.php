<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PatientService;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Form\PatientType;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PatientController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    #[Route('/patient', name: 'patient')]
    public function index(PatientService $api): Response
    {
        $patients = $api -> getPatients();

        return $this->render('patient/index.html.twig', [
            'patients' => $patients
        ]);
    }

    #[Route('/patient/modification/{id}', name: 'modifier_patient')]
    public function modif_patient(int $id, PatientService $api, Request $request): Response
    {
        $patient = $api->getPatient($id);
        dump($patient["date"]);
        $form = $this->createForm(PatientType::class);
        $form->get('nom')->setData($patient["nom"]);
        $form->get('prenom')->setData($patient["prenom"]);
        $form->get('date')->setData(new DateTime($patient["date"]));
        $form->add('modifier', SubmitType::class, [ 'label' => 'Modifier', 'attr' => ['class' => 'btn btn-primary']]);
        
        if ($patient = $request->get('patient'))  {
            $patient["id"]=$id;
            $api->putPatient($patient);
            return $this->redirectToRoute('patient');
        }
        return $this->render('modifier_patient/index.html.twig', [
            'formPatientModify' => $form->createView(),
        ]);
    }

    #[Route('/patient/ajout', name: 'ajout_patient')]
    public function ajout_patient(Request $request, PatientService $api): Response
    {
        $form = $this->createForm(PatientType::class);
        $form->add('ajouter', SubmitType::class, [ 'label' => 'Ajouter', 'attr' => ['class' => 'btn btn-primary']]);
        $form->handleRequest($request);
        
        if ($patient = $request->get('patient')) 
        {
            $patient['date'] = $patient['date']['year'] . "-" . $patient['date']['month'] . "-" . $patient['date']['day'];
            dump($patient['date']);
            $api->postPatient($patient);
            return $this->redirectToRoute('patient');
        }

        return $this->render('creation_patient/index.html.twig', [
            'formPatient' => $form->createView(),
        ]);
    }


}
