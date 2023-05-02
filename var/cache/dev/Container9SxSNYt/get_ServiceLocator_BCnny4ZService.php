<?php

namespace Container9SxSNYt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BCnny4ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bCnny4Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bCnny4Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ac' => ['services', 'App\\Controller\\AllusersController', 'getAllusersControllerService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'banRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
        ], [
            'ac' => 'App\\Controller\\AllusersController',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'banRepository' => 'App\\Repository\\BanRepository',
        ]);
    }
}
