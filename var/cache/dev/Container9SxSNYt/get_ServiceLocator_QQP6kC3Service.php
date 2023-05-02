<?php

namespace Container9SxSNYt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QQP6kC3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QQP6kC3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QQP6kC3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artiste' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'artiste' => 'App\\Repository\\ArtistepostulerRepository',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'paginator' => '?',
        ]);
    }
}
