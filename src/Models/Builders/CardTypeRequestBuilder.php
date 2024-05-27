<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CardTypeRequest;

/**
 * Builder for model CardTypeRequest
 *
 * @see CardTypeRequest
 */
class CardTypeRequestBuilder
{
    /**
     * @var CardTypeRequest
     */
    private $instance;

    private function __construct(CardTypeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card type request Builder object.
     */
    public static function init(): self
    {
        return new self(new CardTypeRequest());
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
     * Unsets col co id field.
     */
    public function unsetColCoId(): self
    {
        $this->instance->unsetColCoId();
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
     * Unsets col co code field.
     */
    public function unsetColCoCode(): self
    {
        $this->instance->unsetColCoCode();
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
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
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
     * Unsets payer number field.
     */
    public function unsetPayerNumber(): self
    {
        $this->instance->unsetPayerNumber();
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
     * Unsets account id field.
     */
    public function unsetAccountId(): self
    {
        $this->instance->unsetAccountId();
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
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets include usage restrictions field.
     */
    public function includeUsageRestrictions(?bool $value): self
    {
        $this->instance->setIncludeUsageRestrictions($value);
        return $this;
    }

    /**
     * Sets include purchase categories field.
     */
    public function includePurchaseCategories(?bool $value): self
    {
        $this->instance->setIncludePurchaseCategories($value);
        return $this;
    }

    /**
     * Initializes a new card type request object.
     */
    public function build(): CardTypeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
