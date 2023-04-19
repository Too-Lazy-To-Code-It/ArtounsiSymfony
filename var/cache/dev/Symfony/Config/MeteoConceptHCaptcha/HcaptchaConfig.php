<?php

namespace Symfony\Config\MeteoConceptHCaptcha;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HcaptchaConfig 
{
    private $siteKey;
    private $secret;
    private $_usedProperties = [];
    
    /**
     * The site key for this website.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteKey($value): self
    {
        $this->_usedProperties['siteKey'] = true;
        $this->siteKey = $value;
    
        return $this;
    }
    
    /**
     * The secret used to authenticate requests to hCaptcha verification endpoint.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): self
    {
        $this->_usedProperties['secret'] = true;
        $this->secret = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('site_key', $value)) {
            $this->_usedProperties['siteKey'] = true;
            $this->siteKey = $value['site_key'];
            unset($value['site_key']);
        }
    
        if (array_key_exists('secret', $value)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = $value['secret'];
            unset($value['secret']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['siteKey'])) {
            $output['site_key'] = $this->siteKey;
        }
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret;
        }
    
        return $output;
    }

}
