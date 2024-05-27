<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ScheduleCardBlockResponse;

/**
 * Builder for model ScheduleCardBlockResponse
 *
 * @see ScheduleCardBlockResponse
 */
class ScheduleCardBlockResponseBuilder
{
    /**
     * @var ScheduleCardBlockResponse
     */
    private $instance;

    private function __construct(ScheduleCardBlockResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new schedule card block response Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduleCardBlockResponse());
    }

    /**
     * Sets main reference field.
     */
    public function mainReference(?int $value): self
    {
        $this->instance->setMainReference($value);
        return $this;
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new schedule card block response object.
     */
    public function build(): ScheduleCardBlockResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
