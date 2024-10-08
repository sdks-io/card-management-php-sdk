<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CardDayTimeRestrictions;

/**
 * Builder for model CardDayTimeRestrictions
 *
 * @see CardDayTimeRestrictions
 */
class CardDayTimeRestrictionsBuilder
{
    /**
     * @var CardDayTimeRestrictions
     */
    private $instance;

    private function __construct(CardDayTimeRestrictions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card day time restrictions Builder object.
     */
    public static function init(): self
    {
        return new self(new CardDayTimeRestrictions());
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
     * Sets monday field.
     */
    public function monday(?bool $value): self
    {
        $this->instance->setMonday($value);
        return $this;
    }

    /**
     * Sets tuesday field.
     */
    public function tuesday(?bool $value): self
    {
        $this->instance->setTuesday($value);
        return $this;
    }

    /**
     * Sets wednesday field.
     */
    public function wednesday(?bool $value): self
    {
        $this->instance->setWednesday($value);
        return $this;
    }

    /**
     * Sets thursday field.
     */
    public function thursday(?bool $value): self
    {
        $this->instance->setThursday($value);
        return $this;
    }

    /**
     * Sets friday field.
     */
    public function friday(?bool $value): self
    {
        $this->instance->setFriday($value);
        return $this;
    }

    /**
     * Sets saturday field.
     */
    public function saturday(?bool $value): self
    {
        $this->instance->setSaturday($value);
        return $this;
    }

    /**
     * Sets sunday field.
     */
    public function sunday(?bool $value): self
    {
        $this->instance->setSunday($value);
        return $this;
    }

    /**
     * Sets time from field.
     */
    public function timeFrom(?string $value): self
    {
        $this->instance->setTimeFrom($value);
        return $this;
    }

    /**
     * Unsets time from field.
     */
    public function unsetTimeFrom(): self
    {
        $this->instance->unsetTimeFrom();
        return $this;
    }

    /**
     * Sets time to field.
     */
    public function timeTo(?string $value): self
    {
        $this->instance->setTimeTo($value);
        return $this;
    }

    /**
     * Unsets time to field.
     */
    public function unsetTimeTo(): self
    {
        $this->instance->unsetTimeTo();
        return $this;
    }

    /**
     * Initializes a new card day time restrictions object.
     */
    public function build(): CardDayTimeRestrictions
    {
        return CoreHelper::clone($this->instance);
    }
}
