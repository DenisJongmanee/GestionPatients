<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutSejourController extends AbstractController
{
    #[Route('/ajout_sejour', name: 'ajout_sejour')]
    public function index(): Response
    {
        return $this->render('ajout_sejour/index.html.twig', [
            'controller_name' => 'AjoutSejourController',
        ]);
    }
}
