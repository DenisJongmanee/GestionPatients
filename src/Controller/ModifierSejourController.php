<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierSejourController extends AbstractController
{
    #[Route('/modifier_sejour', name: 'modifier_sejour')]
    public function index(): Response
    {
        return $this->render('modifier_sejour/index.html.twig', [
            'controller_name' => 'ModifierSejourController',
        ]);
    }
}
