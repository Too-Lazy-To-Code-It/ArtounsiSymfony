<?php

namespace ContainerAqMedpG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JrXlUaFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jrXlUaF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jrXlUaF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'grosmot' => ['privates', '.errored..service_locator.jrXlUaF.App\\Entity\\Grosmots', NULL, 'Cannot autowire service ".service_locator.jrXlUaF": it references class "App\\Entity\\Grosmots" but no such service exists.'],
            'grosmotsRepository' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'grosmot' => 'App\\Entity\\Grosmots',
            'grosmotsRepository' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
