<?php

namespace ContainerO0mQVxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LrPeSHZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lrPeSHZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lrPeSHZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'qrcodeService' => ['privates', 'App\\Services\\QrcodeService', 'getQrcodeServiceService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'CategoryRepository' => 'App\\Repository\\CategoryRepository',
            'mr' => '?',
            'paginator' => '?',
            'qrcodeService' => 'App\\Services\\QrcodeService',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
