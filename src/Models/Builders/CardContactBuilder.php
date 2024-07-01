<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CardContact;

/**
 * Builder for model CardContact
 *
 * @see CardContact
 */
class CardContactBuilder
{
    /**
     * @var CardContact
     */
    private $instance;

    private function __construct(CardContact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card contact Builder object.
     */
    public static function init(): self
    {
        return new self(new CardContact());
    }

    /**
     * Sets delivery contact title field.
     */
    public function deliveryContactTitle(?string $value): self
    {
        $this->instance->setDeliveryContactTitle($value);
        return $this;
    }

    /**
     * Unsets delivery contact title field.
     */
    public function unsetDeliveryContactTitle(): self
    {
        $this->instance->unsetDeliveryContactTitle();
        return $this;
    }

    /**
     * Sets delivery contact name field.
     */
    public function deliveryContactName(?string $value): self
    {
        $this->instance->setDeliveryContactName($value);
        return $this;
    }

    /**
     * Sets delivery company name field.
     */
    public function deliveryCompanyName(?string $value): self
    {
        $this->instance->setDeliveryCompanyName($value);
        return $this;
    }

    /**
     * Sets delivery address line 1 field.
     */
    public function deliveryAddressLine1(?string $value): self
    {
        $this->instance->setDeliveryAddressLine1($value);
        return $this;
    }

    /**
     * Sets delivery address line 2 field.
     */
    public function deliveryAddressLine2(?string $value): self
    {
        $this->instance->setDeliveryAddressLine2($value);
        return $this;
    }

    /**
     * Unsets delivery address line 2 field.
     */
    public function unsetDeliveryAddressLine2(): self
    {
        $this->instance->unsetDeliveryAddressLine2();
        return $this;
    }

    /**
     * Sets delivery address line 3 field.
     */
    public function deliveryAddressLine3(?string $value): self
    {
        $this->instance->setDeliveryAddressLine3($value);
        return $this;
    }

    /**
     * Unsets delivery address line 3 field.
     */
    public function unsetDeliveryAddressLine3(): self
    {
        $this->instance->unsetDeliveryAddressLine3();
        return $this;
    }

    /**
     * Sets delivery zip code field.
     */
    public function deliveryZipCode(?string $value): self
    {
        $this->instance->setDeliveryZipCode($value);
        return $this;
    }

    /**
     * Sets delivery city field.
     */
    public function deliveryCity(?string $value): self
    {
        $this->instance->setDeliveryCity($value);
        return $this;
    }

    /**
     * Sets delivery region id field.
     */
    public function deliveryRegionId(?int $value): self
    {
        $this->instance->setDeliveryRegionId($value);
        return $this;
    }

    /**
     * Unsets delivery region id field.
     */
    public function unsetDeliveryRegionId(): self
    {
        $this->instance->unsetDeliveryRegionId();
        return $this;
    }

    /**
     * Sets delivery region field.
     */
    public function deliveryRegion(?string $value): self
    {
        $this->instance->setDeliveryRegion($value);
        return $this;
    }

    /**
     * Unsets delivery region field.
     */
    public function unsetDeliveryRegion(): self
    {
        $this->instance->unsetDeliveryRegion();
        return $this;
    }

    /**
     * Sets delivery country field.
     */
    public function deliveryCountry(?string $value): self
    {
        $this->instance->setDeliveryCountry($value);
        return $this;
    }

    /**
     * Sets phone number field.
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets phone number field.
     */
    public function unsetPhoneNumber(): self
    {
        $this->instance->unsetPhoneNumber();
        return $this;
    }

    /**
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Unsets email address field.
     */
    public function unsetEmailAddress(): self
    {
        $this->instance->unsetEmailAddress();
        return $this;
    }

    /**
     * Sets save for card reissue field.
     */
    public function saveForCardReissue(?bool $value): self
    {
        $this->instance->setSaveForCardReissue($value);
        return $this;
    }

    /**
     * Initializes a new card contact object.
     */
    public function build(): CardContact
    {
        return CoreHelper::clone($this->instance);
    }
}
