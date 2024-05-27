<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ReplaceCardSettings;

/**
 * Builder for model ReplaceCardSettings
 *
 * @see ReplaceCardSettings
 */
class ReplaceCardSettingsBuilder
{
    /**
     * @var ReplaceCardSettings
     */
    private $instance;

    private function __construct(ReplaceCardSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new replace card settings Builder object.
     */
    public static function init(): self
    {
        return new self(new ReplaceCardSettings());
    }

    /**
     * Sets self selected encrypted pin field.
     */
    public function selfSelectedEncryptedPIN(?string $value): self
    {
        $this->instance->setSelfSelectedEncryptedPIN($value);
        return $this;
    }

    /**
     * Unsets self selected encrypted pin field.
     */
    public function unsetSelfSelectedEncryptedPIN(): self
    {
        $this->instance->unsetSelfSelectedEncryptedPIN();
        return $this;
    }

    /**
     * Sets self selected pinkey id field.
     */
    public function selfSelectedPINKeyID(?string $value): self
    {
        $this->instance->setSelfSelectedPINKeyID($value);
        return $this;
    }

    /**
     * Unsets self selected pinkey id field.
     */
    public function unsetSelfSelectedPINKeyID(): self
    {
        $this->instance->unsetSelfSelectedPINKeyID();
        return $this;
    }

    /**
     * Sets self selected pinsession key field.
     */
    public function selfSelectedPINSessionKey(?string $value): self
    {
        $this->instance->setSelfSelectedPINSessionKey($value);
        return $this;
    }

    /**
     * Unsets self selected pinsession key field.
     */
    public function unsetSelfSelectedPINSessionKey(): self
    {
        $this->instance->unsetSelfSelectedPINSessionKey();
        return $this;
    }

    /**
     * Sets validate fleet id field.
     */
    public function validateFleetId(?bool $value): self
    {
        $this->instance->setValidateFleetId($value);
        return $this;
    }

    /**
     * Sets card group id field.
     */
    public function cardGroupId(?int $value): self
    {
        $this->instance->setCardGroupId($value);
        return $this;
    }

    /**
     * Unsets card group id field.
     */
    public function unsetCardGroupId(): self
    {
        $this->instance->unsetCardGroupId();
        return $this;
    }

    /**
     * Sets card delivery type field.
     */
    public function cardDeliveryType(?int $value): self
    {
        $this->instance->setCardDeliveryType($value);
        return $this;
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
     * Unsets delivery contact name field.
     */
    public function unsetDeliveryContactName(): self
    {
        $this->instance->unsetDeliveryContactName();
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
     * Unsets delivery company name field.
     */
    public function unsetDeliveryCompanyName(): self
    {
        $this->instance->unsetDeliveryCompanyName();
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
     * Unsets delivery address line 1 field.
     */
    public function unsetDeliveryAddressLine1(): self
    {
        $this->instance->unsetDeliveryAddressLine1();
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
     * Unsets delivery zip code field.
     */
    public function unsetDeliveryZipCode(): self
    {
        $this->instance->unsetDeliveryZipCode();
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
     * Unsets delivery city field.
     */
    public function unsetDeliveryCity(): self
    {
        $this->instance->unsetDeliveryCity();
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
     * Unsets delivery country field.
     */
    public function unsetDeliveryCountry(): self
    {
        $this->instance->unsetDeliveryCountry();
        return $this;
    }

    /**
     * Sets delivery country id field.
     */
    public function deliveryCountryId(?int $value): self
    {
        $this->instance->setDeliveryCountryId($value);
        return $this;
    }

    /**
     * Unsets delivery country id field.
     */
    public function unsetDeliveryCountryId(): self
    {
        $this->instance->unsetDeliveryCountryId();
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
     * Sets pindelivery address type field.
     */
    public function pINDeliveryAddressType(?int $value): self
    {
        $this->instance->setPINDeliveryAddressType($value);
        return $this;
    }

    /**
     * Unsets pindelivery address type field.
     */
    public function unsetPINDeliveryAddressType(): self
    {
        $this->instance->unsetPINDeliveryAddressType();
        return $this;
    }

    /**
     * Sets pinadvice type field.
     */
    public function pINAdviceType(?int $value): self
    {
        $this->instance->setPINAdviceType($value);
        return $this;
    }

    /**
     * Unsets pinadvice type field.
     */
    public function unsetPINAdviceType(): self
    {
        $this->instance->unsetPINAdviceType();
        return $this;
    }

    /**
     * Sets pindelivery contact title field.
     */
    public function pINDeliveryContactTitle(?string $value): self
    {
        $this->instance->setPINDeliveryContactTitle($value);
        return $this;
    }

    /**
     * Unsets pindelivery contact title field.
     */
    public function unsetPINDeliveryContactTitle(): self
    {
        $this->instance->unsetPINDeliveryContactTitle();
        return $this;
    }

    /**
     * Sets pindelivery contact name field.
     */
    public function pINDeliveryContactName(?string $value): self
    {
        $this->instance->setPINDeliveryContactName($value);
        return $this;
    }

    /**
     * Unsets pindelivery contact name field.
     */
    public function unsetPINDeliveryContactName(): self
    {
        $this->instance->unsetPINDeliveryContactName();
        return $this;
    }

    /**
     * Sets pindelivery company name field.
     */
    public function pINDeliveryCompanyName(?string $value): self
    {
        $this->instance->setPINDeliveryCompanyName($value);
        return $this;
    }

    /**
     * Unsets pindelivery company name field.
     */
    public function unsetPINDeliveryCompanyName(): self
    {
        $this->instance->unsetPINDeliveryCompanyName();
        return $this;
    }

    /**
     * Sets pindelivery address line 1 field.
     */
    public function pINDeliveryAddressLine1(?string $value): self
    {
        $this->instance->setPINDeliveryAddressLine1($value);
        return $this;
    }

    /**
     * Unsets pindelivery address line 1 field.
     */
    public function unsetPINDeliveryAddressLine1(): self
    {
        $this->instance->unsetPINDeliveryAddressLine1();
        return $this;
    }

    /**
     * Sets pindelivery address line 2 field.
     */
    public function pINDeliveryAddressLine2(?string $value): self
    {
        $this->instance->setPINDeliveryAddressLine2($value);
        return $this;
    }

    /**
     * Unsets pindelivery address line 2 field.
     */
    public function unsetPINDeliveryAddressLine2(): self
    {
        $this->instance->unsetPINDeliveryAddressLine2();
        return $this;
    }

    /**
     * Sets pindelivery address line 3 field.
     */
    public function pINDeliveryAddressLine3(?string $value): self
    {
        $this->instance->setPINDeliveryAddressLine3($value);
        return $this;
    }

    /**
     * Unsets pindelivery address line 3 field.
     */
    public function unsetPINDeliveryAddressLine3(): self
    {
        $this->instance->unsetPINDeliveryAddressLine3();
        return $this;
    }

    /**
     * Sets pindelivery zip code field.
     */
    public function pINDeliveryZipCode(?string $value): self
    {
        $this->instance->setPINDeliveryZipCode($value);
        return $this;
    }

    /**
     * Unsets pindelivery zip code field.
     */
    public function unsetPINDeliveryZipCode(): self
    {
        $this->instance->unsetPINDeliveryZipCode();
        return $this;
    }

    /**
     * Sets pindelivery city field.
     */
    public function pINDeliveryCity(?string $value): self
    {
        $this->instance->setPINDeliveryCity($value);
        return $this;
    }

    /**
     * Unsets pindelivery city field.
     */
    public function unsetPINDeliveryCity(): self
    {
        $this->instance->unsetPINDeliveryCity();
        return $this;
    }

    /**
     * Sets pindelivery region id field.
     */
    public function pINDeliveryRegionId(?int $value): self
    {
        $this->instance->setPINDeliveryRegionId($value);
        return $this;
    }

    /**
     * Unsets pindelivery region id field.
     */
    public function unsetPINDeliveryRegionId(): self
    {
        $this->instance->unsetPINDeliveryRegionId();
        return $this;
    }

    /**
     * Sets pindelivery region field.
     */
    public function pINDeliveryRegion(?string $value): self
    {
        $this->instance->setPINDeliveryRegion($value);
        return $this;
    }

    /**
     * Unsets pindelivery region field.
     */
    public function unsetPINDeliveryRegion(): self
    {
        $this->instance->unsetPINDeliveryRegion();
        return $this;
    }

    /**
     * Sets pindelivery country field.
     */
    public function pINDeliveryCountry(?string $value): self
    {
        $this->instance->setPINDeliveryCountry($value);
        return $this;
    }

    /**
     * Unsets pindelivery country field.
     */
    public function unsetPINDeliveryCountry(): self
    {
        $this->instance->unsetPINDeliveryCountry();
        return $this;
    }

    /**
     * Sets pindelivery country id field.
     */
    public function pINDeliveryCountryId(?int $value): self
    {
        $this->instance->setPINDeliveryCountryId($value);
        return $this;
    }

    /**
     * Unsets pindelivery country id field.
     */
    public function unsetPINDeliveryCountryId(): self
    {
        $this->instance->unsetPINDeliveryCountryId();
        return $this;
    }

    /**
     * Sets pinphone number field.
     */
    public function pINPhoneNumber(?string $value): self
    {
        $this->instance->setPINPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets pinphone number field.
     */
    public function unsetPINPhoneNumber(): self
    {
        $this->instance->unsetPINPhoneNumber();
        return $this;
    }

    /**
     * Sets pinemail address field.
     */
    public function pINEmailAddress(?string $value): self
    {
        $this->instance->setPINEmailAddress($value);
        return $this;
    }

    /**
     * Unsets pinemail address field.
     */
    public function unsetPINEmailAddress(): self
    {
        $this->instance->unsetPINEmailAddress();
        return $this;
    }

    /**
     * Sets save for pinreminder field.
     */
    public function saveForPINReminder(?bool $value): self
    {
        $this->instance->setSaveForPINReminder($value);
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
     * Sets expiry date field.
     */
    public function expiryDate(?string $value): self
    {
        $this->instance->setExpiryDate($value);
        return $this;
    }

    /**
     * Unsets expiry date field.
     */
    public function unsetExpiryDate(): self
    {
        $this->instance->unsetExpiryDate();
        return $this;
    }

    /**
     * Initializes a new replace card settings object.
     */
    public function build(): ReplaceCardSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
