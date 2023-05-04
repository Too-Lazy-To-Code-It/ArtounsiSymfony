<?php

namespace ContainerAkfC8ww;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZKlRLISService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zKlRLIS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zKlRLIS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
        ], [
            'CategoryRepository' => 'App\\Repository\\CategoryRepository',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
        ]);
    }
}
