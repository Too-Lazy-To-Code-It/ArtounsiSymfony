<?php

namespace ContainerY5YT4az;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NSkYMkGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nSkYMkG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nSkYMkG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artiste' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'artiste' => 'App\\Repository\\ArtistepostulerRepository',
            'normalizer' => '?',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'serializer' => '?',
        ]);
    }
}
