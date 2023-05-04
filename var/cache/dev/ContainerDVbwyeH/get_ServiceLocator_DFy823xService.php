<?php

namespace ContainerDVbwyeH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DFy823xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DFy823x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DFy823x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'participation' => ['privates', '.errored..service_locator.DFy823x.App\\Entity\\Participation', NULL, 'Cannot autowire service ".service_locator.DFy823x": it references class "App\\Entity\\Participation" but no such service exists.'],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'mr' => '?',
            'participation' => 'App\\Entity\\Participation',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
