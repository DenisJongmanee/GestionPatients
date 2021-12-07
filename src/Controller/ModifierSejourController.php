<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SejourType;

class ModifierSejourController extends AbstractController
{
    #[Route('/modifier_sejour', name: 'modifier_sejour')]
    public function index(): Response
    {
        $form = $this->createForm(SejourType::class);

        return $this->render('modifier_sejour/index.html.twig', [
            'SejourController' => $form->createView(),
        ]);
    }
}
