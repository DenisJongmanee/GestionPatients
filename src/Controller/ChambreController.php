<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ChambreService;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class ChambreController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }

    #[Route('/chambre', name: 'chambre')]
    public function index(ChambreService $api): Response
    {
        $chambres = $api -> getChambres();

        return $this->render('chambre/index.html.twig', [
            "chambres" => $chambres
        ]);
    }
}
