<?php

namespace ContainerY5YT4az;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4C83FMeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4C83FMe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4C83FMe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rating' => ['privates', '.errored..service_locator.4C83FMe.App\\Entity\\Rating', NULL, 'Cannot autowire service ".service_locator.4C83FMe": it references class "App\\Entity\\Rating" but no such service exists.'],
        ], [
            'rating' => 'App\\Entity\\Rating',
        ]);
    }
}
