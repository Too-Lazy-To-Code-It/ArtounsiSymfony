<?php

namespace Container8iicDxe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bj9p3mRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bj9p3mR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bj9p3mR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'BanRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'BanRepository' => 'App\\Repository\\BanRepository',
            'serializer' => '?',
        ]);
    }
}
