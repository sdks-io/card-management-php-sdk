<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class RestrictionCardList implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $cardId;

    /**
     * @var string|null
     */
    private $pAN;

    /**
     * @var string|null
     */
    private $expiryDate;

    /**
     * @var int|null
     */
    private $statusId;

    /**
     * @var string|null
     */
    private $statusDescription;

    /**
     * @var string|null
     */
    private $driverName;

    /**
     * @var string|null
     */
    private $vRN;

    /**
     * @var string|null
     */
    private $issueDate;

    /**
     * @var int|null
     */
    private $issueNumber;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $accountShortName;

    /**
     * @var string|null
     */
    private $currencyCode;

    /**
     * @var string|null
     */
    private $colCoCurrencyCode;

    /**
     * @var string|null
     */
    private $colCoCurrencySymbol;

    /**
     * @var string|null
     */
    private $restrictionCurrencyCode;

    /**
     * @var string|null
     */
    private $restrictionCurrencySymbol;

    /**
     * @var string|null
     */
    private $purchaseCategoryId;

    /**
     * @var string|null
     */
    private $purchaseCategoryCode;

    /**
     * @var string|null
     */
    private $purchaseCategoryName;

    /**
     * @var bool|null
     */
    private $isSuperseded;

    /**
     * @var bool|null
     */
    private $isVirtualCard;

    /**
     * @var bool|null
     */
    private $isNational;

    /**
     * @var bool|null
     */
    private $isInternational;

    /**
     * @var bool|null
     */
    private $isCRT;

    /**
     * @var bool|null
     */
    private $isFleet;

    /**
     * @var bool|null
     */
    private $isShellSitesOnly;

    /**
     * @var bool|null
     */
    private $isPartnerSitesIncluded;

    /**
     * @var int|null
     */
    private $cardTypeId;

    /**
     * @var string|null
     */
    private $cardTypeCode;

    /**
     * @var string|null
     */
    private $cardTypeName;

    /**
     * @var string|null
     */
    private $bundleId;

    /**
     * @var int|null
     */
    private $mediumTypeID;

    /**
     * @var string|null
     */
    private $mediumType;

    /**
     * Returns Card Id.
     * Unique Card Id
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Unique Card Id
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns P AN.
     * Card PAN
     */
    public function getPAN(): ?string
    {
        return $this->pAN;
    }

    /**
     * Sets P AN.
     * Card PAN
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN = $pAN;
    }

    /**
     * Returns Expiry Date.
     * Expiry date of the card
     *
     * Format: yyyyMMdd
     *
     * Note: Clients to convert this to appropriate DateTime type.
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * Sets Expiry Date.
     * Expiry date of the card
     *
     * Format: yyyyMMdd
     *
     * Note: Clients to convert this to appropriate DateTime type.
     *
     * @maps ExpiryDate
     */
    public function setExpiryDate(?string $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * Returns Status Id.
     * Card Status id
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    /**
     * Sets Status Id.
     * Card Status id
     *
     * @maps StatusId
     */
    public function setStatusId(?int $statusId): void
    {
        $this->statusId = $statusId;
    }

    /**
     * Returns Status Description.
     * Status Description (Active, Temporarily Blocked, etc.,)
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }

    /**
     * Sets Status Description.
     * Status Description (Active, Temporarily Blocked, etc.,)
     *
     * @maps StatusDescription
     */
    public function setStatusDescription(?string $statusDescription): void
    {
        $this->statusDescription = $statusDescription;
    }

    /**
     * Returns Driver Name.
     * Driver name
     * Example:  ANDREW GILBERRY
     */
    public function getDriverName(): ?string
    {
        return $this->driverName;
    }

    /**
     * Sets Driver Name.
     * Driver name
     * Example:  ANDREW GILBERRY
     *
     * @maps DriverName
     */
    public function setDriverName(?string $driverName): void
    {
        $this->driverName = $driverName;
    }

    /**
     * Returns V RN.
     * Vehicle registration number
     * Example: MV65YLH
     */
    public function getVRN(): ?string
    {
        return $this->vRN;
    }

    /**
     * Sets V RN.
     * Vehicle registration number
     * Example: MV65YLH
     *
     * @maps VRN
     */
    public function setVRN(?string $vRN): void
    {
        $this->vRN = $vRN;
    }

    /**
     * Returns Issue Date.
     * Issue date
     * Format: yyyyMMdd
     * Note: Clients to convert this to appropriate DateTime type.
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     * Issue date
     * Format: yyyyMMdd
     * Note: Clients to convert this to appropriate DateTime type.
     *
     * @maps IssueDate
     */
    public function setIssueDate(?string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Issue Number.
     * Issue Number
     */
    public function getIssueNumber(): ?int
    {
        return $this->issueNumber;
    }

    /**
     * Sets Issue Number.
     * Issue Number
     *
     * @maps IssueNumber
     */
    public function setIssueNumber(?int $issueNumber): void
    {
        $this->issueNumber = $issueNumber;
    }

    /**
     * Returns Account Id.
     * Account ID
     * Example: 29484
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account ID
     * Example: 29484
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Number.
     * Account Number
     * Example: GB99215176
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number
     * Example: GB99215176
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Account Name.
     * Account Name
     * Example: MATTHEW ALGIE & COMPANY LIMITED
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account Name
     * Example: MATTHEW ALGIE & COMPANY LIMITED
     *
     * @maps AccountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Account Short Name.
     * Account Short Name
     */
    public function getAccountShortName(): ?string
    {
        return $this->accountShortName;
    }

    /**
     * Sets Account Short Name.
     * Account Short Name
     *
     * @maps AccountShortName
     */
    public function setAccountShortName(?string $accountShortName): void
    {
        $this->accountShortName = $accountShortName;
    }

    /**
     * Returns Currency Code.
     * ISO currency code of the Customer Currency
     * Example: GBP
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     * ISO currency code of the Customer Currency
     * Example: GBP
     *
     * @maps CurrencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Returns Col Co Currency Code.
     * ISO currency code of the country.
     * Example: GBP
     */
    public function getColCoCurrencyCode(): ?string
    {
        return $this->colCoCurrencyCode;
    }

    /**
     * Sets Col Co Currency Code.
     * ISO currency code of the country.
     * Example: GBP
     *
     * @maps ColCoCurrencyCode
     */
    public function setColCoCurrencyCode(?string $colCoCurrencyCode): void
    {
        $this->colCoCurrencyCode = $colCoCurrencyCode;
    }

    /**
     * Returns Col Co Currency Symbol.
     * Currency symbol of the country.
     * Example: £, $
     */
    public function getColCoCurrencySymbol(): ?string
    {
        return $this->colCoCurrencySymbol;
    }

    /**
     * Sets Col Co Currency Symbol.
     * Currency symbol of the country.
     * Example: £, $
     *
     * @maps ColCoCurrencySymbol
     */
    public function setColCoCurrencySymbol(?string $colCoCurrencySymbol): void
    {
        $this->colCoCurrencySymbol = $colCoCurrencySymbol;
    }

    /**
     * Returns Restriction Currency Code.
     * ISO currency code of the country.
     * Example: GBP
     */
    public function getRestrictionCurrencyCode(): ?string
    {
        return $this->restrictionCurrencyCode;
    }

    /**
     * Sets Restriction Currency Code.
     * ISO currency code of the country.
     * Example: GBP
     *
     * @maps RestrictionCurrencyCode
     */
    public function setRestrictionCurrencyCode(?string $restrictionCurrencyCode): void
    {
        $this->restrictionCurrencyCode = $restrictionCurrencyCode;
    }

    /**
     * Returns Restriction Currency Symbol.
     * Currency symbol of the country.
     * Example: £, $
     */
    public function getRestrictionCurrencySymbol(): ?string
    {
        return $this->restrictionCurrencySymbol;
    }

    /**
     * Sets Restriction Currency Symbol.
     * Currency symbol of the country.
     * Example: £, $
     *
     * @maps RestrictionCurrencySymbol
     */
    public function setRestrictionCurrencySymbol(?string $restrictionCurrencySymbol): void
    {
        $this->restrictionCurrencySymbol = $restrictionCurrencySymbol;
    }

    /**
     * Returns Purchase Category Id.
     * Purchase category Id
     * Example: 123, 124, etc.,
     */
    public function getPurchaseCategoryId(): ?string
    {
        return $this->purchaseCategoryId;
    }

    /**
     * Sets Purchase Category Id.
     * Purchase category Id
     * Example: 123, 124, etc.,
     *
     * @maps PurchaseCategoryId
     */
    public function setPurchaseCategoryId(?string $purchaseCategoryId): void
    {
        $this->purchaseCategoryId = $purchaseCategoryId;
    }

    /**
     * Returns Purchase Category Code.
     * Purchase category code
     *
     * Example:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - FuelSave only
     *
     * 2 - FuelSave and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and FuelSave
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and FuelSave and Lubricants
     */
    public function getPurchaseCategoryCode(): ?string
    {
        return $this->purchaseCategoryCode;
    }

    /**
     * Sets Purchase Category Code.
     * Purchase category code
     *
     * Example:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - FuelSave only
     *
     * 2 - FuelSave and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and FuelSave
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and FuelSave and Lubricants
     *
     * @maps PurchaseCategoryCode
     */
    public function setPurchaseCategoryCode(?string $purchaseCategoryCode): void
    {
        $this->purchaseCategoryCode = $purchaseCategoryCode;
    }

    /**
     * Returns Purchase Category Name.
     * Purchase category name
     *
     * Example:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - FuelSave only
     *
     * 2 - FuelSave and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and FuelSave
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and FuelSave and Lubricants
     */
    public function getPurchaseCategoryName(): ?string
    {
        return $this->purchaseCategoryName;
    }

    /**
     * Sets Purchase Category Name.
     * Purchase category name
     *
     * Example:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - FuelSave only
     *
     * 2 - FuelSave and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and FuelSave
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and FuelSave and Lubricants
     *
     * @maps PurchaseCategoryName
     */
    public function setPurchaseCategoryName(?string $purchaseCategoryName): void
    {
        $this->purchaseCategoryName = $purchaseCategoryName;
    }

    /**
     * Returns Is Superseded.
     * True/False
     * True if a new card is issued with the same PAN, else false
     */
    public function getIsSuperseded(): ?bool
    {
        return $this->isSuperseded;
    }

    /**
     * Sets Is Superseded.
     * True/False
     * True if a new card is issued with the same PAN, else false
     *
     * @maps IsSuperseded
     */
    public function setIsSuperseded(?bool $isSuperseded): void
    {
        $this->isSuperseded = $isSuperseded;
    }

    /**
     * Returns Is Virtual Card.
     * True/False
     * True if it is a virtual card, else false
     */
    public function getIsVirtualCard(): ?bool
    {
        return $this->isVirtualCard;
    }

    /**
     * Sets Is Virtual Card.
     * True/False
     * True if it is a virtual card, else false
     *
     * @maps IsVirtualCard
     */
    public function setIsVirtualCard(?bool $isVirtualCard): void
    {
        $this->isVirtualCard = $isVirtualCard;
    }

    /**
     * Returns Is National.
     * True/False
     * True if it is a national card, else false
     */
    public function getIsNational(): ?bool
    {
        return $this->isNational;
    }

    /**
     * Sets Is National.
     * True/False
     * True if it is a national card, else false
     *
     * @maps IsNational
     */
    public function setIsNational(?bool $isNational): void
    {
        $this->isNational = $isNational;
    }

    /**
     * Returns Is International.
     * True/False
     * True if it is an international card, else false
     */
    public function getIsInternational(): ?bool
    {
        return $this->isInternational;
    }

    /**
     * Sets Is International.
     * True/False
     * True if it is an international card, else false
     *
     * @maps IsInternational
     */
    public function setIsInternational(?bool $isInternational): void
    {
        $this->isInternational = $isInternational;
    }

    /**
     * Returns Is CRT.
     * True/False
     * True if it is a CRT type card, else false
     */
    public function getIsCRT(): ?bool
    {
        return $this->isCRT;
    }

    /**
     * Sets Is CRT.
     * True/False
     * True if it is a CRT type card, else false
     *
     * @maps IsCRT
     */
    public function setIsCRT(?bool $isCRT): void
    {
        $this->isCRT = $isCRT;
    }

    /**
     * Returns Is Fleet.
     * True/False
     * True if it is a Fleet type card, else false
     */
    public function getIsFleet(): ?bool
    {
        return $this->isFleet;
    }

    /**
     * Sets Is Fleet.
     * True/False
     * True if it is a Fleet type card, else false
     *
     * @maps IsFleet
     */
    public function setIsFleet(?bool $isFleet): void
    {
        $this->isFleet = $isFleet;
    }

    /**
     * Returns Is Shell Sites Only.
     * True/False
     * True if it is only allowed at Shell sites, else false
     */
    public function getIsShellSitesOnly(): ?bool
    {
        return $this->isShellSitesOnly;
    }

    /**
     * Sets Is Shell Sites Only.
     * True/False
     * True if it is only allowed at Shell sites, else false
     *
     * @maps IsShellSitesOnly
     */
    public function setIsShellSitesOnly(?bool $isShellSitesOnly): void
    {
        $this->isShellSitesOnly = $isShellSitesOnly;
    }

    /**
     * Returns Is Partner Sites Included.
     * True/False
     * True if it is allowed at all partner sites, else false
     */
    public function getIsPartnerSitesIncluded(): ?bool
    {
        return $this->isPartnerSitesIncluded;
    }

    /**
     * Sets Is Partner Sites Included.
     * True/False
     * True if it is allowed at all partner sites, else false
     *
     * @maps IsPartnerSitesIncluded
     */
    public function setIsPartnerSitesIncluded(?bool $isPartnerSitesIncluded): void
    {
        $this->isPartnerSitesIncluded = $isPartnerSitesIncluded;
    }

    /**
     * Returns Card Type Id.
     * Card Type ID
     * Example Id & Description:
     * 1 - Philippines CRT 7077861
     * 2- Philippines Fleet 7002861
     * 5-SHELL FLEET- HONG KONG 7002821
     * 6-SHELL NHF- HONG KONG 7002821
     * 7-SHELL CRT- HONG KONG 7077821
     */
    public function getCardTypeId(): ?int
    {
        return $this->cardTypeId;
    }

    /**
     * Sets Card Type Id.
     * Card Type ID
     * Example Id & Description:
     * 1 - Philippines CRT 7077861
     * 2- Philippines Fleet 7002861
     * 5-SHELL FLEET- HONG KONG 7002821
     * 6-SHELL NHF- HONG KONG 7002821
     * 7-SHELL CRT- HONG KONG 7077821
     *
     * @maps CardTypeId
     */
    public function setCardTypeId(?int $cardTypeId): void
    {
        $this->cardTypeId = $cardTypeId;
    }

    /**
     * Returns Card Type Code.
     * ISO code of the card i.e. first 7 digits of the PAN
     */
    public function getCardTypeCode(): ?string
    {
        return $this->cardTypeCode;
    }

    /**
     * Sets Card Type Code.
     * ISO code of the card i.e. first 7 digits of the PAN
     *
     * @maps CardTypeCode
     */
    public function setCardTypeCode(?string $cardTypeCode): void
    {
        $this->cardTypeCode = $cardTypeCode;
    }

    /**
     * Returns Card Type Name.
     * Card Type Name
     * Example Id & Description:
     * 1 - Philippines CRT 7077861
     * 2- Philippines Fleet 7002861
     * 5-SHELL FLEET- HONG KONG 7002821
     * 6-SHELL NHF- HONG KONG 7002821
     * 7-SHELL CRT- HONG KONG 7077821
     */
    public function getCardTypeName(): ?string
    {
        return $this->cardTypeName;
    }

    /**
     * Sets Card Type Name.
     * Card Type Name
     * Example Id & Description:
     * 1 - Philippines CRT 7077861
     * 2- Philippines Fleet 7002861
     * 5-SHELL FLEET- HONG KONG 7002821
     * 6-SHELL NHF- HONG KONG 7002821
     * 7-SHELL CRT- HONG KONG 7077821
     *
     * @maps CardTypeName
     */
    public function setCardTypeName(?string $cardTypeName): void
    {
        $this->cardTypeName = $cardTypeName;
    }

    /**
     * Returns Bundle Id.
     * Bundle Id associated with card in the Gateway.
     * This field will have a null value if the card is not associated with any bundle of
     * IncludeBundleDetails in request is false.
     * If the search is based on a bundle Id, the same will be returned.
     */
    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    /**
     * Sets Bundle Id.
     * Bundle Id associated with card in the Gateway.
     * This field will have a null value if the card is not associated with any bundle of
     * IncludeBundleDetails in request is false.
     * If the search is based on a bundle Id, the same will be returned.
     *
     * @maps BundleId
     */
    public function setBundleId(?string $bundleId): void
    {
        $this->bundleId = $bundleId;
    }

    /**
     * Returns Medium Type ID.
     * Id of the medium type identifier.
     * Example: 1,2,4
     * Full list below:
     * 1 - Fuel Card
     * 2 - Fuel Card with EV
     * 4 - Fuel Card and Key fob Card
     * 5 - Key fob
     * 6 - Virtual Card
     * 7 - NPII Token
     * 8 – Smartpay
     */
    public function getMediumTypeID(): ?int
    {
        return $this->mediumTypeID;
    }

    /**
     * Sets Medium Type ID.
     * Id of the medium type identifier.
     * Example: 1,2,4
     * Full list below:
     * 1 - Fuel Card
     * 2 - Fuel Card with EV
     * 4 - Fuel Card and Key fob Card
     * 5 - Key fob
     * 6 - Virtual Card
     * 7 - NPII Token
     * 8 – Smartpay
     *
     * @maps MediumTypeID
     */
    public function setMediumTypeID(?int $mediumTypeID): void
    {
        $this->mediumTypeID = $mediumTypeID;
    }

    /**
     * Returns Medium Type.
     * Name of the medium type identifier.
     *
     *
     *
     * Example: Fuel Card, Fuel Card with EV, Key fob
     *
     * Full list below:
     *
     * 1 - Fuel Card
     *
     * 2 - Fuel Card with EV
     *
     * 4 - Fuel Card and Key fob Card
     *
     * 5 - Key fob
     *
     * 6 - Virtual Card
     *
     * 7 - NPII Token
     *
     * 8 - Smartpay
     */
    public function getMediumType(): ?string
    {
        return $this->mediumType;
    }

    /**
     * Sets Medium Type.
     * Name of the medium type identifier.
     *
     *
     *
     * Example: Fuel Card, Fuel Card with EV, Key fob
     *
     * Full list below:
     *
     * 1 - Fuel Card
     *
     * 2 - Fuel Card with EV
     *
     * 4 - Fuel Card and Key fob Card
     *
     * 5 - Key fob
     *
     * 6 - Virtual Card
     *
     * 7 - NPII Token
     *
     * 8 - Smartpay
     *
     * @maps MediumType
     */
    public function setMediumType(?string $mediumType): void
    {
        $this->mediumType = $mediumType;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->cardId)) {
            $json['CardId']                    = $this->cardId;
        }
        if (isset($this->pAN)) {
            $json['PAN']                       = $this->pAN;
        }
        if (isset($this->expiryDate)) {
            $json['ExpiryDate']                = $this->expiryDate;
        }
        if (isset($this->statusId)) {
            $json['StatusId']                  = $this->statusId;
        }
        if (isset($this->statusDescription)) {
            $json['StatusDescription']         = $this->statusDescription;
        }
        if (isset($this->driverName)) {
            $json['DriverName']                = $this->driverName;
        }
        if (isset($this->vRN)) {
            $json['VRN']                       = $this->vRN;
        }
        if (isset($this->issueDate)) {
            $json['IssueDate']                 = $this->issueDate;
        }
        if (isset($this->issueNumber)) {
            $json['IssueNumber']               = $this->issueNumber;
        }
        if (isset($this->accountId)) {
            $json['AccountId']                 = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber']             = $this->accountNumber;
        }
        if (isset($this->accountName)) {
            $json['AccountName']               = $this->accountName;
        }
        if (isset($this->accountShortName)) {
            $json['AccountShortName']          = $this->accountShortName;
        }
        if (isset($this->currencyCode)) {
            $json['CurrencyCode']              = $this->currencyCode;
        }
        if (isset($this->colCoCurrencyCode)) {
            $json['ColCoCurrencyCode']         = $this->colCoCurrencyCode;
        }
        if (isset($this->colCoCurrencySymbol)) {
            $json['ColCoCurrencySymbol']       = $this->colCoCurrencySymbol;
        }
        if (isset($this->restrictionCurrencyCode)) {
            $json['RestrictionCurrencyCode']   = $this->restrictionCurrencyCode;
        }
        if (isset($this->restrictionCurrencySymbol)) {
            $json['RestrictionCurrencySymbol'] = $this->restrictionCurrencySymbol;
        }
        if (isset($this->purchaseCategoryId)) {
            $json['PurchaseCategoryId']        = $this->purchaseCategoryId;
        }
        if (isset($this->purchaseCategoryCode)) {
            $json['PurchaseCategoryCode']      = $this->purchaseCategoryCode;
        }
        if (isset($this->purchaseCategoryName)) {
            $json['PurchaseCategoryName']      = $this->purchaseCategoryName;
        }
        if (isset($this->isSuperseded)) {
            $json['IsSuperseded']              = $this->isSuperseded;
        }
        if (isset($this->isVirtualCard)) {
            $json['IsVirtualCard']             = $this->isVirtualCard;
        }
        if (isset($this->isNational)) {
            $json['IsNational']                = $this->isNational;
        }
        if (isset($this->isInternational)) {
            $json['IsInternational']           = $this->isInternational;
        }
        if (isset($this->isCRT)) {
            $json['IsCRT']                     = $this->isCRT;
        }
        if (isset($this->isFleet)) {
            $json['IsFleet']                   = $this->isFleet;
        }
        if (isset($this->isShellSitesOnly)) {
            $json['IsShellSitesOnly']          = $this->isShellSitesOnly;
        }
        if (isset($this->isPartnerSitesIncluded)) {
            $json['IsPartnerSitesIncluded']    = $this->isPartnerSitesIncluded;
        }
        if (isset($this->cardTypeId)) {
            $json['CardTypeId']                = $this->cardTypeId;
        }
        if (isset($this->cardTypeCode)) {
            $json['CardTypeCode']              = $this->cardTypeCode;
        }
        if (isset($this->cardTypeName)) {
            $json['CardTypeName']              = $this->cardTypeName;
        }
        if (isset($this->bundleId)) {
            $json['BundleId']                  = $this->bundleId;
        }
        if (isset($this->mediumTypeID)) {
            $json['MediumTypeID']              = $this->mediumTypeID;
        }
        if (isset($this->mediumType)) {
            $json['MediumType']                = $this->mediumType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
