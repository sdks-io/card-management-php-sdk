<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CancelCardResponse;

/**
 * Builder for model CancelCardResponse
 *
 * @see CancelCardResponse
 */
class CancelCardResponseBuilder
{
    /**
     * @var CancelCardResponse
     */
    private $instance;

    private function __construct(CancelCardResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cancel card response Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelCardResponse());
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
     * Sets main reference field.
     */
    public function mainReference(?int $value): self
    {
        $this->instance->setMainReference($value);
        return $this;
    }

    /**
     * Sets order replacement reference field.
     */
    public function orderReplacementReference(?int $value): self
    {
        $this->instance->setOrderReplacementReference($value);
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
     * Sets errors field.
     */
    public function errors(?array $value): self
    {
        $this->instance->setErrors($value);
        return $this;
    }

    /**
     * Initializes a new cancel card response object.
     */
    public function build(): CancelCardResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
