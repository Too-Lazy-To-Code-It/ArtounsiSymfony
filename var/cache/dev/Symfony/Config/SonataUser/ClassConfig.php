<?php

namespace Symfony\Config\SonataUser;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ClassConfig 
{
    private $user;
    private $_usedProperties = [];

    /**
     * @default 'Sonata\\UserBundle\\Entity\\BaseUser'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): self
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }

        return $output;
    }

}
