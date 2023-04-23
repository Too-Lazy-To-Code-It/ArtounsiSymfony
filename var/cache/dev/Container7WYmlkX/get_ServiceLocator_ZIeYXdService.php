<?php

namespace Container7WYmlkX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZIeYXdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZIe_yXd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZIe_yXd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alluser' => ['services', 'App\\Controller\\AllusersController', 'getAllusersControllerService', true],
            'challenge' => ['privates', '.errored..service_locator.ZIe_yXd.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.ZIe_yXd": it references class "App\\Entity\\Challenge" but no such service exists.'],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'alluser' => 'App\\Controller\\AllusersController',
            'challenge' => 'App\\Entity\\Challenge',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
