<?php

namespace Container285vWzb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7P87fGMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7P87fGM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7P87fGM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.7P87fGM.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.7P87fGM": it references class "App\\Entity\\Category" but no such service exists.'],
        ], [
            'category' => 'App\\Entity\\Category',
        ]);
    }
}
