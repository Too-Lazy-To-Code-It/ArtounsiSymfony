<?php

namespace ContainerO0mQVxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1iQsUAHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1iQsUAH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1iQsUAH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alluser' => ['privates', '.errored..service_locator.1iQsUAH.App\\Entity\\Allusers', NULL, 'Cannot autowire service ".service_locator.1iQsUAH": it references class "App\\Entity\\Allusers" but no such service exists.'],
        ], [
            'alluser' => 'App\\Entity\\Allusers',
        ]);
    }
}
