<?php

namespace Container9USDC8N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KOe8P1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._KOe8P1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._KOe8P1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alluser' => ['privates', '.errored..service_locator._KOe8P1.App\\Entity\\Allusers', NULL, 'Cannot autowire service ".service_locator._KOe8P1": it references class "App\\Entity\\Allusers" but no such service exists.'],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
        ], [
            'alluser' => 'App\\Entity\\Allusers',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
        ]);
    }
}
