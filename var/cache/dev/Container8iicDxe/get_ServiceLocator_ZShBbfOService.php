<?php

namespace Container8iicDxe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZShBbfOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZShBbfO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZShBbfO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingTutorielRepository', 'getRatingTutorielRepositoryService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'doctrine' => '?',
            'mr' => '?',
            'ratingRepository' => 'App\\Repository\\RatingTutorielRepository',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
