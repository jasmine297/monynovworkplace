<?php

namespace Container9HJjwqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_Locator_EnvDirectoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hautelook_alice.locator.env_directory' shared service.
     *
     * @return \Hautelook\AliceBundle\Locator\EnvDirectoryLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/FixtureLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Locator/EnvDirectoryLocator.php';

        return $container->privates['hautelook_alice.locator.env_directory'] = new \Hautelook\AliceBundle\Locator\EnvDirectoryLocator($container->parameters['hautelook_alice.fixtures_path'], $container->parameters['hautelook_alice.root_dirs']);
    }
}
