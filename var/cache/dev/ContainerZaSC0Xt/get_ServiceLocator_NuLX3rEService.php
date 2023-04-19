<?php

namespace ContainerZaSC0Xt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NuLX3rEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nuLX3rE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nuLX3rE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'favorisTuroial' => ['privates', '.errored..service_locator.nuLX3rE.App\\Entity\\FavorisTuroial', NULL, 'Cannot autowire service ".service_locator.nuLX3rE": it references class "App\\Entity\\FavorisTuroial" but no such service exists.'],
        ], [
            'favorisTuroial' => 'App\\Entity\\FavorisTuroial',
        ]);
    }
}
