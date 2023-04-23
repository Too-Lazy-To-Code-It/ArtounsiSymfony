<?php

namespace Container3QAziBl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1VR36qKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1VR36qK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1VR36qK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panier' => ['privates', '.errored..service_locator.1VR36qK.App\\Entity\\Panier', NULL, 'Cannot autowire service ".service_locator.1VR36qK": it references class "App\\Entity\\Panier" but no such service exists.'],
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
        ], [
            'panier' => 'App\\Entity\\Panier',
            'panierRepository' => 'App\\Repository\\PanierRepository',
        ]);
    }
}
