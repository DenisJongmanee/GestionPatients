<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SejourType;

class AjoutSejourController extends AbstractController
{
    #[Route('/ajout_sejour', name: 'ajout_sejour')]
    public function index(): Response
    {
        $form = $this->createForm(SejourType::class);

        return $this->render('ajout_sejour/index.html.twig', [
            'SejourController' => $form->createView(),
        ]);
    }
}
