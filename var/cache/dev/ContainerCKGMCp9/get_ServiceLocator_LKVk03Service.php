<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LKVk03Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LK_Vk03' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LK_Vk03'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'favorisTuroialRepository' => ['privates', 'App\\Repository\\FavorisTuroialRepository', 'getFavorisTuroialRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'tr' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'favorisTuroialRepository' => 'App\\Repository\\FavorisTuroialRepository',
            'mr' => '?',
            'normalizer' => '?',
            'tr' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
