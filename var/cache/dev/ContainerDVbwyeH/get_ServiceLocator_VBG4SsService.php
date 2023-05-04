<?php

namespace ContainerDVbwyeH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VBG4SsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V_bG4Ss' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V_bG4Ss'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'mr' => '?',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
