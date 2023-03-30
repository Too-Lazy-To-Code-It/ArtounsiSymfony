<?php

namespace Symfony\Config\SonataUser;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProfileConfig 
{
    private $defaultAvatar;
    private $_usedProperties = [];

    /**
     * @default 'bundles/sonatauser/default_avatar.png'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultAvatar($value): self
    {
        $this->_usedProperties['defaultAvatar'] = true;
        $this->defaultAvatar = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_avatar', $value)) {
            $this->_usedProperties['defaultAvatar'] = true;
            $this->defaultAvatar = $value['default_avatar'];
            unset($value['default_avatar']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultAvatar'])) {
            $output['default_avatar'] = $this->defaultAvatar;
        }

        return $output;
    }

}
