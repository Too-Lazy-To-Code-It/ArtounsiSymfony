<?php

namespace Symfony\Config\SonataUser\Admin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UserConfig 
{
    private $class;
    private $controller;
    private $translation;
    private $_usedProperties = [];

    /**
     * @default 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    /**
     * @default '%sonata.admin.configuration.default_controller%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controller($value): self
    {
        $this->_usedProperties['controller'] = true;
        $this->controller = $value;

        return $this;
    }

    /**
     * @default 'SonataUserBundle'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function translation($value): self
    {
        $this->_usedProperties['translation'] = true;
        $this->translation = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }

        if (array_key_exists('controller', $value)) {
            $this->_usedProperties['controller'] = true;
            $this->controller = $value['controller'];
            unset($value['controller']);
        }

        if (array_key_exists('translation', $value)) {
            $this->_usedProperties['translation'] = true;
            $this->translation = $value['translation'];
            unset($value['translation']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['controller'])) {
            $output['controller'] = $this->controller;
        }
        if (isset($this->_usedProperties['translation'])) {
            $output['translation'] = $this->translation;
        }

        return $output;
    }

}
