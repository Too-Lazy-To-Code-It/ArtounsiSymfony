<?php

namespace Container4NSx1DB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KoNxlQaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.koNxlQa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.koNxlQa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lignepanierRepository' => ['privates', 'App\\Repository\\LignepanierRepository', 'getLignepanierRepositoryService', true],
        ], [
            'lignepanierRepository' => 'App\\Repository\\LignepanierRepository',
        ]);
    }
}
