<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ErrorStatus;
use ShellCardManagementAPIsLib\Models\SearchAccountLimitResponse;

/**
 * Builder for model SearchAccountLimitResponse
 *
 * @see SearchAccountLimitResponse
 */
class SearchAccountLimitResponseBuilder
{
    /**
     * @var SearchAccountLimitResponse
     */
    private $instance;

    private function __construct(SearchAccountLimitResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new search account limit response Builder object.
     */
    public static function init(): self
    {
        return new self(new SearchAccountLimitResponse());
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
     * Unsets request id field.
     */
    public function unsetRequestId(): self
    {
        $this->instance->unsetRequestId();
        return $this;
    }

    /**
     * Sets account id field.
     */
    public function accountId(?int $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets reference product field.
     */
    public function referenceProduct(?string $value): self
    {
        $this->instance->setReferenceProduct($value);
        return $this;
    }

    /**
     * Sets restriction condition field.
     */
    public function restrictionCondition(?string $value): self
    {
        $this->instance->setRestrictionCondition($value);
        return $this;
    }

    /**
     * Sets velocity limits field.
     */
    public function velocityLimits(?array $value): self
    {
        $this->instance->setVelocityLimits($value);
        return $this;
    }

    /**
     * Sets error field.
     */
    public function error(?ErrorStatus $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Initializes a new search account limit response object.
     */
    public function build(): SearchAccountLimitResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
