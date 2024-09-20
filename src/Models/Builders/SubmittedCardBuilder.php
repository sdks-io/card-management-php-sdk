<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\SubmittedCard;

/**
 * Builder for model SubmittedCard
 *
 * @see SubmittedCard
 */
class SubmittedCardBuilder
{
    /**
     * @var SubmittedCard
     */
    private $instance;

    private function __construct(SubmittedCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new submitted card Builder object.
     */
    public static function init(): self
    {
        return new self(new SubmittedCard());
    }

    /**
     * Sets replacement card reference field.
     */
    public function replacementCardReference(?int $value): self
    {
        $this->instance->setReplacementCardReference($value);
        return $this;
    }

    /**
     * Unsets replacement card reference field.
     */
    public function unsetReplacementCardReference(): self
    {
        $this->instance->unsetReplacementCardReference();
        return $this;
    }

    /**
     * Sets update card reference field.
     */
    public function updateCardReference(?int $value): self
    {
        $this->instance->setUpdateCardReference($value);
        return $this;
    }

    /**
     * Unsets update card reference field.
     */
    public function unsetUpdateCardReference(): self
    {
        $this->instance->unsetUpdateCardReference();
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
     * Sets card expiry date field.
     */
    public function cardExpiryDate(?string $value): self
    {
        $this->instance->setCardExpiryDate($value);
        return $this;
    }

    /**
     * Unsets card expiry date field.
     */
    public function unsetCardExpiryDate(): self
    {
        $this->instance->unsetCardExpiryDate();
        return $this;
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
     * Unsets card id field.
     */
    public function unsetCardId(): self
    {
        $this->instance->unsetCardId();
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
     * Sets pan field.
     */
    public function pAN(?string $value): self
    {
        $this->instance->setPAN($value);
        return $this;
    }

    /**
     * Unsets pan field.
     */
    public function unsetPAN(): self
    {
        $this->instance->unsetPAN();
        return $this;
    }

    /**
     * Sets panid field.
     */
    public function pANID(?float $value): self
    {
        $this->instance->setPANID($value);
        return $this;
    }

    /**
     * Unsets panid field.
     */
    public function unsetPANID(): self
    {
        $this->instance->unsetPANID();
        return $this;
    }

    /**
     * Sets masked pan field.
     */
    public function maskedPAN(?string $value): self
    {
        $this->instance->setMaskedPAN($value);
        return $this;
    }

    /**
     * Unsets masked pan field.
     */
    public function unsetMaskedPAN(): self
    {
        $this->instance->unsetMaskedPAN();
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
     * Initializes a new submitted card object.
     */
    public function build(): SubmittedCard
    {
        return CoreHelper::clone($this->instance);
    }
}
