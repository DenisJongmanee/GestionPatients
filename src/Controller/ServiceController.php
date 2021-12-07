<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ServiceService;
use Symfony\Contracts\HttpClient\HttpClientInterface;
class ServiceController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }

    #[Route('/service', name: 'service')]
    public function index(ServiceService $api): Response
    {

        $services = $api->getServices();
        
        return $this->render('service/index.html.twig', [
            'services' => $services
        ]);
    }
}
