<?php
namespace PagSeguro\Services;

use Admin\Model\Pagseguro\PagseguroRepository;
use Base\Model\Cache;
use Base\Services\Client;
use Interop\Container\ContainerInterface;

class Checkout {

	private $pagSeguroData;
    private $containerInterface;
    protected $statusCode;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param ContainerInterface $containerInterface
     * @param bool $sandbox
     */
    public function __construct(ContainerInterface $containerInterface,$sandbox = true) {
        if(!$containerInterface->get(Cache::class)->hasItem('issusers')){
            $containerInterface->get('issusers');
        }
        $issusers=$containerInterface->get(Cache::class)->getItem('issusers');
        $configPagSeguro=$containerInterface->get(PagseguroRepository::class)->findOneBy(['empresa'=>$issusers['id']]);
        if($configPagSeguro->getResult()) {
            $configPagSeguro = $configPagSeguro->getData()->toArray();
            $configPagSeguro['ambiente'] = $configPagSeguro['ambiente']=='sandbox'?true:false;
            $this->pagSeguroData = new PagSeguroData($configPagSeguro, $configPagSeguro['ambiente']);

        }

        $this->containerInterface=$containerInterface;
	}

	public function showTemplate() {
		$isSandbox = $this->pagSeguroData->isSandbox();
//require 'templates/checkout.php';
		exit();
	}


	public function printSessionId() {
        /**
         * @var $httpConnection Client
         */
        // Creating a http connection (CURL abstraction)
        //$httpConnection = new HttpConnection();
        $httpConnection = $this->containerInterface->get(Client::class);
        //$httpConnection->post($this->pagSeguroData->getSessionURL(), $this->pagSeguroData->getCredentials());
        $httpConnection->setUri($this->pagSeguroData->getSessionURL());
        $httpConnection->setMethod('POST');
        $httpConnection->setParameterPost( $this->pagSeguroData->getCredentials());
        $response = $httpConnection->send();
        if ($response->isSuccess()) {
            // Request OK getting the result
            //if ($httpConnection->getStatus() === 200) {
			$data = $response->getBody();
			$sessionId = $this->parseSessionIdFromXml($data);
			return $sessionId;
		} else {
			throw new \Exception("API Request Error: ".$httpConnection->getResponse()->getStatusCode());

		}

	}

	public function getSessionId() {
        /**
         * @var $httpConnection Client
         */
        // Creating a http connection (CURL abstraction)
		//$httpConnection = new HttpConnection();
		$httpConnection = $this->containerInterface->get(Client::class);
        // Request to PagSeguro Session API using Credentials
		//$httpConnection->post($this->pagSeguroData->getSessionURL(), $this->pagSeguroData->getCredentials());
        $httpConnection->setUri($this->pagSeguroData->getSessionURL());
        $httpConnection->setMethod('POST');
        $httpConnection->setParameterPost( $this->pagSeguroData->getCredentials());
        $response = $httpConnection->send();
        if ($response->isSuccess()) {
        // Request OK getting the result
		//if ($httpConnection->getStatus() === 200) {
			$data = $httpConnection->getResponse();
			$sessionId = $this->parseSessionIdFromXml($data);
			return $sessionId;
		} else {

			throw new \Exception("API Request Error: ".$httpConnection->getResponse()->getStatusCode());

		}

	}

	public function doPayment($params) {

        /**
         * @var $httpConnection Client
         */
        // Adding parameters
        $params += $this->pagSeguroData->getCredentials(); // add credentials
		$params['paymentMode'] = 'default'; // paymentMode
		$params['currency'] = 'BRL'; // Currency (only BRL)
		$params['reference'] = $params['reference']; // Setting the Application Order to Reference on PagSeguro
		$params['notificationURL'] = $this->pagSeguroData->getNotification(); // Setting the Application Order to Reference on PagSeguro
        if( $this->pagSeguroData->isSandbox()){
            $params['senderEmail']='email@sandbox.pagseguro.com.br';
        }
		 // treat parameters here!
		$httpConnection = $this->containerInterface->get(Client::class);//new HttpConnection();
	    $httpConnection->setUri($this->pagSeguroData->getTransactionsURL());
        $httpConnection->setMethod('POST');
        $httpConnection->setParameterPost($params);
        $httpConnection->setHeaders(['access-control-allow-origin'=>'https://sandbox.pagseguro.uol.com.br']);
        $response = $httpConnection->send();
        if ($response->isSuccess()) {
            // Get Xml From response body
            $xmlArray = $this->paymentResultXml($response->getBody());
            $this->statusCode=$response->getStatusCode();
        }
        else{
            $xmlArray=$this->paymentResultXml($response->getBody());
            $this->statusCode=$response->getStatusCode();
        }
        // Setting http status and show json as result
        //http_response_code($httpConnection->getStatus());
		//header("HTTP/1.1 ".$httpConnection->getStatus());
		return $xmlArray;

	}

	private function parseSessionIdFromXml($data) {

// Creating an xml parser
		$xmlParser = new XmlParser($data);

// Verifying if is an XML
		if ($xml = $xmlParser->getResult("session")) {

// Retrieving the id from "session node"
			return $xml['id'];

		} else {
			throw new \Exception("[$data] is not an XML");
		}

	}


	private function paymentResultXml($data) {
  // Creating an xml parser
		$xmlParser = new XmlParser($data);

// Verifying if is an XML
		if ($xml = $xmlParser->getResult()) {
			return $xml;
		} else {
			throw new \Exception("[$data] is not an XML");
		}

	}



}