<?php

namespace ContainerWbB3sj6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JQ_Ubn6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JQ.Ubn6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JQ.Ubn6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.JQ.Ubn6.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.JQ.Ubn6": it references class "App\\Entity\\Post" but no such service exists.'],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'post' => 'App\\Entity\\Post',
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
