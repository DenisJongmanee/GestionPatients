<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PatientService;
use Symfony\Contracts\HttpClient\HttpClientInterface;

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
        dump($patients);
        return $this->render('patient/index.html.twig', [
            'patients' => $patients
        ]);
    }
}
