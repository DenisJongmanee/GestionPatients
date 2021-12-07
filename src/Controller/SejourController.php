<?php

namespace App\Controller;

use App\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SejourService;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SejourController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    #[Route('/sejour', name: 'sejour')]
    public function index(SejourService $api): Response
    {

        $sejours = $api->getSejours();
        
        return $this->render('sejour/index.html.twig', [
            "sejours" => $sejours
        ]);
    }
}
