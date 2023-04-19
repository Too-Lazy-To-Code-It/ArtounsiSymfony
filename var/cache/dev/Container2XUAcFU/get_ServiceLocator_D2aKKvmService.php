<?php

namespace Container2XUAcFU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D2aKKvmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d2aKKvm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d2aKKvm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['privates', '.errored..service_locator.d2aKKvm.knp\\Component\\Pager\\PaginatorInterface', NULL, 'Cannot autowire service ".service_locator.d2aKKvm": it references interface "knp\\Component\\Pager\\PaginatorInterface" but no such service exists. Did you mean "Knp\\Component\\Pager\\PaginatorInterface"?'],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'paginator' => 'knp\\Component\\Pager\\PaginatorInterface',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
