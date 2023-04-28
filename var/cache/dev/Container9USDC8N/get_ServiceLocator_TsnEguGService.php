<?php

namespace Container9USDC8N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TsnEguGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tsnEguG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tsnEguG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
        ]);
    }
}
