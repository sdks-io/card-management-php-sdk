<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\BundledDetailsProductList;
use ShellCardManagementAPIsLib\Models\BundledRestrictionsList;
use ShellCardManagementAPIsLib\Models\DayTimeRestrictions;
use ShellCardManagementAPIsLib\Models\LocationRestriction;

/**
 * Builder for model BundledRestrictionsList
 *
 * @see BundledRestrictionsList
 */
class BundledRestrictionsListBuilder
{
    /**
     * @var BundledRestrictionsList
     */
    private $instance;

    private function __construct(BundledRestrictionsList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bundled restrictions list Builder object.
     */
    public static function init(): self
    {
        return new self(new BundledRestrictionsList());
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
     * Sets day time restrictions field.
     */
    public function dayTimeRestrictions(?DayTimeRestrictions $value): self
    {
        $this->instance->setDayTimeRestrictions($value);
        return $this;
    }

    /**
     * Sets product restrictions field.
     */
    public function productRestrictions(?BundledDetailsProductList $value): self
    {
        $this->instance->setProductRestrictions($value);
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
     * Initializes a new bundled restrictions list object.
     */
    public function build(): BundledRestrictionsList
    {
        return CoreHelper::clone($this->instance);
    }
}
