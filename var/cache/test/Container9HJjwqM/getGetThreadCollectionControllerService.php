<?php

namespace Container9HJjwqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetThreadCollectionControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\GetThreadCollectionController' shared autowired service.
     *
     * @return \App\Controller\GetThreadCollectionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GetThreadCollectionController.php';

        $container->services['App\\Controller\\GetThreadCollectionController'] = $instance = new \App\Controller\GetThreadCollectionController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\GetThreadCollectionController', $container));

        return $instance;
    }
}
