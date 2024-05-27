<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CancelCardRequest;

/**
 * Builder for model CancelCardRequest
 *
 * @see CancelCardRequest
 */
class CancelCardRequestBuilder
{
    /**
     * @var CancelCardRequest
     */
    private $instance;

    private function __construct(CancelCardRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cancel card request Builder object.
     */
    public static function init(array $cards): self
    {
        return new self(new CancelCardRequest($cards));
    }

    /**
     * Sets reason id field.
     */
    public function reasonId(?int $value): self
    {
        $this->instance->setReasonId($value);
        return $this;
    }

    /**
     * Unsets reason id field.
     */
    public function unsetReasonId(): self
    {
        $this->instance->unsetReasonId();
        return $this;
    }

    /**
     * Sets reason text field.
     */
    public function reasonText(?string $value): self
    {
        $this->instance->setReasonText($value);
        return $this;
    }

    /**
     * Unsets reason text field.
     */
    public function unsetReasonText(): self
    {
        $this->instance->unsetReasonText();
        return $this;
    }

    /**
     * Initializes a new cancel card request object.
     */
    public function build(): CancelCardRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
