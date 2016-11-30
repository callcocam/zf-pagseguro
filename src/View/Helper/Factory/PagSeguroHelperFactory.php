<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 18/11/2016
 * Time: 21:34
 */

namespace PagSeguro\View\Helper\Factory;

use Interop\Container\ContainerInterface;
use PagSeguro\Services\PagSeguroData;
use PagSeguro\View\Helper\PagSeguroHelper;
use Zend\ServiceManager\Factory\FactoryInterface;

class PagSeguroHelperFactory implements FactoryInterface {

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
        $PagSeguroConfig=$container->get('Config')['pagseguro'];
        $sandbox=$PagSeguroConfig['ambiente']=='sandbox'?true:false;
        $pagSeguroData = new PagSeguroData($PagSeguroConfig,$sandbox);
        return new PagSeguroHelper($pagSeguroData);

    }
}