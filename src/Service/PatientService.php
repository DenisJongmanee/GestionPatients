<?php
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;


class PatientService
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
            '//127.0.0.1:/api/patient/' . $param
        );
    }
    
    public function getAllPatients() {
        $response = $this->getApi();
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }

    public function getOnePatient(string $param) {
        $response = $this->getApi($param);

        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }
   

    public function postPatient(string $patient)
    {
        return $this->httpclient->request('POST', '//127.0.0.1:/api/patient/', [
            'json' => $patient
        ]);
    }
}