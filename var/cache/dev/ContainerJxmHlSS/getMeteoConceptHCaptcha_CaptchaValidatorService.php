<?php

namespace ContainerJxmHlSS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMeteoConceptHCaptcha_CaptchaValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'meteo_concept_h_captcha.captcha_validator' shared service.
     *
     * @return \MeteoConcept\HCaptchaBundle\Validator\Constraints\IsValidCaptchaValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'meteo-concept'.\DIRECTORY_SEPARATOR.'hcaptcha-bundle'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'IsValidCaptchaValidator.php';

        return $container->services['meteo_concept_h_captcha.captcha_validator'] = new \MeteoConcept\HCaptchaBundle\Validator\Constraints\IsValidCaptchaValidator(($container->services['meteo_concept_h_captcha.captcha_verifier'] ?? $container->load('getMeteoConceptHCaptcha_CaptchaVerifierService')), 'strict');
    }
}
