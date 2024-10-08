<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\AccountVelocityLimit;

/**
 * Builder for model AccountVelocityLimit
 *
 * @see AccountVelocityLimit
 */
class AccountVelocityLimitBuilder
{
    /**
     * @var AccountVelocityLimit
     */
    private $instance;

    private function __construct(AccountVelocityLimit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account velocity limit Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountVelocityLimit());
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets period field.
     */
    public function period(?string $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Sets limit field.
     */
    public function limit(?float $value): self
    {
        $this->instance->setLimit($value);
        return $this;
    }

    /**
     * Sets accumulation field.
     */
    public function accumulation(?float $value): self
    {
        $this->instance->setAccumulation($value);
        return $this;
    }

    /**
     * Sets balance field.
     */
    public function balance(?float $value): self
    {
        $this->instance->setBalance($value);
        return $this;
    }

    /**
     * Sets override field.
     */
    public function override(?bool $value): self
    {
        $this->instance->setOverride($value);
        return $this;
    }

    /**
     * Sets product group field.
     */
    public function productGroup(?string $value): self
    {
        $this->instance->setProductGroup($value);
        return $this;
    }

    /**
     * Sets threshold field.
     */
    public function threshold(?float $value): self
    {
        $this->instance->setThreshold($value);
        return $this;
    }

    /**
     * Initializes a new account velocity limit object.
     */
    public function build(): AccountVelocityLimit
    {
        return CoreHelper::clone($this->instance);
    }
}
