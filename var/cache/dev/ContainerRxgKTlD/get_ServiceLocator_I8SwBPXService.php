<?php

namespace ContainerRxgKTlD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I8SwBPXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i8SwBPX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i8SwBPX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'post' => ['privates', '.errored..service_locator.i8SwBPX.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.i8SwBPX": it references class "App\\Entity\\Post" but no such service exists.'],
            'postLikeRepository' => ['privates', 'App\\Repository\\PostLikeRepository', 'getPostLikeRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'entityManager' => '?',
            'post' => 'App\\Entity\\Post',
            'postLikeRepository' => 'App\\Repository\\PostLikeRepository',
        ]);
    }
}
