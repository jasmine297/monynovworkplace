<?php

namespace Container9HJjwqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Hydrator_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.hydrator.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Hydrator\SimpleHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/HydratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/SimpleHydrator.php';

        return $container->privates['nelmio_alice.generator.hydrator.simple'] = new \Nelmio\Alice\Generator\Hydrator\SimpleHydrator(($container->privates['nelmio_alice.generator.hydrator.property.symfony_property_access'] ?? $container->load('getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService')));
    }
}
