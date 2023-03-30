<?php

namespace Symfony\Config\SonataForm;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SerializerConfig 
{
    private $formats;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formats($value): self
    {
        $this->_usedProperties['formats'] = true;
        $this->formats = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('formats', $value)) {
            $this->_usedProperties['formats'] = true;
            $this->formats = $value['formats'];
            unset($value['formats']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['formats'])) {
            $output['formats'] = $this->formats;
        }

        return $output;
    }

}
