<?php

namespace ContainerHwwWQwb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4NXkpslService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4NXkpsl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4NXkpsl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravailarchive' => ['privates', '.errored..service_locator.4NXkpsl.App\\Entity\\Offretravailarchive', NULL, 'Cannot autowire service ".service_locator.4NXkpsl": it references class "App\\Entity\\Offretravailarchive" but no such service exists.'],
        ], [
            'offretravailarchive' => 'App\\Entity\\Offretravailarchive',
        ]);
    }
}
