<?php

namespace Symfony\Config\SonataUser;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ImpersonatingConfig 
{
    private $enabled;
    private $route;
    private $parameters;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function route($value): self
    {
        $this->_usedProperties['route'] = true;
        $this->route = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parameters(string $id, $value): self
    {
        $this->_usedProperties['parameters'] = true;
        $this->parameters[$id] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('route', $value)) {
            $this->_usedProperties['route'] = true;
            $this->route = $value['route'];
            unset($value['route']);
        }

        if (array_key_exists('parameters', $value)) {
            $this->_usedProperties['parameters'] = true;
            $this->parameters = $value['parameters'];
            unset($value['parameters']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['route'])) {
            $output['route'] = $this->route;
        }
        if (isset($this->_usedProperties['parameters'])) {
            $output['parameters'] = $this->parameters;
        }

        return $output;
    }

}
