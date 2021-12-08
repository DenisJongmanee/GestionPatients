<?php

namespace App\Controller;

use App\Entity\PersonnelSoigant;
use App\Service\UserService;
use App\Security\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'security_login')]
    public function login(): Response
    {
        return $this->render('connexion/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('connexion/home.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }


    #[Route('/inscription', name: 'security_register')]
    public function register(Request $request, UserService $service, UserPasswordHasherInterface $hasher): Response
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }

    #[Route('/inscription1', name: 'security_register1')]
    public function register1(Request $request, UserService $service, UserPasswordHasherInterface $hasher): Response
    {
        $personnel = [];
        dump($request);
        $personnel['nom'] = $request->get('nom');
        $personnel['prenom'] = $request->get('prenom');
        $personnel['date'] = $request->get('date');
        $personnel['service'] = $request->get('service');
        $personnel['email'] = $request->get('email');
        $personnel['password'] = $request->get('password');
        
        dump($personnel['nom']);
        $user = new User($personnel['email'], $personnel['password']);

        $hash = $hasher->hashPassword($user, $user->getPassword());
        $personnel['password'] = $hash;

        $service->register($personnel);
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'ConnexionController',
        ]);
    }

    #[Route('/deconnexion', name: 'security_logout')]
    public function logout() {
        
    }
    
}
