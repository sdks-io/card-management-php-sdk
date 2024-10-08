<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\UpdateCardRenewalAddress2;

/**
 * Builder for model UpdateCardRenewalAddress2
 *
 * @see UpdateCardRenewalAddress2
 */
class UpdateCardRenewalAddress2Builder
{
    /**
     * @var UpdateCardRenewalAddress2
     */
    private $instance;

    private function __construct(UpdateCardRenewalAddress2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update card renewal address 2 Builder object.
     */
    public static function init(
        string $contactName,
        string $companyName,
        string $addressLine,
        string $zipCode,
        int $countryID
    ): self {
        return new self(
            new UpdateCardRenewalAddress2($contactName, $companyName, $addressLine, $zipCode, $countryID)
        );
    }

    /**
     * Sets contact title field.
     */
    public function contactTitle(?string $value): self
    {
        $this->instance->setContactTitle($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets region id field.
     */
    public function regionID(?int $value): self
    {
        $this->instance->setRegionID($value);
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
     * Sets phone number field.
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Initializes a new update card renewal address 2 object.
     */
    public function build(): UpdateCardRenewalAddress2
    {
        return CoreHelper::clone($this->instance);
    }
}
