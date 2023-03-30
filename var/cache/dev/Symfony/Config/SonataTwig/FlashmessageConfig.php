<?php

namespace Symfony\Config\SonataTwig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlashmessageConfig 
{
    private $cssClass;
    private $types;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cssClass($value): self
    {
        $this->_usedProperties['cssClass'] = true;
        $this->cssClass = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function types($value): self
    {
        $this->_usedProperties['types'] = true;
        $this->types = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('css_class', $value)) {
            $this->_usedProperties['cssClass'] = true;
            $this->cssClass = $value['css_class'];
            unset($value['css_class']);
        }

        if (array_key_exists('types', $value)) {
            $this->_usedProperties['types'] = true;
            $this->types = $value['types'];
            unset($value['types']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cssClass'])) {
            $output['css_class'] = $this->cssClass;
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = $this->types;
        }

        return $output;
    }

}
