<?php

namespace ContainerJxmHlSS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZBuIoHbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zBuIoHb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zBuIoHb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'favorisTuroial' => ['privates', '.errored..service_locator.zBuIoHb.App\\Entity\\FavorisTuroial', NULL, 'Cannot autowire service ".service_locator.zBuIoHb": it references class "App\\Entity\\FavorisTuroial" but no such service exists.'],
            'favorisTuroialRepository' => ['privates', 'App\\Repository\\FavorisTuroialRepository', 'getFavorisTuroialRepositoryService', true],
        ], [
            'favorisTuroial' => 'App\\Entity\\FavorisTuroial',
            'favorisTuroialRepository' => 'App\\Repository\\FavorisTuroialRepository',
        ]);
    }
}
