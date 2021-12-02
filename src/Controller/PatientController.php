<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PatientService;
use symfony\contracts\HttpClient\HttpClientInterface;

class PatientController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    #[Route('/patient', name: 'patient')]
    public function index(PatientService $api ): Response
    {
        #$patients = $api -> getAllPatients();
        $patients = $this -> client -> request(
            'GET', 
            '//127.0.0.1:/code_python_gestion_patients/ListePatient'
        );
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
            'patients' => $patients
        ]);
    }
}
