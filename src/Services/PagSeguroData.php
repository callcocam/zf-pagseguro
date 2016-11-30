<?php

namespace PagSeguro\Services;

class PagSeguroData {

    private $sandbox;
    protected $email= "suricatiscontato@gmail.com";
    protected $token="323EA1DD22274956B97396E34AC1F6F4";
    protected $redirecturl;
    protected $notification;
    protected $sessionURL;

    private $sandboxData =[];

    private $productionData = [];

    /**
     * @param $configPagSeguro
     * @param bool $sandbox
     */
    public function __construct($configPagSeguro,$sandbox = false) {
        $this->redirecturl = $configPagSeguro['redirecturl'];
        $this->notification = $configPagSeguro['notification'];
        $this->sandbox = (bool)$sandbox;
        $this->email = $configPagSeguro['email'];
        $this->token = $configPagSeguro['token'];
        $this->getProductionData();
        $this->getSandboxData();
    }

    private function getEnviromentData($key) {
        if ($this->sandbox) {
            return $this->sandboxData[$key];
        } else {
            return $this->productionData[$key];
        }
    }

    public function getSessionURL() {
        return $this->getEnviromentData('sessionURL');
    }

    public function getTransactionsURL() {
        return $this->getEnviromentData('transactionsURL');
    }

    public function getJavascriptURL() {
        return $this->getEnviromentData('javascriptURL');
    }

    public function getCredentials() {
        return $this->getEnviromentData('credentials');
    }

    public function isSandbox() {
        return (bool)$this->sandbox;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @return mixed
     */
    public function getRedirecturl()
    {
        return $this->redirecturl;
    }



    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getProductionData()
    {

        $this->productionData =[
            'credentials' => [
                "email" => $this->getEmail(),
                "token" => $this->getToken()
            ],
            'sessionURL' => "https://ws.pagseguro.uol.com.br/v2/sessions",
            'transactionsURL' => "https://ws.pagseguro.uol.com.br/v2/transactions",
            'javascriptURL' => "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"

        ];
        return $this->productionData;
    }


    /**
     * @return array
     */
    public function getSandboxData()
    {
        $this->sandboxData=[
            'credentials' => [
                "email" =>$this->getEmail(),
                "token" => $this->getToken()
            ],
            'sessionURL' => "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions",
            'transactionsURL' => "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions",
            'javascriptURL' => "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"
        ];
        return $this->sandboxData;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


}