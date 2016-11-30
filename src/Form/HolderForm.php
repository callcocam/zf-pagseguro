<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace PagSeguro\Form;

use Interop\Container\ContainerInterface;
use Zend\Form\Form;


/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class HolderForm extends Form
{

    /**
     * construct do Table
     *
     * @return \PagSeguro\Form\CardForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Card', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct( $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(HolderFilter::class));

        //############################################ informações da coluna senderName ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardHolderName',
                'options' => [
                    'label' => 'Nome (Como está; impresso no cartão)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERNAME'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'creditCardHolderName',
                    'class' =>'form-control',
                    'title' => 'Nome (Como está; impresso no cartão)',
                    'placeholder' => 'Nome (Como está; impresso no cartão)',
                    'data-holder-field' => 'name',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna cardExpirationYear ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardHolderCPF',
                'options' => [
                    'label' => 'CPF (somente números)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERCPF'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'creditCardHolderCPF',
                    'class' =>'form-control',
                    'title' => 'CPF (somente números)',
                    'placeholder' => '000.000.000-00',
                    'data-holder-field' => 'cpf',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna creditCardHolderAreaCode ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardHolderAreaCode',
                'options' => [
                    'label' => 'DDD',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERCPF'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'creditCardHolderAreaCode',
                    'class' =>'form-control',
                    'title' => 'CPF (somente números)',
                    'placeholder' => '9999',
                    'data-holder-field' => 'areaCode',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna creditCardHolderPhone ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardHolderPhone',
                'options' => [
                    'label' => 'Telefone',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'creditCardHolderPhone',
                    'class' =>'form-control ',
                    'title' => 'Código de Segurança',
                    'placeholder' => 'Código de Segurança',
                    'data-holder-field' => 'phone',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );



        //############################################ informações da coluna billingAddressPostalCode ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressPostalCode',
                'options' => [
                    'label' => 'CEP',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressPostalCode',
                    'class' =>'form-control',
                    'title' => 'CEP',
                    'placeholder' => '88950-000',
                    'data-holder-field' => 'postalCode',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna billingAddressCity ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressCity',
                'options' => [
                    'label' => 'Cidade',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressCity',
                    'class' =>'form-control',
                    'title' => 'Cidade',
                    'placeholder' => 'Cidade',
                    'data-holder-field' => 'city',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

 //############################################ informações da coluna billingAddressState ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressState',
                'options' => [
                    'label' => 'Estado',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressState',
                    'class' =>'form-control addressState',
                    'title' => 'Estado',
                    'placeholder' => 'Estado',
                    'data-holder-field' => 'state',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );



        //############################################ informações da coluna billingAddressDistrict ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressDistrict',
                'options' => [
                    'label' => 'Bairro',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressDistrict',
                    'class' =>'form-control',
                    'title' => 'Bairro',
                    'placeholder' => 'Bairro',
                    'data-holder-field' => 'district',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

  //############################################ informações da coluna billingAddressStreet ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressStreet',
                'options' => [
                    'label' => 'Rua, Avenida, etc ...',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressStreet',
                    'class' =>'form-control',
                    'title' => 'Rua, Avenida, etc ...',
                    'placeholder' => 'Rua, Avenida, etc ...',
                    'data-holder-field' => 'street',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

  //############################################ informações da coluna billingAddressNumber ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressNumber',
                'options' => [
                    'label' => 'Número',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressNumber',
                    'class' =>'form-control',
                    'title' => 'Número',
                    'placeholder' => '000',
                    'data-holder-field' => 'number',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna billingAddressComplement ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressComplement',
                'options' => [
                    'label' => 'Complemento',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressComplement',
                    'class' =>'form-control',
                    'title' => 'Complemento',
                    'placeholder' => 'Casa Ou Ap.',
                    'data-holder-field' => 'number',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna billingAddressCountry ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'billingAddressCountry',
                'options' => [
                    'label' => 'Pais',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'billingAddressCountry',
                    'class' =>'form-control',
                    'title' => 'Pais',
                    'placeholder' => 'Pais',
                    'data-holder-field' => 'country',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

    }
}