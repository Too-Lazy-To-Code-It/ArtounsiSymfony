<?php

namespace Container4NSx1DB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A1A1oA0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a1A1oA0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a1A1oA0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'category' => ['privates', '.errored..service_locator.a1A1oA0.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.a1A1oA0": it references class "App\\Entity\\Category" but no such service exists.'],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'category' => 'App\\Entity\\Category',
        ]);
    }
}
