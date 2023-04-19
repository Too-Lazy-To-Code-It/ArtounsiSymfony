<?php

namespace ContainerYTCYtws;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_Renderer_TwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'RendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'TwigRenderer.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['knp_menu.renderer.twig'])) {
            return $container->privates['knp_menu.renderer.twig'];
        }

        return $container->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($a, '@KnpMenu/menu.html.twig', ($container->services['knp_menu.matcher'] ?? $container->getKnpMenu_MatcherService()), []);
    }
}
