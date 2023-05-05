<?php

namespace Container4NSx1DB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6b1BO2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o6b1BO2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o6b1BO2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.o6b1BO2.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.o6b1BO2": it references class "App\\Entity\\Post" but no such service exists.'],
            'postLikeRepository' => ['privates', 'App\\Repository\\PostLikeRepository', 'getPostLikeRepositoryService', true],
        ], [
            'post' => 'App\\Entity\\Post',
            'postLikeRepository' => 'App\\Repository\\PostLikeRepository',
        ]);
    }
}
