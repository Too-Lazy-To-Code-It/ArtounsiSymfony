<?php

namespace ContainerBPPjyOF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ViPSd_KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ViPSd.k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ViPSd.k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingTutorielRepository', 'getRatingTutorielRepositoryService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'doctrine' => '?',
            'mr' => '?',
            'ratingRepository' => 'App\\Repository\\RatingTutorielRepository',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
