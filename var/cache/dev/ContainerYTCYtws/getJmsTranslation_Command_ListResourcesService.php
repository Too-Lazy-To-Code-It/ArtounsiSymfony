<?php

namespace ContainerYTCYtws;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsTranslation_Command_ListResourcesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_translation.command.list_resources' shared service.
     *
     * @return \JMS\TranslationBundle\Command\ResourcesListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ResourcesListCommand.php';

        $container->privates['jms_translation.command.list_resources'] = $instance = new \JMS\TranslationBundle\Command\ResourcesListCommand(\dirname(__DIR__, 4), $container->parameters['kernel.bundles'], (($container->hasParameter("kernel.root_dir")) ? ($container->getParameter("kernel.root_dir")) : (null)));

        $instance->setName('translation:list-resources');

        return $instance;
    }
}
