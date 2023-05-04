<?php

namespace ContainerAkfC8ww;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__EVFvxrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..EVFvxr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..EVFvxr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
            'doctrine' => '?',
            'mr' => '?',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
