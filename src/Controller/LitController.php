<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LitController extends AbstractController
{
    #[Route('/lit', name: 'lit')]
    public function index(): Response
    {
        return $this->render('lit/index.html.twig', [
            'controller_name' => 'LitController',
        ]);
    }
}
