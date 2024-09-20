<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\Card;

/**
 * Builder for model Card
 *
 * @see Card
 */
class CardBuilder
{
    /**
     * @var Card
     */
    private $instance;

    private function __construct(Card $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card Builder object.
     */
    public static function init(): self
    {
        return new self(new Card());
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
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Unsets account name field.
     */
    public function unsetAccountName(): self
    {
        $this->instance->unsetAccountName();
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
     * Sets account short name field.
     */
    public function accountShortName(?string $value): self
    {
        $this->instance->setAccountShortName($value);
        return $this;
    }

    /**
     * Unsets account short name field.
     */
    public function unsetAccountShortName(): self
    {
        $this->instance->unsetAccountShortName();
        return $this;
    }

    /**
     * Sets bundle id field.
     */
    public function bundleId(?string $value): self
    {
        $this->instance->setBundleId($value);
        return $this;
    }

    /**
     * Unsets bundle id field.
     */
    public function unsetBundleId(): self
    {
        $this->instance->unsetBundleId();
        return $this;
    }

    /**
     * Sets card block schedules field.
     */
    public function cardBlockSchedules(?array $value): self
    {
        $this->instance->setCardBlockSchedules($value);
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
     * Sets card group name field.
     */
    public function cardGroupName(?string $value): self
    {
        $this->instance->setCardGroupName($value);
        return $this;
    }

    /**
     * Unsets card group name field.
     */
    public function unsetCardGroupName(): self
    {
        $this->instance->unsetCardGroupName();
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
     * Sets card type code field.
     */
    public function cardTypeCode(?string $value): self
    {
        $this->instance->setCardTypeCode($value);
        return $this;
    }

    /**
     * Unsets card type code field.
     */
    public function unsetCardTypeCode(): self
    {
        $this->instance->unsetCardTypeCode();
        return $this;
    }

    /**
     * Sets card type id field.
     */
    public function cardTypeId(?int $value): self
    {
        $this->instance->setCardTypeId($value);
        return $this;
    }

    /**
     * Unsets card type id field.
     */
    public function unsetCardTypeId(): self
    {
        $this->instance->unsetCardTypeId();
        return $this;
    }

    /**
     * Sets card type name field.
     */
    public function cardTypeName(?string $value): self
    {
        $this->instance->setCardTypeName($value);
        return $this;
    }

    /**
     * Unsets card type name field.
     */
    public function unsetCardTypeName(): self
    {
        $this->instance->unsetCardTypeName();
        return $this;
    }

    /**
     * Sets col co country code field.
     */
    public function colCoCountryCode(?string $value): self
    {
        $this->instance->setColCoCountryCode($value);
        return $this;
    }

    /**
     * Unsets col co country code field.
     */
    public function unsetColCoCountryCode(): self
    {
        $this->instance->unsetColCoCountryCode();
        return $this;
    }

    /**
     * Sets creation date field.
     */
    public function creationDate(?string $value): self
    {
        $this->instance->setCreationDate($value);
        return $this;
    }

    /**
     * Unsets creation date field.
     */
    public function unsetCreationDate(): self
    {
        $this->instance->unsetCreationDate();
        return $this;
    }

    /**
     * Sets driver name field.
     */
    public function driverName(?string $value): self
    {
        $this->instance->setDriverName($value);
        return $this;
    }

    /**
     * Unsets driver name field.
     */
    public function unsetDriverName(): self
    {
        $this->instance->unsetDriverName();
        return $this;
    }

    /**
     * Sets effective date field.
     */
    public function effectiveDate(?string $value): self
    {
        $this->instance->setEffectiveDate($value);
        return $this;
    }

    /**
     * Unsets effective date field.
     */
    public function unsetEffectiveDate(): self
    {
        $this->instance->unsetEffectiveDate();
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
     * Sets fleet id input field.
     */
    public function fleetIdInput(?bool $value): self
    {
        $this->instance->setFleetIdInput($value);
        return $this;
    }

    /**
     * Sets is crt field.
     */
    public function isCRT(?bool $value): self
    {
        $this->instance->setIsCRT($value);
        return $this;
    }

    /**
     * Sets is fleet field.
     */
    public function isFleet(?bool $value): self
    {
        $this->instance->setIsFleet($value);
        return $this;
    }

    /**
     * Sets is international field.
     */
    public function isInternational(?bool $value): self
    {
        $this->instance->setIsInternational($value);
        return $this;
    }

    /**
     * Sets is national field.
     */
    public function isNational(?bool $value): self
    {
        $this->instance->setIsNational($value);
        return $this;
    }

    /**
     * Sets is partner sites included field.
     */
    public function isPartnerSitesIncluded(?bool $value): self
    {
        $this->instance->setIsPartnerSitesIncluded($value);
        return $this;
    }

    /**
     * Sets is shell sites only field.
     */
    public function isShellSitesOnly(?bool $value): self
    {
        $this->instance->setIsShellSitesOnly($value);
        return $this;
    }

    /**
     * Sets issue date field.
     */
    public function issueDate(?string $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Unsets issue date field.
     */
    public function unsetIssueDate(): self
    {
        $this->instance->unsetIssueDate();
        return $this;
    }

    /**
     * Sets is superseded field.
     */
    public function isSuperseded(?bool $value): self
    {
        $this->instance->setIsSuperseded($value);
        return $this;
    }

    /**
     * Sets is virtual card field.
     */
    public function isVirtualCard(?bool $value): self
    {
        $this->instance->setIsVirtualCard($value);
        return $this;
    }

    /**
     * Sets last modified date field.
     */
    public function lastModifiedDate(?string $value): self
    {
        $this->instance->setLastModifiedDate($value);
        return $this;
    }

    /**
     * Unsets last modified date field.
     */
    public function unsetLastModifiedDate(): self
    {
        $this->instance->unsetLastModifiedDate();
        return $this;
    }

    /**
     * Sets last used date field.
     */
    public function lastUsedDate(?string $value): self
    {
        $this->instance->setLastUsedDate($value);
        return $this;
    }

    /**
     * Unsets last used date field.
     */
    public function unsetLastUsedDate(): self
    {
        $this->instance->unsetLastUsedDate();
        return $this;
    }

    /**
     * Sets local currency code field.
     */
    public function localCurrencyCode(?string $value): self
    {
        $this->instance->setLocalCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets local currency code field.
     */
    public function unsetLocalCurrencyCode(): self
    {
        $this->instance->unsetLocalCurrencyCode();
        return $this;
    }

    /**
     * Sets local currency symbol field.
     */
    public function localCurrencySymbol(?string $value): self
    {
        $this->instance->setLocalCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets local currency symbol field.
     */
    public function unsetLocalCurrencySymbol(): self
    {
        $this->instance->unsetLocalCurrencySymbol();
        return $this;
    }

    /**
     * Sets odometer input field.
     */
    public function odometerInput(?bool $value): self
    {
        $this->instance->setOdometerInput($value);
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
     * Sets masked pan field.
     */
    public function maskedPAN(?string $value): self
    {
        $this->instance->setMaskedPAN($value);
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
     * Sets purchase category code field.
     */
    public function purchaseCategoryCode(?string $value): self
    {
        $this->instance->setPurchaseCategoryCode($value);
        return $this;
    }

    /**
     * Unsets purchase category code field.
     */
    public function unsetPurchaseCategoryCode(): self
    {
        $this->instance->unsetPurchaseCategoryCode();
        return $this;
    }

    /**
     * Sets purchase category id field.
     */
    public function purchaseCategoryId(?int $value): self
    {
        $this->instance->setPurchaseCategoryId($value);
        return $this;
    }

    /**
     * Unsets purchase category id field.
     */
    public function unsetPurchaseCategoryId(): self
    {
        $this->instance->unsetPurchaseCategoryId();
        return $this;
    }

    /**
     * Sets purchase category name field.
     */
    public function purchaseCategoryName(?string $value): self
    {
        $this->instance->setPurchaseCategoryName($value);
        return $this;
    }

    /**
     * Unsets purchase category name field.
     */
    public function unsetPurchaseCategoryName(): self
    {
        $this->instance->unsetPurchaseCategoryName();
        return $this;
    }

    /**
     * Sets reason field.
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Unsets reason field.
     */
    public function unsetReason(): self
    {
        $this->instance->unsetReason();
        return $this;
    }

    /**
     * Sets reissue setting field.
     */
    public function reissueSetting(?string $value): self
    {
        $this->instance->setReissueSetting($value);
        return $this;
    }

    /**
     * Unsets reissue setting field.
     */
    public function unsetReissueSetting(): self
    {
        $this->instance->unsetReissueSetting();
        return $this;
    }

    /**
     * Sets status description field.
     */
    public function statusDescription(?string $value): self
    {
        $this->instance->setStatusDescription($value);
        return $this;
    }

    /**
     * Unsets status description field.
     */
    public function unsetStatusDescription(): self
    {
        $this->instance->unsetStatusDescription();
        return $this;
    }

    /**
     * Sets status id field.
     */
    public function statusId(?int $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Unsets status id field.
     */
    public function unsetStatusId(): self
    {
        $this->instance->unsetStatusId();
        return $this;
    }

    /**
     * Sets token type id field.
     */
    public function tokenTypeID(?int $value): self
    {
        $this->instance->setTokenTypeID($value);
        return $this;
    }

    /**
     * Unsets token type id field.
     */
    public function unsetTokenTypeID(): self
    {
        $this->instance->unsetTokenTypeID();
        return $this;
    }

    /**
     * Sets token type name field.
     */
    public function tokenTypeName(?string $value): self
    {
        $this->instance->setTokenTypeName($value);
        return $this;
    }

    /**
     * Sets vrn field.
     */
    public function vRN(?string $value): self
    {
        $this->instance->setVRN($value);
        return $this;
    }

    /**
     * Unsets vrn field.
     */
    public function unsetVRN(): self
    {
        $this->instance->unsetVRN();
        return $this;
    }

    /**
     * Sets client reference id field.
     */
    public function clientReferenceId(?string $value): self
    {
        $this->instance->setClientReferenceId($value);
        return $this;
    }

    /**
     * Unsets client reference id field.
     */
    public function unsetClientReferenceId(): self
    {
        $this->instance->unsetClientReferenceId();
        return $this;
    }

    /**
     * Sets is emvcontact field.
     */
    public function isEMVContact(?bool $value): self
    {
        $this->instance->setIsEMVContact($value);
        return $this;
    }

    /**
     * Sets is emvcontactless field.
     */
    public function isEMVContactless(?bool $value): self
    {
        $this->instance->setIsEMVContactless($value);
        return $this;
    }

    /**
     * Sets is rfid field.
     */
    public function isRFID(?bool $value): self
    {
        $this->instance->setIsRFID($value);
        return $this;
    }

    /**
     * Sets rfiduid field.
     */
    public function rFIDUID(?string $value): self
    {
        $this->instance->setRFIDUID($value);
        return $this;
    }

    /**
     * Unsets rfiduid field.
     */
    public function unsetRFIDUID(): self
    {
        $this->instance->unsetRFIDUID();
        return $this;
    }

    /**
     * Sets emaid field.
     */
    public function eMAID(?string $value): self
    {
        $this->instance->setEMAID($value);
        return $this;
    }

    /**
     * Unsets emaid field.
     */
    public function unsetEMAID(): self
    {
        $this->instance->unsetEMAID();
        return $this;
    }

    /**
     * Sets evprinted number field.
     */
    public function eVPrintedNumber(?string $value): self
    {
        $this->instance->setEVPrintedNumber($value);
        return $this;
    }

    /**
     * Unsets evprinted number field.
     */
    public function unsetEVPrintedNumber(): self
    {
        $this->instance->unsetEVPrintedNumber();
        return $this;
    }

    /**
     * Sets card media code field.
     */
    public function cardMediaCode(?string $value): self
    {
        $this->instance->setCardMediaCode($value);
        return $this;
    }

    /**
     * Unsets card media code field.
     */
    public function unsetCardMediaCode(): self
    {
        $this->instance->unsetCardMediaCode();
        return $this;
    }

    /**
     * Initializes a new card object.
     */
    public function build(): Card
    {
        return CoreHelper::clone($this->instance);
    }
}
