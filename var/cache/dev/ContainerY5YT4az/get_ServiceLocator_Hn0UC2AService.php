<?php

namespace ContainerY5YT4az;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hn0UC2AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hn0UC2A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hn0UC2A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
