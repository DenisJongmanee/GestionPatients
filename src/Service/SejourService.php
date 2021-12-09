<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;


class SejourService
{
    private $httpclient;

    public function __construct(HttpClientInterface $httpclient)
    {
        $this->httpclient = $httpclient;
        $this->url = 'http://127.0.0.1:5000/api/sejour';
    }

    public function getApi(string $param = "")
    {
        if ($param != "") $param = "/" . $param; 
        
    
        return $this->httpclient->request(
            'GET',
            $this->url . $param
        );
    }
    
    public function getSejours() {
        $response = $this->getApi();
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }

    public function getSejour($id) {
        $response = $this->getApi($id);

        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }
    
    public function postSejour($sejour) {
        $this->httpclient->request(
            'POST',
            $this->url,
            [
                'json' => $sejour
            ]
        );
    }

    public function putSejour($sejour) {
        $this->httpclient->request(
            'PUT',
            $this->url,
            [
                'json' => $sejour
            ]
        );
    }


}