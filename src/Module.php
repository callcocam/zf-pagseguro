<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace PagSeguro;

use PagSeguro\Form\CardFilter;
use PagSeguro\Form\CardForm;
use PagSeguro\Form\Factory\CardFilterFactory;
use PagSeguro\Form\Factory\CardFormFactory;
use PagSeguro\Form\Factory\HolderFilterFactory;
use PagSeguro\Form\Factory\HolderFormFactory;
use PagSeguro\Form\HolderFilter;
use PagSeguro\Form\HolderForm;
use PagSeguro\Services\Factory\PagSeguroDataFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ConfigProviderInterface, ViewHelperProviderInterface, ServiceProviderInterface
{
    const VERSION = '3.0.2dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getViewHelperConfig()
    {
        return [
            'factories'=>[
                'pagSeguroData'=>PagSeguroDataFactory::class
            ],
            'invokables'=>[

            ]
        ];
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories'=>[
               CardForm::class=>CardFormFactory::class,
               CardFilter::class=>CardFilterFactory::class,
               HolderForm::class=>HolderFormFactory::class,
               HolderFilter::class=>HolderFilterFactory::class,
            ],
            'invokables'=>[

            ]
        ];
    }
}
