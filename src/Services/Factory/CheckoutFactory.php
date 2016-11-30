<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30/11/2016
 * Time: 09:29
 */

namespace PagSeguro\Services\Factory;


use Interop\Container\ContainerInterface;
use PagSeguro\Services\Checkout;
use Zend\ServiceManager\Factory\FactoryInterface;

class CheckoutFactory implements FactoryInterface
{

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
        return new Checkout($container);
    }
}