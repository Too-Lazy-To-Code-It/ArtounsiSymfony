<?php

namespace ContainerICS4CEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UtbtSkpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UtbtSkp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UtbtSkp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravailarchive' => ['privates', '.errored..service_locator.UtbtSkp.App\\Entity\\Offretravailarchive', NULL, 'Cannot autowire service ".service_locator.UtbtSkp": it references class "App\\Entity\\Offretravailarchive" but no such service exists.'],
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'offretravailarchive' => 'App\\Entity\\Offretravailarchive',
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
