<?php

namespace ContainerAKCg8lw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\Allusers1Type', 1 => 'App\\Form\\AllusersType', 2 => 'App\\Form\\AuthType', 3 => 'App\\Form\\BanType', 4 => 'App\\Form\\CategoryType', 5 => 'App\\Form\\ChallengeType', 6 => 'App\\Form\\ChercherOffreType', 7 => 'App\\Form\\CommentType', 8 => 'App\\Form\\DemandetravailType', 9 => 'App\\Form\\FavorisTuroialType', 10 => 'App\\Form\\GrosmotsType', 11 => 'App\\Form\\LignepanierType', 12 => 'App\\Form\\LoginType', 13 => 'App\\Form\\OffretravailType', 14 => 'App\\Form\\OffretravailarchiveType', 15 => 'App\\Form\\PanierType', 16 => 'App\\Form\\ParticipationType', 17 => 'App\\Form\\PostLikeType', 18 => 'App\\Form\\PostType', 19 => 'App\\Form\\ProduitsType', 20 => 'App\\Form\\RatingType', 21 => 'App\\Form\\TutorielType', 22 => 'App\\Form\\VerificationCodeType', 23 => 'App\\Form\\VideoType', 24 => 'App\\Form\\ViewType', 25 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 26 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 27 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 28 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 29 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
