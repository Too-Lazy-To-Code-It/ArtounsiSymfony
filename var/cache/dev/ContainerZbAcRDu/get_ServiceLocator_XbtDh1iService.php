<?php

namespace ContainerZbAcRDu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XbtDh1iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XbtDh1i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XbtDh1i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
