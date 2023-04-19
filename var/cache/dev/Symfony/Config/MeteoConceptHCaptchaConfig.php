<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MeteoConceptHCaptcha'.\DIRECTORY_SEPARATOR.'HcaptchaConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class MeteoConceptHCaptchaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $hcaptcha;
    private $validation;
    private $_usedProperties = [];
    
    public function hcaptcha(array $value = []): \Symfony\Config\MeteoConceptHCaptcha\HcaptchaConfig
    {
        if (null === $this->hcaptcha) {
            $this->_usedProperties['hcaptcha'] = true;
            $this->hcaptcha = new \Symfony\Config\MeteoConceptHCaptcha\HcaptchaConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "hcaptcha()" has already been initialized. You cannot pass values the second time you call hcaptcha().');
        }
    
        return $this->hcaptcha;
    }
    
    /**
     * If 'lax', the CAPTCHA will be considered valid if the hCaptcha endpoint times out or return an unexpected answer. If 'strict' (the default), the hCaptcha MUST return a "success: true" answer for the CAPTCHA to validate.
     * @default 'strict'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validation($value): self
    {
        $this->_usedProperties['validation'] = true;
        $this->validation = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'meteo_concept_h_captcha';
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('hcaptcha', $value)) {
            $this->_usedProperties['hcaptcha'] = true;
            $this->hcaptcha = new \Symfony\Config\MeteoConceptHCaptcha\HcaptchaConfig($value['hcaptcha']);
            unset($value['hcaptcha']);
        }
    
        if (array_key_exists('validation', $value)) {
            $this->_usedProperties['validation'] = true;
            $this->validation = $value['validation'];
            unset($value['validation']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hcaptcha'])) {
            $output['hcaptcha'] = $this->hcaptcha->toArray();
        }
        if (isset($this->_usedProperties['validation'])) {
            $output['validation'] = $this->validation;
        }
    
        return $output;
    }

}
