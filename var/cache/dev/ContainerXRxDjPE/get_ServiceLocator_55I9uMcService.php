<?php

namespace ContainerXRxDjPE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_55I9uMcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.55I9uMc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.55I9uMc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
