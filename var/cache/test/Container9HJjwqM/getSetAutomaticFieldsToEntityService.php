<?php

namespace Container9HJjwqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSetAutomaticFieldsToEntityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\SetAutomaticFieldsToEntity' shared autowired service.
     *
     * @return \App\EventSubscriber\SetAutomaticFieldsToEntity
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/SetAutomaticFieldsToEntity.php';

        return $container->privates['App\\EventSubscriber\\SetAutomaticFieldsToEntity'] = new \App\EventSubscriber\SetAutomaticFieldsToEntity(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
