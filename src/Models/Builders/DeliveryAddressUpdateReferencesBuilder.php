<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\DeliveryAddressUpdateReferences;

/**
 * Builder for model DeliveryAddressUpdateReferences
 *
 * @see DeliveryAddressUpdateReferences
 */
class DeliveryAddressUpdateReferencesBuilder
{
    /**
     * @var DeliveryAddressUpdateReferences
     */
    private $instance;

    private function __construct(DeliveryAddressUpdateReferences $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new delivery address update references Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliveryAddressUpdateReferences());
    }

    /**
     * Sets card id field.
     */
    public function cardId(?int $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Sets card pan field.
     */
    public function cardPAN(?string $value): self
    {
        $this->instance->setCardPAN($value);
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
     * Sets reference id field.
     */
    public function referenceId(?int $value): self
    {
        $this->instance->setReferenceId($value);
        return $this;
    }

    /**
     * Sets error info field.
     */
    public function errorInfo(?string $value): self
    {
        $this->instance->setErrorInfo($value);
        return $this;
    }

    /**
     * Initializes a new delivery address update references object.
     */
    public function build(): DeliveryAddressUpdateReferences
    {
        return CoreHelper::clone($this->instance);
    }
}
