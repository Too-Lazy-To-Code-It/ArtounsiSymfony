<?php

namespace Container4NSx1DB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CKFBqu_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CKFBqu.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CKFBqu.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'produit' => ['privates', '.errored..service_locator.CKFBqu..App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.CKFBqu.": it references class "App\\Entity\\Produits" but no such service exists.'],
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'produit' => 'App\\Entity\\Produits',
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
        ]);
    }
}
