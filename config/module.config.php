<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace PagSeguro;

use PagSeguro\Controller\Factory\PagSeguroControllerFactory;
use Zend\Router\Http\Segment;


return [
    'router' => [
        'routes' => [
              'pagseguro' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/pagseguro[/:action]',
                    'defaults' => [
                        'controller' => Controller\PagSeguroController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PagSeguroController::class => PagSeguroControllerFactory::class,
        ],
    ],
    'view_manager' => [

        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
