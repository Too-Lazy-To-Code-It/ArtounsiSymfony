<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataForm'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SonataFormConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $formType;
    private $serializer;
    private $_usedProperties = [];

    /**
     * Must be one of standard, horizontal
     * @default 'standard'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formType($value): self
    {
        $this->_usedProperties['formType'] = true;
        $this->formType = $value;

        return $this;
    }

    public function serializer(array $value = []): \Symfony\Config\SonataForm\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\SonataForm\SerializerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }

        return $this->serializer;
    }

    public function getExtensionAlias(): string
    {
        return 'sonata_form';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('form_type', $value)) {
            $this->_usedProperties['formType'] = true;
            $this->formType = $value['form_type'];
            unset($value['form_type']);
        }

        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\SonataForm\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['formType'])) {
            $output['form_type'] = $this->formType;
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer->toArray();
        }

        return $output;
    }

}
