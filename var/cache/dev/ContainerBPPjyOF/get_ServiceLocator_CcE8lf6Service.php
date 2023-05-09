<?php

namespace ContainerBPPjyOF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CcE8lf6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ccE8lf6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ccE8lf6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'challenge' => ['privates', '.errored..service_locator.ccE8lf6.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.ccE8lf6": it references class "App\\Entity\\Challenge" but no such service exists.'],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'challenge' => 'App\\Entity\\Challenge',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
            'mr' => '?',
        ]);
    }
}
