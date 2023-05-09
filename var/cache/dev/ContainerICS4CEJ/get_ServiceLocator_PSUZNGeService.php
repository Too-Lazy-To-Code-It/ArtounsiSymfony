<?php

namespace ContainerICS4CEJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PSUZNGeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PSUZNGe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PSUZNGe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'grosmotsRepository' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'grosmotsRepository' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
