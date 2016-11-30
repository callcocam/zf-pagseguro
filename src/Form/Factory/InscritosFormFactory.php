<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 19/11/2016
 * Time: 12:23
 */

namespace PagSeguro\Form\Factory;


use Interop\Container\ContainerInterface;
use PagSeguro\Form\InscritosForm;
use Zend\ServiceManager\Factory\FactoryInterface;

class InscritosFormFactory implements FactoryInterface {

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
        return new InscritosForm($container);
    }
}