<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PatientType;

class ModifierPatientController extends AbstractController
{
    #[Route('/modifier_patient', name: 'modifier_patient')]
    public function index(): Response
    {
        $form = $this->createForm(PatientType::class);

        return $this->render('modifier_patient/index.html.twig', [
            'CreationPatientController' => $form->createView(),
        ]);
    }
}
