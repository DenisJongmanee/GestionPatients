<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SejourService;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SejourType;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        for($i = 0; $i<count($sejours); $i++) {
            $date = new DateTime($sejours[$i]['date_entree_sejour']);
            $sejours[$i]['date_entree_sejour'] = $date->format('d/m/Y à H:i');
            
            $date = new DateTime($sejours[$i]['date_sortie_sejour']);
            $sejours[$i]['date_sortie_sejour'] = $date->format('d/m/Y à H:i');
        }
        return $this->render('sejour/index.html.twig', [
            "sejours" => $sejours
        ]);
    }

    #[Route('/sejour/ajout', name: 'ajout_sejour')]
    public function ajout_sejour(Request $request, SejourService $api): Response
    {
        
        $form = $this->createForm(SejourType::class);
        $form->add('ajouter', SubmitType::class, [ 'label' => 'Ajouter', 'attr' => ['class' => 'btn btn-primary']]);
        
        $form->handleRequest($request);
        
        if ($sejour = $request->get('sejour')) 
        {
            $sejour['dateEntree'] = $sejour['dateEntree']['date']['year'] . "-" . $sejour['dateEntree']['date']['month'] . "-" . $sejour['dateEntree']['date']['day'] . " " . $sejour['dateEntree']['time']['hour'] . ":" . $sejour['dateEntree']['time']['minute'] . ":00";
            $sejour['dateSortie'] = $sejour['dateSortie']['date']['year'] . "-" . $sejour['dateSortie']['date']['month'] . "-" . $sejour['dateSortie']['date']['day'] . " " . $sejour['dateSortie']['time']['hour'] . ":" . $sejour['dateSortie']['time']['minute'] . ":00";
            
            $api->postSejour($sejour);
            return $this->redirectToRoute('sejour');
        }

        return $this->render('ajout_sejour/index.html.twig', [
            'formSejour' => $form->createView(),
        ]);
    }

    #[Route('/sejour/modification/{id}', name: 'modifier_sejour')]
    public function modif_sejour(int $id, SejourService $api, Request $request): Response
    {
        $sejour = $api ->getSejour($id);
        dump($sejour);
        $patient = $sejour["nom"] . " " . $sejour["prenom"];
        
        $form = $this->createForm(SejourType::class);
        $form ->remove("patient");
        $form->get('dateEntree')->setData(new DateTime($sejour["date_entree_sejour"]));
        $form->get('dateSortie')->setData(new DateTime($sejour["date_sortie_sejour"]));
        $form->get('probleme')->setData($sejour["probleme"]);
        $form->get('service')->setData($sejour["service"]);
        $form->get('idLit')->setData($sejour["lit"]);
        $form->get('idChambre')->setData($sejour["chambre"]);

        if ($sejour = $request->get('sejour'))  {
            $sejour["id"]=$id;
            
            $sejour["dateEntree"] = $sejour["dateEntree"]["date"]["year"] . "-" . $sejour["dateEntree"]["date"]["month"] . "-" . $sejour["dateEntree"]["date"]["day"] . " " . $sejour["dateEntree"]["time"]["hour"] . ":" . $sejour["dateEntree"]["time"]["minute"] . ":00";
            $sejour["dateSortie"] = $sejour["dateSortie"]["date"]["year"] . "-" . $sejour["dateSortie"]["date"]["month"] . "-" . $sejour["dateSortie"]["date"]["day"] . " " . $sejour["dateSortie"]["time"]["hour"] . ":" . $sejour["dateSortie"]["time"]["minute"] . ":00";
            dump($sejour);
            $api->putSejour($sejour);
            return $this->redirectToRoute('sejour');
        }

        return $this->render('modifier_sejour/index.html.twig', [
            'SejourController' => $form->createView(),
            'patient' => $patient
        ]);
    }
}




