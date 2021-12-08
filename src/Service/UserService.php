<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Security\Core\User\UserInterface;

class UserService
{
    private $httpclient;

    public function __construct(HttpClientInterface $httpclient)
    {
        $this->httpclient = $httpclient;
        $this->url = 'http://127.0.0.1:5000/api/user/';
    }

    public function getApi(string $param)
    { 
        return $this->httpclient->request(
            'GET',
            $this->url . $param
        );
    }
    

    public function getUser(string $id) {
        $response = $this->getApi($id);
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }

    public function register($user) {
        return $this->httpclient->request('POST', 'http://127.0.0.1:5000/api/user', [
            'json' => $user
        ]);
    }


}