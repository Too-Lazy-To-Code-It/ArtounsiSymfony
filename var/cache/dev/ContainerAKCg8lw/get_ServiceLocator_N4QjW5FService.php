<?php

namespace ContainerAKCg8lw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N4QjW5FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n4QjW5F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n4QjW5F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artistepostulerRepository' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'artistepostulerRepository' => 'App\\Repository\\ArtistepostulerRepository',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
