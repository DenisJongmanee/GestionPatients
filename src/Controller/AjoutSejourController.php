<?php

namespace App\Controller;

use App\Entity\Sejour;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SejourType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Service\SejourService;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AjoutSejourController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    #[Route('/ajout_sejour', name: 'ajout_sejour')]
    public function ajout_sejour(Request $request, SejourService $api): Response
    {
        $sejour = new Sejour();
        $form = $this->createForm(SejourType::class, $sejour, ['method'=>'POST'] );
        $form->add('ajouter', SubmitType::class, [ 'label' => 'Ajouter', 'attr' => ['class' => 'btn btn-primary']]);
        
        $form->handleRequest($request);
        dump($request);
        // if ($form->isSubmitted()) 
        // {
        //     $api->postSejour($sejour)
        // }

        return $this->render('ajout_sejour/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
