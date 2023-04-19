<?php

namespace Container2XUAcFU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AllusersType' => ['privates', 'App\\Form\\AllusersType', 'getAllusersTypeService', true],
            'App\\Form\\BanType' => ['privates', 'App\\Form\\BanType', 'getBanTypeService', true],
            'App\\Form\\CategoryType' => ['privates', 'App\\Form\\CategoryType', 'getCategoryTypeService', true],
            'App\\Form\\ChallengeType' => ['privates', 'App\\Form\\ChallengeType', 'getChallengeTypeService', true],
            'App\\Form\\CommentType' => ['privates', 'App\\Form\\CommentType', 'getCommentTypeService', true],
            'App\\Form\\DemandetravailType' => ['privates', 'App\\Form\\DemandetravailType', 'getDemandetravailTypeService', true],
            'App\\Form\\FavorisTuroialType' => ['privates', 'App\\Form\\FavorisTuroialType', 'getFavorisTuroialTypeService', true],
            'App\\Form\\GrosmotsType' => ['privates', 'App\\Form\\GrosmotsType', 'getGrosmotsTypeService', true],
            'App\\Form\\LignepanierType' => ['privates', 'App\\Form\\LignepanierType', 'getLignepanierTypeService', true],
            'App\\Form\\OffretravailType' => ['privates', 'App\\Form\\OffretravailType', 'getOffretravailTypeService', true],
            'App\\Form\\OffretravailarchiveType' => ['privates', 'App\\Form\\OffretravailarchiveType', 'getOffretravailarchiveTypeService', true],
            'App\\Form\\PanierType' => ['privates', 'App\\Form\\PanierType', 'getPanierTypeService', true],
            'App\\Form\\ParticipationType' => ['privates', 'App\\Form\\ParticipationType', 'getParticipationTypeService', true],
            'App\\Form\\PostLikeType' => ['privates', 'App\\Form\\PostLikeType', 'getPostLikeTypeService', true],
            'App\\Form\\PostType' => ['privates', 'App\\Form\\PostType', 'getPostTypeService', true],
            'App\\Form\\ProduitsType' => ['privates', 'App\\Form\\ProduitsType', 'getProduitsTypeService', true],
            'App\\Form\\RatingType' => ['privates', 'App\\Form\\RatingType', 'getRatingTypeService', true],
            'App\\Form\\TutorielType' => ['privates', 'App\\Form\\TutorielType', 'getTutorielTypeService', true],
            'App\\Form\\VideoType' => ['privates', 'App\\Form\\VideoType', 'getVideoTypeService', true],
            'App\\Form\\ViewType' => ['privates', 'App\\Form\\ViewType', 'getViewTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AllusersType' => '?',
            'App\\Form\\BanType' => '?',
            'App\\Form\\CategoryType' => '?',
            'App\\Form\\ChallengeType' => '?',
            'App\\Form\\CommentType' => '?',
            'App\\Form\\DemandetravailType' => '?',
            'App\\Form\\FavorisTuroialType' => '?',
            'App\\Form\\GrosmotsType' => '?',
            'App\\Form\\LignepanierType' => '?',
            'App\\Form\\OffretravailType' => '?',
            'App\\Form\\OffretravailarchiveType' => '?',
            'App\\Form\\PanierType' => '?',
            'App\\Form\\ParticipationType' => '?',
            'App\\Form\\PostLikeType' => '?',
            'App\\Form\\PostType' => '?',
            'App\\Form\\ProduitsType' => '?',
            'App\\Form\\RatingType' => '?',
            'App\\Form\\TutorielType' => '?',
            'App\\Form\\VideoType' => '?',
            'App\\Form\\ViewType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
