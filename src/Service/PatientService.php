<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;

class PatientService
{
    private $httpclient;

    public function __construct(HttpClientInterface $httpclient)
    {
        $this->httpclient = $httpclient;
        $this->url = 'http://127.0.0.1:5000/api/patient';
    }

    public function getApi(string $param = "")
    {
        if ($param != "") $param = "/" . $param; 
        
        return $this->httpclient->request(
            'GET',
            $this->url . $param
        );
    }
    
    public function getPatients() {
        $response = $this->getApi();
        
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }

    public function getPatient(string $id) {
        $response = $this->getApi($id);
        
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }
   

    public function postPatient($patient)
    {
        return $this->httpclient->request('POST', $this->url, [
            'json' => $patient
        ]);
    }

    public function putPatient($patient)
    {
        return $this->httpclient->request('PUT', $this->url, [
            'json' => $patient
        ]);
    }

    public function getPatients_sejour() 
    {
        $response = $this->httpclient->request(
            'GET',
            'http://127.0.0.1:5000/api/patient_sejour'
        );
        if ($response->getStatusCode() == 200) {
            return $response->toArray();
        }
    }
}