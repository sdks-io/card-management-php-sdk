<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\DeliveryAddressUpdateRequest;

/**
 * Builder for model DeliveryAddressUpdateRequest
 *
 * @see DeliveryAddressUpdateRequest
 */
class DeliveryAddressUpdateRequestBuilder
{
    /**
     * @var DeliveryAddressUpdateRequest
     */
    private $instance;

    private function __construct(DeliveryAddressUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new delivery address update request Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliveryAddressUpdateRequest());
    }

    /**
     * Sets col co id field.
     */
    public function colCoId(?int $value): self
    {
        $this->instance->setColCoId($value);
        return $this;
    }

    /**
     * Sets col co code field.
     */
    public function colCoCode(?int $value): self
    {
        $this->instance->setColCoCode($value);
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Sets payer number field.
     */
    public function payerNumber(?string $value): self
    {
        $this->instance->setPayerNumber($value);
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
     * Sets delivery address updates field.
     */
    public function deliveryAddressUpdates(?array $value): self
    {
        $this->instance->setDeliveryAddressUpdates($value);
        return $this;
    }

    /**
     * Initializes a new delivery address update request object.
     */
    public function build(): DeliveryAddressUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
