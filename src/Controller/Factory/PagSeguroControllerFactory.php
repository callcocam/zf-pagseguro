<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 19/11/2016
 * Time: 12:30
 */

namespace PagSeguro\Controller\Factory;


use Interop\Container\ContainerInterface;
use PagSeguro\Controller\PagSeguroController;
use Zend\ServiceManager\Factory\FactoryInterface;

class PagSeguroControllerFactory implements FactoryInterface {

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
        return new PagSeguroController($container);
    }
}