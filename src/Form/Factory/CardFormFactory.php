<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 19/11/2016
 * Time: 12:23
 */

namespace PagSeguro\Form\Factory;


use Interop\Container\ContainerInterface;
use PagSeguro\Form\CardForm;
use Zend\ServiceManager\Factory\FactoryInterface;

class CardFormFactory implements FactoryInterface {

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CardForm($container);
    }
}