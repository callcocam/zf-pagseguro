<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace PagSeguro\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;


/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class InscritosForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return \PagSeguro\Form\InscritosForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Inscritos', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(InscritosFilter::class));

        //############################################ informações da coluna senderName ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'senderName',
                'options' => [
                    'label' => 'Nome completo',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERNAME'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'senderName',
                    'class' =>'form-control',
                    'title' => 'Nome completo',
                    'placeholder' => 'Nome completo',
                    'data-holder-field' => 'shippingName',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna senderCPF ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'senderCPF',
                'options' => [
                    'label' => 'CPF (somente números)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERCPF'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'senderCPF',
                    'class' =>'form-control',
                    'title' => 'CPF (somente números)',
                    'placeholder' => 'CPF (somente números)',
                    'data-holder-field' => 'senderCPF',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna senderEmail ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'senderEmail',
                'options' => [
                    'label' => 'E-mail',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'senderEmail',
                    'class' =>'form-control',
                    'title' => 'E-mail',
                    'placeholder' => 'E-mail',
                    'data-holder-field' => 'senderEmail',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna senderAreaCode ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'senderAreaCode',
                'options' => [
                    'label' => 'Code/Area',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERAREACODE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'senderAreaCode',
                    'class' =>'form-control',
                    'title' => 'Code/Area',
                    'placeholder' => 'Code/Area',
                    'data-holder-field' => 'senderAreaCode',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna senderPhone ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'senderPhone',
                'options' => [
                    'label' => 'Telefone',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERPHONE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'senderPhone',
                    'class' =>'form-control',
                    'title' => 'Telefone',
                    'placeholder' => 'Telefone',
                    'data-holder-field' => 'senderPhone',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressPostalCode ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressPostalCode',
                'options' => [
                    'label' => 'CEP (somente números)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSPOSTALCODE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressPostalCode',
                    'class' =>'form-control',
                    'title' => 'CEP (somente números)',
                    'placeholder' => 'CEP (somente números)',
                    'data-holder-field' => 'shippingAddressPostalCode',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressStreet ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressStreet',
                'options' => [
                    'label' => 'Rua, Avenida, etc ...',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSSTREET'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressStreet',
                    'class' =>'form-control',
                    'title' => 'Rua, Avenida, etc ...',
                    'placeholder' => 'Rua, Avenida, etc ...',
                    'data-holder-field' => 'shippingAddressStreet',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressNumber ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressNumber',
                'options' => [
                    'label' => 'Número',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSNUMBER'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressNumber',
                    'class' =>'form-control',
                    'title' => 'Número',
                    'placeholder' => 'Número',
                    'data-holder-field' => 'shippingAddressNumber',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna shippingAddressComplement ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressComplement',
                'options' => [
                    'label' => 'Complemento',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSCOMPLEMENT'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressComplement',
                    'class' =>'form-control',
                    'title' => 'Complemento (Casa, Ap)',
                    'placeholder' => 'Complemento (Casa, Ap)',
                    'data-holder-field' => 'shippingAddressComplement',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressDistrict ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressDistrict',
                'options' => [
                    'label' => 'Bairro',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSDISTRICT'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressDistrict',
                    'class' =>'form-control',
                    'title' => 'Bairro',
                    'placeholder' => 'Bairro',
                    'data-holder-field' => 'shippingAddressDistrict',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressCity ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressCity',
                'options' => [
                    'label' => 'Cidade',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSCITY'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressCity',
                    'class' =>'form-control',
                    'title' => 'Cidade',
                    'placeholder' => 'Cidade',
                    'data-holder-field' => 'shippingAddressCity',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressState ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressState',
                'options' => [
                    'label' => 'Estado',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSSTATE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressState',
                    'class' =>'form-control',
                    'title' => 'Estado',
                    'placeholder' => 'Estado',
                    'data-holder-field' => 'shippingAddressState',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna shippingAddressCountry ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'shippingAddressCountry',
                'options' => [
                    'label' => 'Pais',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSCOUNTRY'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'shippingAddressCountry',
                    'class' =>'form-control',
                    'title' => 'Pais',
                    'placeholder' => 'Pais',
                    'data-holder-field' => 'shippingAddressCountry',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'value'=>'BRASIL',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

    }
}