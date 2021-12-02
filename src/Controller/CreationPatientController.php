<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationPatientController extends AbstractController
{
    #[Route('/creation/patient', name: 'creation_patient')]
    public function index(): Response
    {
        return $this->render('creation_patient/index.html.twig', [
            'controller_name' => 'CreationPatientController',
        ]);
    }
}
