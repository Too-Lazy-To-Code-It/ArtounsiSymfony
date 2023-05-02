<?php

namespace ContainerRxgKTlD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3atRQwAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3atRQwA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3atRQwA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ban' => ['privates', '.errored..service_locator.3atRQwA.App\\Entity\\Ban', NULL, 'Cannot autowire service ".service_locator.3atRQwA": it references class "App\\Entity\\Ban" but no such service exists.'],
            'banRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'ban' => 'App\\Entity\\Ban',
            'banRepository' => 'App\\Repository\\BanRepository',
            'serializer' => '?',
        ]);
    }
}
