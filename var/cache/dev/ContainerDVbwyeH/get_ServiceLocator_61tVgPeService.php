<?php

namespace ContainerDVbwyeH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_61tVgPeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.61tVgPe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.61tVgPe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'mot' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
            'offretravail' => ['privates', '.errored..service_locator.61tVgPe.App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.61tVgPe": it references class "App\\Entity\\Offretravail" but no such service exists.'],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'mot' => 'App\\Repository\\GrosmotsRepository',
            'offretravail' => 'App\\Entity\\Offretravail',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
