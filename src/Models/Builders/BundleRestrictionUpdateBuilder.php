<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\BundleRestrictionUpdate;
use ShellCardManagementAPIsLib\Models\CardDayTimeRestrictions;
use ShellCardManagementAPIsLib\Models\LocationRestriction;

/**
 * Builder for model BundleRestrictionUpdate
 *
 * @see BundleRestrictionUpdate
 */
class BundleRestrictionUpdateBuilder
{
    /**
     * @var BundleRestrictionUpdate
     */
    private $instance;

    private function __construct(BundleRestrictionUpdate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bundle restriction update Builder object.
     */
    public static function init(): self
    {
        return new self(new BundleRestrictionUpdate());
    }

    /**
     * Sets reset day time restriction field.
     */
    public function resetDayTimeRestriction(?bool $value): self
    {
        $this->instance->setResetDayTimeRestriction($value);
        return $this;
    }

    /**
     * Unsets reset day time restriction field.
     */
    public function unsetResetDayTimeRestriction(): self
    {
        $this->instance->unsetResetDayTimeRestriction();
        return $this;
    }

    /**
     * Sets reset location restriction field.
     */
    public function resetLocationRestriction(?bool $value): self
    {
        $this->instance->setResetLocationRestriction($value);
        return $this;
    }

    /**
     * Unsets reset location restriction field.
     */
    public function unsetResetLocationRestriction(): self
    {
        $this->instance->unsetResetLocationRestriction();
        return $this;
    }

    /**
     * Sets reset product restriction field.
     */
    public function resetProductRestriction(?bool $value): self
    {
        $this->instance->setResetProductRestriction($value);
        return $this;
    }

    /**
     * Unsets reset product restriction field.
     */
    public function unsetResetProductRestriction(): self
    {
        $this->instance->unsetResetProductRestriction();
        return $this;
    }

    /**
     * Sets usage restrictions field.
     */
    public function usageRestrictions(?array $value): self
    {
        $this->instance->setUsageRestrictions($value);
        return $this;
    }

    /**
     * Sets day time restriction profile id field.
     */
    public function dayTimeRestrictionProfileId(?string $value): self
    {
        $this->instance->setDayTimeRestrictionProfileId($value);
        return $this;
    }

    /**
     * Unsets day time restriction profile id field.
     */
    public function unsetDayTimeRestrictionProfileId(): self
    {
        $this->instance->unsetDayTimeRestrictionProfileId();
        return $this;
    }

    /**
     * Sets day time restrictions field.
     */
    public function dayTimeRestrictions(?CardDayTimeRestrictions $value): self
    {
        $this->instance->setDayTimeRestrictions($value);
        return $this;
    }

    /**
     * Sets product restrictions field.
     */
    public function productRestrictions(?array $value): self
    {
        $this->instance->setProductRestrictions($value);
        return $this;
    }

    /**
     * Sets location restriction profile id field.
     */
    public function locationRestrictionProfileId(?string $value): self
    {
        $this->instance->setLocationRestrictionProfileId($value);
        return $this;
    }

    /**
     * Sets location restrictions field.
     */
    public function locationRestrictions(?LocationRestriction $value): self
    {
        $this->instance->setLocationRestrictions($value);
        return $this;
    }

    /**
     * Initializes a new bundle restriction update object.
     */
    public function build(): BundleRestrictionUpdate
    {
        return CoreHelper::clone($this->instance);
    }
}
