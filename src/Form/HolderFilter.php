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
use Zend\Validator\NotEmpty;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class HolderFilter extends InputFilter
{

    /**
     * construct do Table
     *
     *
     * @param ContainerInterface $containerInterface
     */
    public function __construct(ContainerInterface $containerInterface)
    {
       

        //############################################ informações da coluna  cardNumber##############################################:
        $this->add([
            'name' => 'creditCardHolderName',
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


        //############################################ informações da coluna cardExpirationYear ##############################################:
        $this->add([
            'name' => 'creditCardHolderCPF',
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

        //############################################ informações da coluna creditCardHolderAreaCode ##############################################:
        $this->add([
            'name' => 'creditCardHolderAreaCode',
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
                    ]
                ],
            ],
        ]);


        //############################################ informações da coluna creditCardHolderPhone ##############################################:
        $this->add([
            'name' => 'creditCardHolderPhone',
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
                    ]
                ],
            ],
        ]);

          //############################################ informações da coluna billingAddressPostalCode ##############################################:
        $this->add([
            'name' => 'billingAddressPostalCode',
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
                    ]
                ],
            ],
        ]);

        //############################################ informações da coluna billingAddressCity ##############################################:
        $this->add([
            'name' => 'billingAddressCity',
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
                    ]
                ],
            ],
        ]);
        
        //############################################ informações da coluna billingAddressState ##############################################:
        $this->add([
            'name' => 'billingAddressStates',
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
                    ]
                ],
            ],
        ]);

        //############################################ informações da coluna billingAddressDistrict ##############################################:
        $this->add([
            'name' => 'billingAddressDistrict',
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
                    ]
                ],
            ],
        ]);

          //############################################ informações da coluna billingAddressStreet ##############################################:
        $this->add([
            'name' => 'billingAddressStreet',
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
                    ]
                ],
            ],
        ]);

          //############################################ informações da coluna billingAddressNumber ##############################################:
        $this->add([
            'name' => 'billingAddressNumber',
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
                    ]
                ],
            ],
        ]);

        //############################################ informações da coluna billingAddressComplement ##############################################:
        $this->add([
            'name' => 'billingAddressComplement',
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
                    ]
                ],
            ],
        ]);


        //############################################ informações da coluna billingAddressCountry ##############################################:
        $this->add([
            'name' => 'billingAddressCountry',
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
                    ]
                ],
            ],
        ]);
        
    }
}