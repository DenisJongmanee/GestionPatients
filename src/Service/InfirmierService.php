<?php
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;


class InfirmierService
{
    private $httpclient;

    public function __construct(HttpClientInterface $httpclient)
    {
        $this->httpclient = $httpclient;
    }

    public function getApi(string $param = "")
    {
        return $this->httpclient->request(
            'GET',
            '//127.0.0.1:/api/infirmier/' . $param
        );
    }
    
    public function getAllInfirmier() {
        $response = $this->getApi();
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }
}