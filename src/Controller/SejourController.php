<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SejourController extends AbstractController
{
    #[Route('/sejour', name: 'sejour')]
    public function index(): Response
    {
        return $this->render('sejour/index.html.twig', [
            'SejourController' => $form->createView(),
        ]);
    }
}
