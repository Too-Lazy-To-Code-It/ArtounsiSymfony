<?php

namespace Container2XUAcFU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GTO9GIYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gTO9GIY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gTO9GIY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participation' => ['privates', '.errored..service_locator.gTO9GIY.App\\Entity\\Participation', NULL, 'Cannot autowire service ".service_locator.gTO9GIY": it references class "App\\Entity\\Participation" but no such service exists.'],
        ], [
            'participation' => 'App\\Entity\\Participation',
        ]);
    }
}
