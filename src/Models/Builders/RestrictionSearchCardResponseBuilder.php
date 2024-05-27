<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\RestrictionSearchCardResponse;

/**
 * Builder for model RestrictionSearchCardResponse
 *
 * @see RestrictionSearchCardResponse
 */
class RestrictionSearchCardResponseBuilder
{
    /**
     * @var RestrictionSearchCardResponse
     */
    private $instance;

    private function __construct(RestrictionSearchCardResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new restriction search card response Builder object.
     */
    public static function init(): self
    {
        return new self(new RestrictionSearchCardResponse());
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
     * Initializes a new restriction search card response object.
     */
    public function build(): RestrictionSearchCardResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
