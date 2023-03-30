<?php

namespace Symfony\Config\SonataUser;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resetting'.\DIRECTORY_SEPARATOR.'EmailConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResettingConfig 
{
    private $retryTtl;
    private $tokenTtl;
    private $email;
    private $_usedProperties = [];

    /**
     * @default 7200
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function retryTtl($value): self
    {
        $this->_usedProperties['retryTtl'] = true;
        $this->retryTtl = $value;

        return $this;
    }

    /**
     * @default 86400
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function tokenTtl($value): self
    {
        $this->_usedProperties['tokenTtl'] = true;
        $this->tokenTtl = $value;

        return $this;
    }

    public function email(array $value = []): \Symfony\Config\SonataUser\Resetting\EmailConfig
    {
        if (null === $this->email) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\SonataUser\Resetting\EmailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "email()" has already been initialized. You cannot pass values the second time you call email().');
        }

        return $this->email;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('retry_ttl', $value)) {
            $this->_usedProperties['retryTtl'] = true;
            $this->retryTtl = $value['retry_ttl'];
            unset($value['retry_ttl']);
        }

        if (array_key_exists('token_ttl', $value)) {
            $this->_usedProperties['tokenTtl'] = true;
            $this->tokenTtl = $value['token_ttl'];
            unset($value['token_ttl']);
        }

        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\SonataUser\Resetting\EmailConfig($value['email']);
            unset($value['email']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['retryTtl'])) {
            $output['retry_ttl'] = $this->retryTtl;
        }
        if (isset($this->_usedProperties['tokenTtl'])) {
            $output['token_ttl'] = $this->tokenTtl;
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email->toArray();
        }

        return $output;
    }

}
