<?php

namespace Feral\Core\Process\Attributes;

/**
 * Use this configuration description for configuration values that are
 * a string.
 */
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS)]
abstract class AbstractConfigurationDescription implements ConfigurationDescriptionInterface, OptionsDescriptionInterface
{



    /**
     * @param string $key
     * @param string $name
     * @param string $description
     * @param array $options
     */
    public function __construct(
        /**
         * The configuration key.
         */
        protected string $key,
        /**
         * The human friendly name of this configuration description
         */
        protected string $name,
        /**
         * The human friendly description
         */
        protected string $description,
        /**
         * Possible options for this value
         */
        protected array $options = []
    ){}

    /**
     * Set the configuration key which is used to identify the configuration.
     *
     * @param  string $key
     * @return $this
     */
    public function setKey(string $key): static
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Set the human friendly name of the configurations
     *
     * @param  string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the human description of this configuration option.
     *
     * @param  string $description
     * @return $this
     */
    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the optional options allowed for the configuration.
     *
     * @param  array $options
     * @return $this
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return $this->options;
    }
}