<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 18/11/2016
 * Time: 21:34
 */

namespace PagSeguro\Services\Factory;


use Admin\Model\Pagseguro\PagseguroRepository;
use Base\Model\Cache;
use Interop\Container\ContainerInterface;
use PagSeguro\Services\PagSeguroData;
use PagSeguro\View\Helper\PagSeguroDataHelper;
use Zend\ServiceManager\Factory\FactoryInterface;

class PagSeguroDataFactory implements FactoryInterface {

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
        if (!$container->get(Cache::class)->hasItem('issusers')) {
            $container->get('issusers');
        }
        $issusers = $container->get(Cache::class)->getItem('issusers');
        $configPagSeguro = $container->get(PagseguroRepository::class)->findOneBy(['empresa' => $issusers['id']]);
        if($configPagSeguro->getResult()) {
            $configPagSeguro = $configPagSeguro->getData()->toArray();
            $configPagSeguro['ambiente'] = $configPagSeguro['ambiente']=='sandbox'?true:false;
            $pagSeguroData = new PagSeguroData($configPagSeguro,$configPagSeguro['ambiente']);
            return new PagSeguroDataHelper($pagSeguroData);
        }
    }
}