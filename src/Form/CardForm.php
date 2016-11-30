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
class CardForm extends AbstractForm
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
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(InscritosFilter::class));

        //############################################ informações da coluna senderName ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cardNumber',
                'options' => [
                    'label' => 'Numero Do Cartão',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERNAME'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cardNumber',
                    'class' =>'form-control cardDatainput',
                    'title' => 'Numero Do Cartão',
                    'placeholder' => 'Numero Do Cartão',
                    'data-holder-field' => 'cardNumber',
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
                'name' => 'cardExpirationMonth',
                'options' => [
                    'label' => 'Data de Vencimento',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERCPF'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cardExpirationMonth',
                    'class' =>'form-control cardDatainput month',
                    'title' => 'Data de Vencimento (99/9999)',
                    'placeholder' => '99',
                    'data-holder-field'=>'cardExpirationMonth',
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
                'name' => 'cardExpirationYear',
                'options' => [
                    'label' => ' (99/9999)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERCPF'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cardExpirationYear',
                    'class' =>'form-control cardDatainput year',
                    'title' => 'CPF (somente números)',
                    'placeholder' => '9999',
                    'data-holder-field'=>'cardExpirationYear',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna cardCvv ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cardCvv',
                'options' => [
                    'label' => 'CVV',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDEREMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'cardCvv',
                    'class' =>'form-control cardDatainput cvv',
                    'title' => 'Código de Segurança',
                    'placeholder' => 'Código de Segurança',
                    'data-holder-field'=>'cardCvv',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna installmentQuantity ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'installmentQuantity',
                'options' => [
                    'label' => 'Parcelamento',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SENDERAREACODE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'installmentQuantity',
                    'class' =>'form-control',
                    'title' => 'Parcelamento',
                    'data-holder-field'=>'installmentQuantity',
                       //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna holderType ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'holderType',
                'options' =>[],
                'attributes' => [
                   'id'=>'holderType',
                    'value'=>'sameHolder',
                    'data-holder-field'=>'holderType',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna installmentValue ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'installmentValue',
                'options' => [],
                'attributes' => [
                    'id'=>'installmentValue',
                    'data-holder-field'=>'installmentValue',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna creditCardHolderBirthDate ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardHolderBirthDate',
                'options' => [
                    'label' => 'Data de Nascimento (99/99/9999)',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label radio-inline radio-styled','for'=>'SHIPPINGADDRESSPOSTALCODE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'creditCardHolderBirthDate',
                    'class' =>'form-control',
                    'title' => 'Data de Nascimento (99/99/9999)',
                    'placeholder' => 'Data de Nascimento (99/99/9999)',
                    'data-holder-field'=>'creditCardHolderBirthDate',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna creditCardToken ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardToken',
                'options' => [],
                'attributes' => [
                    'id'=>'creditCardToken',
                    'data-holder-field'=>'creditCardToken',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna creditCardBrand ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'creditCardBrand',
                'options' => [],
                'attributes' => [
                    'id'=>'creditCardBrand',
                    'data-holder-field'=>'creditCardBrand',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );
       $this->setSave([
           'name' => 'creditCardPaymentButton',
           'type' => 'button',
           'attributes' => [
               'type' => 'submit',
               'class'=>'btn ink-reaction btn-floating-action btn-lg btn-primary',
               'title'=>'Pargar Com Cartão',
               'id'=>'creditCardPaymentButton'],
           'options' => [
               'label' =>'Pargar Com Cartão',
               'data-holder-field'=>'creditCardPaymentButton',
               'column-size' => 'sm-12',
               'glyphicon'=>'md md-save',
               'add-on-append'=>'']
       ]);

    }
}