<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\RestrictionCardResponseDataItems;

/**
 * Builder for model RestrictionCardResponseDataItems
 *
 * @see RestrictionCardResponseDataItems
 */
class RestrictionCardResponseDataItemsBuilder
{
    /**
     * @var RestrictionCardResponseDataItems
     */
    private $instance;

    private function __construct(RestrictionCardResponseDataItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new restriction card response data items Builder object.
     */
    public static function init(): self
    {
        return new self(new RestrictionCardResponseDataItems());
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
     * Sets day time restriction description field.
     */
    public function dayTimeRestrictionDescription(?string $value): self
    {
        $this->instance->setDayTimeRestrictionDescription($value);
        return $this;
    }

    /**
     * Unsets day time restriction description field.
     */
    public function unsetDayTimeRestrictionDescription(): self
    {
        $this->instance->unsetDayTimeRestrictionDescription();
        return $this;
    }

    /**
     * Sets day time restriction status field.
     */
    public function dayTimeRestrictionStatus(?string $value): self
    {
        $this->instance->setDayTimeRestrictionStatus($value);
        return $this;
    }

    /**
     * Unsets day time restriction status field.
     */
    public function unsetDayTimeRestrictionStatus(): self
    {
        $this->instance->unsetDayTimeRestrictionStatus();
        return $this;
    }

    /**
     * Sets location restriction description field.
     */
    public function locationRestrictionDescription(?string $value): self
    {
        $this->instance->setLocationRestrictionDescription($value);
        return $this;
    }

    /**
     * Unsets location restriction description field.
     */
    public function unsetLocationRestrictionDescription(): self
    {
        $this->instance->unsetLocationRestrictionDescription();
        return $this;
    }

    /**
     * Sets location restriction status field.
     */
    public function locationRestrictionStatus(?string $value): self
    {
        $this->instance->setLocationRestrictionStatus($value);
        return $this;
    }

    /**
     * Unsets location restriction status field.
     */
    public function unsetLocationRestrictionStatus(): self
    {
        $this->instance->unsetLocationRestrictionStatus();
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
     * Sets product restriction description field.
     */
    public function productRestrictionDescription(?string $value): self
    {
        $this->instance->setProductRestrictionDescription($value);
        return $this;
    }

    /**
     * Unsets product restriction description field.
     */
    public function unsetProductRestrictionDescription(): self
    {
        $this->instance->unsetProductRestrictionDescription();
        return $this;
    }

    /**
     * Sets product restriction status field.
     */
    public function productRestrictionStatus(?string $value): self
    {
        $this->instance->setProductRestrictionStatus($value);
        return $this;
    }

    /**
     * Unsets product restriction status field.
     */
    public function unsetProductRestrictionStatus(): self
    {
        $this->instance->unsetProductRestrictionStatus();
        return $this;
    }

    /**
     * Sets usage restriction description field.
     */
    public function usageRestrictionDescription(?string $value): self
    {
        $this->instance->setUsageRestrictionDescription($value);
        return $this;
    }

    /**
     * Unsets usage restriction description field.
     */
    public function unsetUsageRestrictionDescription(): self
    {
        $this->instance->unsetUsageRestrictionDescription();
        return $this;
    }

    /**
     * Sets usage restriction status field.
     */
    public function usageRestrictionStatus(?string $value): self
    {
        $this->instance->setUsageRestrictionStatus($value);
        return $this;
    }

    /**
     * Unsets usage restriction status field.
     */
    public function unsetUsageRestrictionStatus(): self
    {
        $this->instance->unsetUsageRestrictionStatus();
        return $this;
    }

    /**
     * Sets validation error code field.
     */
    public function validationErrorCode(?string $value): self
    {
        $this->instance->setValidationErrorCode($value);
        return $this;
    }

    /**
     * Unsets validation error code field.
     */
    public function unsetValidationErrorCode(): self
    {
        $this->instance->unsetValidationErrorCode();
        return $this;
    }

    /**
     * Sets validation error description field.
     */
    public function validationErrorDescription(?string $value): self
    {
        $this->instance->setValidationErrorDescription($value);
        return $this;
    }

    /**
     * Unsets validation error description field.
     */
    public function unsetValidationErrorDescription(): self
    {
        $this->instance->unsetValidationErrorDescription();
        return $this;
    }

    /**
     * Initializes a new restriction card response data items object.
     */
    public function build(): RestrictionCardResponseDataItems
    {
        return CoreHelper::clone($this->instance);
    }
}
