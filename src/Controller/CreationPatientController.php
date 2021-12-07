<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PatientType;

class CreationPatientController extends AbstractController
{
    #[Route('/creation_patient', name: 'creation_patient')]
    public function index(): Response
    {
        $form = $this->createForm(PatientType::class);

        return $this->render('creation_patient/index.html.twig', [
            'CreationPatientController' => $form->createView(),
        ]);
    }
}
