<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace PagSeguro\Form;

use Interop\Container\ContainerInterface;
use PagSeguro\Validator\Cpf;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\Validator\EmailAddress;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class SenderFilter extends InputFilter
{

    /**
     * construct do Table
     *
     * @return \PagSeguro\Form\SenderFilter
     * @param ContainerInterface $containerInterface
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        
        //############################################ informações da coluna senderName ##############################################:
        $this->add([
            'name' => 'senderName',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna senderCPF ##############################################:
        $this->add([
            'name' => 'senderCPF',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                    'name' => Cpf::class,
                    'options' => [
                        'messages' => [Cpf::IS_EMPTY => "Oops! Cpf Invalido"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna senderEmail ##############################################:
        $this->add([
            'name' => 'senderEmail',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                    [
                        'name' => EmailAddress::class,
                        'options' => [
                            'messages' => [EmailAddress::INVALID_FORMAT => "Formato Do Email Não E Valido"]
                        ],
                    ]
                ],
            ],
        ]);


        //############################################ informações da coluna senderAreaCode ##############################################:
        $this->add([
            'name' => 'senderAreaCode',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
                [
                    'name'=>StringLength::class,
                    'options' => [
                        'min' => 2,
                        'max' => 2,
                        'messages' => [StringLength::TOO_LONG => "Telefone Invalido maior que o permitido, Deve conter 2 Digitos",
                            StringLength::TOO_SHORT => "Telefone Invalido menor que o permitido, Deve conter 2 Digitos"]

                    ],
                ]
            ],
        ]);


        //############################################ informações da coluna senderPhone ##############################################:
        $this->add([
            'name' => 'senderPhone',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
                [
                    'name'=>StringLength::class,
                    'options' => [
                        'min' => 9,
                        'max' => 9,
                        'messages' => [StringLength::TOO_LONG => "Telefone Invalido maior que o permitido, Deve conter 9 Digitos",
                            StringLength::TOO_SHORT => "Telefone Invalido menor que o permitido, Deve conter 9 Digitos"]

                    ],
                ]
            ],
        ]);


        //############################################ informações da coluna shippingAddressStreet ##############################################:
        $this->add([
            'name' => 'shippingAddressStreet',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressNumber ##############################################:
        $this->add([
            'name' => 'shippingAddressNumber',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressDistrict ##############################################:
        $this->add([
            'name' => 'shippingAddressDistrict',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressPostalCode ##############################################:
        $this->add([
            'name' => 'shippingAddressPostalCode',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressCity ##############################################:
        $this->add([
            'name' => 'shippingAddressCity',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressState ##############################################:
        $this->add([
            'name' => 'shippingAddressState',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressCountry ##############################################:
        $this->add([
            'name' => 'shippingAddressCountry',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);


        //############################################ informações da coluna shippingAddressComplement ##############################################:
        $this->add([
            'name' => 'shippingAddressComplement',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [],
        ]);

    }
}