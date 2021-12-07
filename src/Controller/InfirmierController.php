<?php

namespace App\Controller;

use App\Service\PersonnelSoignantService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class InfirmierController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    #[Route('/infirmier', name: 'infirmier')]
    public function index(PersonnelSoignantService $api): Response
    {
        $infirmiers = $api-> getPersonnelsSoignant();

        return $this->render('infirmier/index.html.twig', [
            "infirmiers" => $infirmiers
        ]);
    }
}
