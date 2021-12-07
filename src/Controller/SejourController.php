<?php

namespace App\Controller;

use App\Form\SejourType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SejourController extends AbstractController
{
    #[Route('/sejour', name: 'sejour')]
    public function index(): Response
    {

        $form = $this->createForm(SejourType::class);

        return $this->render('sejour/index.html.twig', [
            'SejourController' => $form->createView(),
        ]);
    }
}
