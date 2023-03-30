<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataUser'.\DIRECTORY_SEPARATOR.'ImpersonatingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataUser'.\DIRECTORY_SEPARATOR.'ClassConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataUser'.\DIRECTORY_SEPARATOR.'AdminConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataUser'.\DIRECTORY_SEPARATOR.'ProfileConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataUser'.\DIRECTORY_SEPARATOR.'ResettingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SonataUserConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $securityAcl;
    private $impersonating;
    private $managerType;
    private $class;
    private $admin;
    private $profile;
    private $mailer;
    private $resetting;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function securityAcl($value): self
    {
        $this->_usedProperties['securityAcl'] = true;
        $this->securityAcl = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\SonataUser\ImpersonatingConfig|$this
     */
    public function impersonating($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['impersonating'] = true;
            $this->impersonating = $value;

            return $this;
        }

        if (!$this->impersonating instanceof \Symfony\Config\SonataUser\ImpersonatingConfig) {
            $this->_usedProperties['impersonating'] = true;
            $this->impersonating = new \Symfony\Config\SonataUser\ImpersonatingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "impersonating()" has already been initialized. You cannot pass values the second time you call impersonating().');
        }

        return $this->impersonating;
    }

    /**
     * @default 'orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function managerType($value): self
    {
        $this->_usedProperties['managerType'] = true;
        $this->managerType = $value;

        return $this;
    }

    public function class(array $value = []): \Symfony\Config\SonataUser\ClassConfig
    {
        if (null === $this->class) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SonataUser\ClassConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "class()" has already been initialized. You cannot pass values the second time you call class().');
        }

        return $this->class;
    }

    public function admin(array $value = []): \Symfony\Config\SonataUser\AdminConfig
    {
        if (null === $this->admin) {
            $this->_usedProperties['admin'] = true;
            $this->admin = new \Symfony\Config\SonataUser\AdminConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "admin()" has already been initialized. You cannot pass values the second time you call admin().');
        }

        return $this->admin;
    }

    public function profile(array $value = []): \Symfony\Config\SonataUser\ProfileConfig
    {
        if (null === $this->profile) {
            $this->_usedProperties['profile'] = true;
            $this->profile = new \Symfony\Config\SonataUser\ProfileConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "profile()" has already been initialized. You cannot pass values the second time you call profile().');
        }

        return $this->profile;
    }

    /**
     * Custom mailer used to send reset password emails
     * @default 'sonata.user.mailer.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailer($value): self
    {
        $this->_usedProperties['mailer'] = true;
        $this->mailer = $value;

        return $this;
    }

    public function resetting(array $value = []): \Symfony\Config\SonataUser\ResettingConfig
    {
        if (null === $this->resetting) {
            $this->_usedProperties['resetting'] = true;
            $this->resetting = new \Symfony\Config\SonataUser\ResettingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resetting()" has already been initialized. You cannot pass values the second time you call resetting().');
        }

        return $this->resetting;
    }

    public function getExtensionAlias(): string
    {
        return 'sonata_user';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('security_acl', $value)) {
            $this->_usedProperties['securityAcl'] = true;
            $this->securityAcl = $value['security_acl'];
            unset($value['security_acl']);
        }

        if (array_key_exists('impersonating', $value)) {
            $this->_usedProperties['impersonating'] = true;
            $this->impersonating = \is_array($value['impersonating']) ? new \Symfony\Config\SonataUser\ImpersonatingConfig($value['impersonating']) : $value['impersonating'];
            unset($value['impersonating']);
        }

        if (array_key_exists('manager_type', $value)) {
            $this->_usedProperties['managerType'] = true;
            $this->managerType = $value['manager_type'];
            unset($value['manager_type']);
        }

        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SonataUser\ClassConfig($value['class']);
            unset($value['class']);
        }

        if (array_key_exists('admin', $value)) {
            $this->_usedProperties['admin'] = true;
            $this->admin = new \Symfony\Config\SonataUser\AdminConfig($value['admin']);
            unset($value['admin']);
        }

        if (array_key_exists('profile', $value)) {
            $this->_usedProperties['profile'] = true;
            $this->profile = new \Symfony\Config\SonataUser\ProfileConfig($value['profile']);
            unset($value['profile']);
        }

        if (array_key_exists('mailer', $value)) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = $value['mailer'];
            unset($value['mailer']);
        }

        if (array_key_exists('resetting', $value)) {
            $this->_usedProperties['resetting'] = true;
            $this->resetting = new \Symfony\Config\SonataUser\ResettingConfig($value['resetting']);
            unset($value['resetting']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['securityAcl'])) {
            $output['security_acl'] = $this->securityAcl;
        }
        if (isset($this->_usedProperties['impersonating'])) {
            $output['impersonating'] = $this->impersonating instanceof \Symfony\Config\SonataUser\ImpersonatingConfig ? $this->impersonating->toArray() : $this->impersonating;
        }
        if (isset($this->_usedProperties['managerType'])) {
            $output['manager_type'] = $this->managerType;
        }
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class->toArray();
        }
        if (isset($this->_usedProperties['admin'])) {
            $output['admin'] = $this->admin->toArray();
        }
        if (isset($this->_usedProperties['profile'])) {
            $output['profile'] = $this->profile->toArray();
        }
        if (isset($this->_usedProperties['mailer'])) {
            $output['mailer'] = $this->mailer;
        }
        if (isset($this->_usedProperties['resetting'])) {
            $output['resetting'] = $this->resetting->toArray();
        }

        return $output;
    }

}
