<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;


class ChambreService
{
    private $httpclient;

    public function __construct(HttpClientInterface $httpclient)
    {
        $this->httpclient = $httpclient;
        $this->url = 'http://127.0.0.1:5000/api/chambre';
    }

    public function getApi(string $param = "")
    {
        if ($param != "") $param = "/" . $param; 
        
    
        return $this->httpclient->request(
            'GET',
            $this->url . $param
        );
    }
    
    public function getChambres() {
        $response = $this->getApi();
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }

    public function getChambre(string $id) {
        $response = $this->getApi($id);

        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }


}