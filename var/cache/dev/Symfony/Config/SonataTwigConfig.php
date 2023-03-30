<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataTwig'.\DIRECTORY_SEPARATOR.'FlashmessageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SonataTwigConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $formType;
    private $flashmessage;
    private $_usedProperties = [];

    /**
     * Style used in the forms, some of the widgets need to be wrapped in a special div element
    depending on this style.
     * @default 'standard'
     * @param ParamConfigurator|'standard'|'horizontal' $value
     * @return $this
     */
    public function formType($value): self
    {
        $this->_usedProperties['formType'] = true;
        $this->formType = $value;

        return $this;
    }

    public function flashmessage(string $message, array $value = []): \Symfony\Config\SonataTwig\FlashmessageConfig
    {
        if (!isset($this->flashmessage[$message])) {
            $this->_usedProperties['flashmessage'] = true;
            $this->flashmessage[$message] = new \Symfony\Config\SonataTwig\FlashmessageConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "flashmessage()" has already been initialized. You cannot pass values the second time you call flashmessage().');
        }

        return $this->flashmessage[$message];
    }

    public function getExtensionAlias(): string
    {
        return 'sonata_twig';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('form_type', $value)) {
            $this->_usedProperties['formType'] = true;
            $this->formType = $value['form_type'];
            unset($value['form_type']);
        }

        if (array_key_exists('flashmessage', $value)) {
            $this->_usedProperties['flashmessage'] = true;
            $this->flashmessage = array_map(function ($v) { return new \Symfony\Config\SonataTwig\FlashmessageConfig($v); }, $value['flashmessage']);
            unset($value['flashmessage']);
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
        if (isset($this->_usedProperties['flashmessage'])) {
            $output['flashmessage'] = array_map(function ($v) { return $v->toArray(); }, $this->flashmessage);
        }

        return $output;
    }

}
