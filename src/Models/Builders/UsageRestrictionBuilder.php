<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\UsageRestriction;

/**
 * Builder for model UsageRestriction
 *
 * @see UsageRestriction
 */
class UsageRestrictionBuilder
{
    /**
     * @var UsageRestriction
     */
    private $instance;

    private function __construct(UsageRestriction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new usage restriction Builder object.
     */
    public static function init(): self
    {
        return new self(new UsageRestriction());
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
     * Sets daily spend field.
     */
    public function dailySpend(?float $value): self
    {
        $this->instance->setDailySpend($value);
        return $this;
    }

    /**
     * Sets daily spend accumulated field.
     */
    public function dailySpendAccumulated(?float $value): self
    {
        $this->instance->setDailySpendAccumulated($value);
        return $this;
    }

    /**
     * Sets daily spend balance field.
     */
    public function dailySpendBalance(?float $value): self
    {
        $this->instance->setDailySpendBalance($value);
        return $this;
    }

    /**
     * Sets daily spend override field.
     */
    public function dailySpendOverride(?bool $value): self
    {
        $this->instance->setDailySpendOverride($value);
        return $this;
    }

    /**
     * Sets daily spend threshold field.
     */
    public function dailySpendThreshold(?float $value): self
    {
        $this->instance->setDailySpendThreshold($value);
        return $this;
    }

    /**
     * Sets weekly spend field.
     */
    public function weeklySpend(?float $value): self
    {
        $this->instance->setWeeklySpend($value);
        return $this;
    }

    /**
     * Sets weekly spend accumulated field.
     */
    public function weeklySpendAccumulated(?float $value): self
    {
        $this->instance->setWeeklySpendAccumulated($value);
        return $this;
    }

    /**
     * Sets weekly spend balance field.
     */
    public function weeklySpendBalance(?float $value): self
    {
        $this->instance->setWeeklySpendBalance($value);
        return $this;
    }

    /**
     * Sets weekly spend override field.
     */
    public function weeklySpendOverride(?bool $value): self
    {
        $this->instance->setWeeklySpendOverride($value);
        return $this;
    }

    /**
     * Sets weekly spend threshold field.
     */
    public function weeklySpendThreshold(?float $value): self
    {
        $this->instance->setWeeklySpendThreshold($value);
        return $this;
    }

    /**
     * Sets monthly spend field.
     */
    public function monthlySpend(?float $value): self
    {
        $this->instance->setMonthlySpend($value);
        return $this;
    }

    /**
     * Sets monthly spend accumulated field.
     */
    public function monthlySpendAccumulated(?float $value): self
    {
        $this->instance->setMonthlySpendAccumulated($value);
        return $this;
    }

    /**
     * Sets monthly spend balance field.
     */
    public function monthlySpendBalance(?float $value): self
    {
        $this->instance->setMonthlySpendBalance($value);
        return $this;
    }

    /**
     * Sets monthly spend override field.
     */
    public function monthlySpendOverride(?bool $value): self
    {
        $this->instance->setMonthlySpendOverride($value);
        return $this;
    }

    /**
     * Sets per transaction spend field.
     */
    public function perTransactionSpend(?float $value): self
    {
        $this->instance->setPerTransactionSpend($value);
        return $this;
    }

    /**
     * Sets per transaction spend override field.
     */
    public function perTransactionSpendOverride(?bool $value): self
    {
        $this->instance->setPerTransactionSpendOverride($value);
        return $this;
    }

    /**
     * Sets annual spend field.
     */
    public function annualSpend(?float $value): self
    {
        $this->instance->setAnnualSpend($value);
        return $this;
    }

    /**
     * Sets annual spend accumulated field.
     */
    public function annualSpendAccumulated(?float $value): self
    {
        $this->instance->setAnnualSpendAccumulated($value);
        return $this;
    }

    /**
     * Sets annual spend balance field.
     */
    public function annualSpendBalance(?float $value): self
    {
        $this->instance->setAnnualSpendBalance($value);
        return $this;
    }

    /**
     * Sets annual spend override field.
     */
    public function annualSpendOverride(?bool $value): self
    {
        $this->instance->setAnnualSpendOverride($value);
        return $this;
    }

    /**
     * Sets annual spend threshold field.
     */
    public function annualSpendThreshold(?float $value): self
    {
        $this->instance->setAnnualSpendThreshold($value);
        return $this;
    }

    /**
     * Sets life time spend field.
     */
    public function lifeTimeSpend(?float $value): self
    {
        $this->instance->setLifeTimeSpend($value);
        return $this;
    }

    /**
     * Sets life time spend accumulated field.
     */
    public function lifeTimeSpendAccumulated(?float $value): self
    {
        $this->instance->setLifeTimeSpendAccumulated($value);
        return $this;
    }

    /**
     * Sets life time spend balance field.
     */
    public function lifeTimeSpendBalance(?float $value): self
    {
        $this->instance->setLifeTimeSpendBalance($value);
        return $this;
    }

    /**
     * Sets life time spend override field.
     */
    public function lifeTimeSpendOverride(?bool $value): self
    {
        $this->instance->setLifeTimeSpendOverride($value);
        return $this;
    }

    /**
     * Sets life time spend threshold field.
     */
    public function lifeTimeSpendThreshold(?float $value): self
    {
        $this->instance->setLifeTimeSpendThreshold($value);
        return $this;
    }

    /**
     * Sets daily volume field.
     */
    public function dailyVolume(?float $value): self
    {
        $this->instance->setDailyVolume($value);
        return $this;
    }

    /**
     * Sets daily volume accumulated field.
     */
    public function dailyVolumeAccumulated(?float $value): self
    {
        $this->instance->setDailyVolumeAccumulated($value);
        return $this;
    }

    /**
     * Sets daily volume balance field.
     */
    public function dailyVolumeBalance(?float $value): self
    {
        $this->instance->setDailyVolumeBalance($value);
        return $this;
    }

    /**
     * Sets daily volume override field.
     */
    public function dailyVolumeOverride(?float $value): self
    {
        $this->instance->setDailyVolumeOverride($value);
        return $this;
    }

    /**
     * Sets daily volume threshold field.
     */
    public function dailyVolumeThreshold(?float $value): self
    {
        $this->instance->setDailyVolumeThreshold($value);
        return $this;
    }

    /**
     * Sets weekly volume field.
     */
    public function weeklyVolume(?float $value): self
    {
        $this->instance->setWeeklyVolume($value);
        return $this;
    }

    /**
     * Sets weekly volume accumulated field.
     */
    public function weeklyVolumeAccumulated(?float $value): self
    {
        $this->instance->setWeeklyVolumeAccumulated($value);
        return $this;
    }

    /**
     * Sets weekly volume balance field.
     */
    public function weeklyVolumeBalance(?float $value): self
    {
        $this->instance->setWeeklyVolumeBalance($value);
        return $this;
    }

    /**
     * Sets weekly volume override field.
     */
    public function weeklyVolumeOverride(?bool $value): self
    {
        $this->instance->setWeeklyVolumeOverride($value);
        return $this;
    }

    /**
     * Sets weekly volume threshold field.
     */
    public function weeklyVolumeThreshold(?float $value): self
    {
        $this->instance->setWeeklyVolumeThreshold($value);
        return $this;
    }

    /**
     * Sets monthly volume field.
     */
    public function monthlyVolume(?float $value): self
    {
        $this->instance->setMonthlyVolume($value);
        return $this;
    }

    /**
     * Sets monthly volume accumulated field.
     */
    public function monthlyVolumeAccumulated(?float $value): self
    {
        $this->instance->setMonthlyVolumeAccumulated($value);
        return $this;
    }

    /**
     * Sets monthly volume balance field.
     */
    public function monthlyVolumeBalance(?float $value): self
    {
        $this->instance->setMonthlyVolumeBalance($value);
        return $this;
    }

    /**
     * Sets monthly volume override field.
     */
    public function monthlyVolumeOverride(?bool $value): self
    {
        $this->instance->setMonthlyVolumeOverride($value);
        return $this;
    }

    /**
     * Sets monthly volume threshold field.
     */
    public function monthlyVolumeThreshold(?float $value): self
    {
        $this->instance->setMonthlyVolumeThreshold($value);
        return $this;
    }

    /**
     * Sets per transaction volume field.
     */
    public function perTransactionVolume(?float $value): self
    {
        $this->instance->setPerTransactionVolume($value);
        return $this;
    }

    /**
     * Sets per transaction volume override field.
     */
    public function perTransactionVolumeOverride(?bool $value): self
    {
        $this->instance->setPerTransactionVolumeOverride($value);
        return $this;
    }

    /**
     * Sets annual volume field.
     */
    public function annualVolume(?float $value): self
    {
        $this->instance->setAnnualVolume($value);
        return $this;
    }

    /**
     * Sets annual volume accumulated field.
     */
    public function annualVolumeAccumulated(?float $value): self
    {
        $this->instance->setAnnualVolumeAccumulated($value);
        return $this;
    }

    /**
     * Sets annual volume balance field.
     */
    public function annualVolumeBalance(?float $value): self
    {
        $this->instance->setAnnualVolumeBalance($value);
        return $this;
    }

    /**
     * Sets annual volume override field.
     */
    public function annualVolumeOverride(?bool $value): self
    {
        $this->instance->setAnnualVolumeOverride($value);
        return $this;
    }

    /**
     * Sets annual volume threshold field.
     */
    public function annualVolumeThreshold(?float $value): self
    {
        $this->instance->setAnnualVolumeThreshold($value);
        return $this;
    }

    /**
     * Sets life time volume field.
     */
    public function lifeTimeVolume(?float $value): self
    {
        $this->instance->setLifeTimeVolume($value);
        return $this;
    }

    /**
     * Sets life time volume accumulated field.
     */
    public function lifeTimeVolumeAccumulated(?float $value): self
    {
        $this->instance->setLifeTimeVolumeAccumulated($value);
        return $this;
    }

    /**
     * Sets life time volume balance field.
     */
    public function lifeTimeVolumeBalance(?float $value): self
    {
        $this->instance->setLifeTimeVolumeBalance($value);
        return $this;
    }

    /**
     * Sets life time volume override field.
     */
    public function lifeTimeVolumeOverride(?bool $value): self
    {
        $this->instance->setLifeTimeVolumeOverride($value);
        return $this;
    }

    /**
     * Sets life time volume threshold field.
     */
    public function lifeTimeVolumeThreshold(?float $value): self
    {
        $this->instance->setLifeTimeVolumeThreshold($value);
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
     * Sets daily transaction accumulated field.
     */
    public function dailyTransactionAccumulated(?float $value): self
    {
        $this->instance->setDailyTransactionAccumulated($value);
        return $this;
    }

    /**
     * Sets daily transaction balance field.
     */
    public function dailyTransactionBalance(?float $value): self
    {
        $this->instance->setDailyTransactionBalance($value);
        return $this;
    }

    /**
     * Sets daily transaction override field.
     */
    public function dailyTransactionOverride(?bool $value): self
    {
        $this->instance->setDailyTransactionOverride($value);
        return $this;
    }

    /**
     * Sets daily transaction threshold field.
     */
    public function dailyTransactionThreshold(?float $value): self
    {
        $this->instance->setDailyTransactionThreshold($value);
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
     * Sets weekly transaction accumulated field.
     */
    public function weeklyTransactionAccumulated(?float $value): self
    {
        $this->instance->setWeeklyTransactionAccumulated($value);
        return $this;
    }

    /**
     * Sets weekly transaction balance field.
     */
    public function weeklyTransactionBalance(?float $value): self
    {
        $this->instance->setWeeklyTransactionBalance($value);
        return $this;
    }

    /**
     * Sets weekly transaction override field.
     */
    public function weeklyTransactionOverride(?bool $value): self
    {
        $this->instance->setWeeklyTransactionOverride($value);
        return $this;
    }

    /**
     * Sets weekly transaction threshold field.
     */
    public function weeklyTransactionThreshold(?float $value): self
    {
        $this->instance->setWeeklyTransactionThreshold($value);
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
     * Sets monthly transaction accumulated field.
     */
    public function monthlyTransactionAccumulated(?float $value): self
    {
        $this->instance->setMonthlyTransactionAccumulated($value);
        return $this;
    }

    /**
     * Sets monthly transaction balance field.
     */
    public function monthlyTransactionBalance(?float $value): self
    {
        $this->instance->setMonthlyTransactionBalance($value);
        return $this;
    }

    /**
     * Sets monthly transaction override field.
     */
    public function monthlyTransactionOverride(?bool $value): self
    {
        $this->instance->setMonthlyTransactionOverride($value);
        return $this;
    }

    /**
     * Sets monthly transaction threshold field.
     */
    public function monthlyTransactionThreshold(?float $value): self
    {
        $this->instance->setMonthlyTransactionThreshold($value);
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
     * Sets annual transaction accumulated field.
     */
    public function annualTransactionAccumulated(?float $value): self
    {
        $this->instance->setAnnualTransactionAccumulated($value);
        return $this;
    }

    /**
     * Sets annual transaction balance field.
     */
    public function annualTransactionBalance(?float $value): self
    {
        $this->instance->setAnnualTransactionBalance($value);
        return $this;
    }

    /**
     * Sets annual transaction override field.
     */
    public function annualTransactionOverride(?bool $value): self
    {
        $this->instance->setAnnualTransactionOverride($value);
        return $this;
    }

    /**
     * Sets annual transaction threshold field.
     */
    public function annualTransactionThreshold(?float $value): self
    {
        $this->instance->setAnnualTransactionThreshold($value);
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
     * Sets life time transaction accumulated field.
     */
    public function lifeTimeTransactionAccumulated(?float $value): self
    {
        $this->instance->setLifeTimeTransactionAccumulated($value);
        return $this;
    }

    /**
     * Sets life time transaction balance field.
     */
    public function lifeTimeTransactionBalance(?float $value): self
    {
        $this->instance->setLifeTimeTransactionBalance($value);
        return $this;
    }

    /**
     * Sets life time transaction override field.
     */
    public function lifeTimeTransactionOverride(?bool $value): self
    {
        $this->instance->setLifeTimeTransactionOverride($value);
        return $this;
    }

    /**
     * Sets life time transaction threshold field.
     */
    public function lifeTimeTransactionThreshold(?float $value): self
    {
        $this->instance->setLifeTimeTransactionThreshold($value);
        return $this;
    }

    /**
     * Initializes a new usage restriction object.
     */
    public function build(): UsageRestriction
    {
        return CoreHelper::clone($this->instance);
    }
}
