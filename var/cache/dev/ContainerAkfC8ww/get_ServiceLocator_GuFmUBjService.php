<?php

namespace ContainerAkfC8ww;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GuFmUBjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.guFmUBj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.guFmUBj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lignepanier' => ['privates', '.errored..service_locator.guFmUBj.App\\Entity\\Lignepanier', NULL, 'Cannot autowire service ".service_locator.guFmUBj": it references class "App\\Entity\\Lignepanier" but no such service exists.'],
            'lignepanierRepository' => ['privates', 'App\\Repository\\LignepanierRepository', 'getLignepanierRepositoryService', true],
        ], [
            'lignepanier' => 'App\\Entity\\Lignepanier',
            'lignepanierRepository' => 'App\\Repository\\LignepanierRepository',
        ]);
    }
}
