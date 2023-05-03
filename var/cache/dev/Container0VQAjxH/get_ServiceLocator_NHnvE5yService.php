<?php

namespace Container0VQAjxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NHnvE5yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nHnvE5y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nHnvE5y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'favorisTuroialRepository' => ['privates', 'App\\Repository\\FavorisTuroialRepository', 'getFavorisTuroialRepositoryService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'favorisTuroialRepository' => 'App\\Repository\\FavorisTuroialRepository',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
