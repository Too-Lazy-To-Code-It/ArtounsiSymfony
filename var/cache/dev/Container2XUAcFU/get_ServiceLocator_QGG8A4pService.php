<?php

namespace Container2XUAcFU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QGG8A4pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QGG8A4p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QGG8A4p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'video' => ['privates', '.errored..service_locator.QGG8A4p.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.QGG8A4p": it references class "App\\Entity\\Video" but no such service exists.'],
        ], [
            'video' => 'App\\Entity\\Video',
        ]);
    }
}
