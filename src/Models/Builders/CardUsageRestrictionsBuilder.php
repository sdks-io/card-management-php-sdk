<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CardUsageRestrictions;

/**
 * Builder for model CardUsageRestrictions
 *
 * @see CardUsageRestrictions
 */
class CardUsageRestrictionsBuilder
{
    /**
     * @var CardUsageRestrictions
     */
    private $instance;

    private function __construct(CardUsageRestrictions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card usage restrictions Builder object.
     */
    public static function init(): self
    {
        return new self(new CardUsageRestrictions());
    }

    /**
     * Sets level field.
     */
    public function level(?string $value): self
    {
        $this->instance->setLevel($value);
        return $this;
    }

    /**
     * Unsets level field.
     */
    public function unsetLevel(): self
    {
        $this->instance->unsetLevel();
        return $this;
    }

    /**
     * Sets daily spend limit field.
     */
    public function dailySpendLimit(?float $value): self
    {
        $this->instance->setDailySpendLimit($value);
        return $this;
    }

    /**
     * Unsets daily spend limit field.
     */
    public function unsetDailySpendLimit(): self
    {
        $this->instance->unsetDailySpendLimit();
        return $this;
    }

    /**
     * Sets weekly spend limit field.
     */
    public function weeklySpendLimit(?float $value): self
    {
        $this->instance->setWeeklySpendLimit($value);
        return $this;
    }

    /**
     * Unsets weekly spend limit field.
     */
    public function unsetWeeklySpendLimit(): self
    {
        $this->instance->unsetWeeklySpendLimit();
        return $this;
    }

    /**
     * Sets monthly spend limit field.
     */
    public function monthlySpendLimit(?float $value): self
    {
        $this->instance->setMonthlySpendLimit($value);
        return $this;
    }

    /**
     * Unsets monthly spend limit field.
     */
    public function unsetMonthlySpendLimit(): self
    {
        $this->instance->unsetMonthlySpendLimit();
        return $this;
    }

    /**
     * Sets annual spend limit field.
     */
    public function annualSpendLimit(?float $value): self
    {
        $this->instance->setAnnualSpendLimit($value);
        return $this;
    }

    /**
     * Unsets annual spend limit field.
     */
    public function unsetAnnualSpendLimit(): self
    {
        $this->instance->unsetAnnualSpendLimit();
        return $this;
    }

    /**
     * Sets life time spend limit field.
     */
    public function lifeTimeSpendLimit(?float $value): self
    {
        $this->instance->setLifeTimeSpendLimit($value);
        return $this;
    }

    /**
     * Unsets life time spend limit field.
     */
    public function unsetLifeTimeSpendLimit(): self
    {
        $this->instance->unsetLifeTimeSpendLimit();
        return $this;
    }

    /**
     * Sets daily volume limit field.
     */
    public function dailyVolumeLimit(?float $value): self
    {
        $this->instance->setDailyVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets daily volume limit field.
     */
    public function unsetDailyVolumeLimit(): self
    {
        $this->instance->unsetDailyVolumeLimit();
        return $this;
    }

    /**
     * Sets weekly volume limit field.
     */
    public function weeklyVolumeLimit(?float $value): self
    {
        $this->instance->setWeeklyVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets weekly volume limit field.
     */
    public function unsetWeeklyVolumeLimit(): self
    {
        $this->instance->unsetWeeklyVolumeLimit();
        return $this;
    }

    /**
     * Sets monthly volume limit field.
     */
    public function monthlyVolumeLimit(?float $value): self
    {
        $this->instance->setMonthlyVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets monthly volume limit field.
     */
    public function unsetMonthlyVolumeLimit(): self
    {
        $this->instance->unsetMonthlyVolumeLimit();
        return $this;
    }

    /**
     * Sets annual volume limit field.
     */
    public function annualVolumeLimit(?float $value): self
    {
        $this->instance->setAnnualVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets annual volume limit field.
     */
    public function unsetAnnualVolumeLimit(): self
    {
        $this->instance->unsetAnnualVolumeLimit();
        return $this;
    }

    /**
     * Sets life time volume limit field.
     */
    public function lifeTimeVolumeLimit(?float $value): self
    {
        $this->instance->setLifeTimeVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets life time volume limit field.
     */
    public function unsetLifeTimeVolumeLimit(): self
    {
        $this->instance->unsetLifeTimeVolumeLimit();
        return $this;
    }

    /**
     * Sets transaction spend limit field.
     */
    public function transactionSpendLimit(?float $value): self
    {
        $this->instance->setTransactionSpendLimit($value);
        return $this;
    }

    /**
     * Unsets transaction spend limit field.
     */
    public function unsetTransactionSpendLimit(): self
    {
        $this->instance->unsetTransactionSpendLimit();
        return $this;
    }

    /**
     * Sets transaction volume limit field.
     */
    public function transactionVolumeLimit(?float $value): self
    {
        $this->instance->setTransactionVolumeLimit($value);
        return $this;
    }

    /**
     * Unsets transaction volume limit field.
     */
    public function unsetTransactionVolumeLimit(): self
    {
        $this->instance->unsetTransactionVolumeLimit();
        return $this;
    }

    /**
     * Sets daily transaction count field.
     */
    public function dailyTransactionCount(?float $value): self
    {
        $this->instance->setDailyTransactionCount($value);
        return $this;
    }

    /**
     * Unsets daily transaction count field.
     */
    public function unsetDailyTransactionCount(): self
    {
        $this->instance->unsetDailyTransactionCount();
        return $this;
    }

    /**
     * Sets weekly transaction count field.
     */
    public function weeklyTransactionCount(?float $value): self
    {
        $this->instance->setWeeklyTransactionCount($value);
        return $this;
    }

    /**
     * Unsets weekly transaction count field.
     */
    public function unsetWeeklyTransactionCount(): self
    {
        $this->instance->unsetWeeklyTransactionCount();
        return $this;
    }

    /**
     * Sets monthly transaction count field.
     */
    public function monthlyTransactionCount(?float $value): self
    {
        $this->instance->setMonthlyTransactionCount($value);
        return $this;
    }

    /**
     * Unsets monthly transaction count field.
     */
    public function unsetMonthlyTransactionCount(): self
    {
        $this->instance->unsetMonthlyTransactionCount();
        return $this;
    }

    /**
     * Sets annual transaction count field.
     */
    public function annualTransactionCount(?float $value): self
    {
        $this->instance->setAnnualTransactionCount($value);
        return $this;
    }

    /**
     * Unsets annual transaction count field.
     */
    public function unsetAnnualTransactionCount(): self
    {
        $this->instance->unsetAnnualTransactionCount();
        return $this;
    }

    /**
     * Sets life time transaction count field.
     */
    public function lifeTimeTransactionCount(?float $value): self
    {
        $this->instance->setLifeTimeTransactionCount($value);
        return $this;
    }

    /**
     * Unsets life time transaction count field.
     */
    public function unsetLifeTimeTransactionCount(): self
    {
        $this->instance->unsetLifeTimeTransactionCount();
        return $this;
    }

    /**
     * Sets is velocity ceiling field.
     */
    public function isVelocityCeiling(?bool $value): self
    {
        $this->instance->setIsVelocityCeiling($value);
        return $this;
    }

    /**
     * Initializes a new card usage restrictions object.
     */
    public function build(): CardUsageRestrictions
    {
        return CoreHelper::clone($this->instance);
    }
}
