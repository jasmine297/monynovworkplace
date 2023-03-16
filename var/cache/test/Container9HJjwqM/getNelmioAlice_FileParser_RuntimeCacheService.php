<?php

namespace Container9HJjwqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_RuntimeCacheService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.runtime_cache' shared service.
     *
     * @return \Nelmio\Alice\Parser\RuntimeCacheParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/RuntimeCacheParser.php';

        return $container->privates['nelmio_alice.file_parser.runtime_cache'] = new \Nelmio\Alice\Parser\RuntimeCacheParser(($container->privates['nelmio_alice.file_parser.registry'] ?? $container->load('getNelmioAlice_FileParser_RegistryService')), ($container->privates['hautelook_alice.alice.file_locator.kernel'] ?? $container->load('getHautelookAlice_Alice_FileLocator_KernelService')), ($container->privates['nelmio_alice.file_parser.default_include_processor'] ?? $container->load('getNelmioAlice_FileParser_DefaultIncludeProcessorService')));
    }
}
