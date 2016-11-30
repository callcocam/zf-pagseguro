<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 18/11/2016
 * Time: 20:46
 */

namespace PagSeguro\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use PagSeguro\Form\CardForm;
use PagSeguro\Form\HolderForm;
use PagSeguro\Form\InscritosFilter;
use PagSeguro\Form\InscritosForm;
use PagSeguro\Services\Checkout;

use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class PagSeguroController extends AbstractController {

    public function __construct(ContainerInterface $containerInterface){
        $this->containerInterface=$containerInterface;
        $this->form=InscritosForm::class;
        $this->filter=InscritosFilter::class;
    }
    public function indexAction()
    {
        $form=$this->getForm();
        $formHolder=$this->getForm(HolderForm::class);
        if($this->cache->hasItem('dadosComprador')){
            $form->setData($this->cache->getItem('dadosComprador'));
            $formHolder->setData($this->cache->getItem('holderdadosComprador'));
        }
        $formCard=$this->getForm(CardForm::class);
        return new ViewModel(['form'=>$form,'formCard'=>$formCard,'holderForm'=>$formHolder]);
    }

    public function sessionidAction(){
        $checkout = new Checkout($this->containerInterface);
        return new JsonModel(['sessionid'=> $checkout->printSessionId()]);
    }

    public function paymentAction()
    {
        $checkout = new Checkout($this->containerInterface);
        $params=$this->params()->fromPost();
        $params['reference']=$this->cache->getItem('reference');
        $result=$checkout->doPayment($params);
        $response = $this->getResponse();
        $response->setStatusCode($checkout->getStatusCode());
        if($checkout->getStatusCode()=='200'){
         
        }
        return new JsonModel($result);
    }

    public function itemsAction(){
        return new JsonModel(['items'=>$this->cache->getItem('item')]);
    }
    public function completAction(){

        if(!$this->cache->hasItem('dadosComprador')){
            return $this->redirect()->toRoute('home-site');
        }
        $inscrito=$this->cache->getItem('dadosComprador');
        $view=new ViewModel(['user'=>$this->user,'inscrito'=>$inscrito]);
        $view->setTemplate("/pag-seguro/pag-seguro/complet");
        return $view;

    }
}