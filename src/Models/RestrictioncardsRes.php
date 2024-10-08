<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class RestrictioncardsRes implements \JsonSerializable
{
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
    private $cardId;

    /**
     * @var string|null
     */
    private $pAN;

    /**
     * @var string|null
     */
    private $usageRestrictionStatus;

    /**
     * @var string|null
     */
    private $usageRestrictionDescription;

    /**
     * @var string|null
     */
    private $dayTimeRestrictionStatus;

    /**
     * @var string|null
     */
    private $dayTimeRestrictionDescription;

    /**
     * @var string|null
     */
    private $productRestrictionStatus;

    /**
     * @var string|null
     */
    private $productRestrictionDescription;

    /**
     * @var string|null
     */
    private $locationRestrictionStatus;

    /**
     * @var string|null
     */
    private $locationRestrictionStatusDescription;

    /**
     * @var string|null
     */
    private $validationErrorCode;

    /**
     * @var string|null
     */
    private $validationErrorDescription;

    /**
     * Returns Account Id.
     * Account Id of the customer.
     * Example: 123456
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account Id of the customer.
     * Example: 123456
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Number.
     * Account Number of the customer.
     * Example: GB000000123
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number of the customer.
     * Example: GB000000123
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Card Id.
     * Unique Card Id
     * Example: 275549
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Unique Card Id
     * Example: 275549
     *
     * @maps CardId
     */
    public function setCardId(?string $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns P AN.
     * Card PAN.
     * Example: 7002051006629890645
     */
    public function getPAN(): ?string
    {
        return $this->pAN;
    }

    /**
     * Sets P AN.
     * Card PAN.
     * Example: 7002051006629890645
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN = $pAN;
    }

    /**
     * Returns Usage Restriction Status.
     * Status of the card usage restriction submitted. Based on the response the value will be set as
     * either “Success” or “Failed”.
     */
    public function getUsageRestrictionStatus(): ?string
    {
        return $this->usageRestrictionStatus;
    }

    /**
     * Sets Usage Restriction Status.
     * Status of the card usage restriction submitted. Based on the response the value will be set as
     * either “Success” or “Failed”.
     *
     * @maps UsageRestrictionStatus
     */
    public function setUsageRestrictionStatus(?string $usageRestrictionStatus): void
    {
        $this->usageRestrictionStatus = $usageRestrictionStatus;
    }

    /**
     * Returns Usage Restriction Description.
     * Response for the usage restriction in case of an error. This field will have a value only when
     * “UsageRestrictionStatus” is “Failed”.
     */
    public function getUsageRestrictionDescription(): ?string
    {
        return $this->usageRestrictionDescription;
    }

    /**
     * Sets Usage Restriction Description.
     * Response for the usage restriction in case of an error. This field will have a value only when
     * “UsageRestrictionStatus” is “Failed”.
     *
     * @maps UsageRestrictionDescription
     */
    public function setUsageRestrictionDescription(?string $usageRestrictionDescription): void
    {
        $this->usageRestrictionDescription = $usageRestrictionDescription;
    }

    /**
     * Returns Day Time Restriction Status.
     * Status of the card day/time restriction submitted. Based on the response from Gateway value will be
     * set as either “Success” or “Failed”.
     */
    public function getDayTimeRestrictionStatus(): ?string
    {
        return $this->dayTimeRestrictionStatus;
    }

    /**
     * Sets Day Time Restriction Status.
     * Status of the card day/time restriction submitted. Based on the response from Gateway value will be
     * set as either “Success” or “Failed”.
     *
     * @maps DayTimeRestrictionStatus
     */
    public function setDayTimeRestrictionStatus(?string $dayTimeRestrictionStatus): void
    {
        $this->dayTimeRestrictionStatus = $dayTimeRestrictionStatus;
    }

    /**
     * Returns Day Time Restriction Description.
     * Response for the day/time restriction in case of an error. This field will have a value only when
     * “DayTimeRestrictionStatus” is “Failed”.
     */
    public function getDayTimeRestrictionDescription(): ?string
    {
        return $this->dayTimeRestrictionDescription;
    }

    /**
     * Sets Day Time Restriction Description.
     * Response for the day/time restriction in case of an error. This field will have a value only when
     * “DayTimeRestrictionStatus” is “Failed”.
     *
     * @maps DayTimeRestrictionDescription
     */
    public function setDayTimeRestrictionDescription(?string $dayTimeRestrictionDescription): void
    {
        $this->dayTimeRestrictionDescription = $dayTimeRestrictionDescription;
    }

    /**
     * Returns Product Restriction Status.
     * Status of the card product restriction submitted. Based on the response  the value will be set
     * either as “Success” or “Failed”.
     */
    public function getProductRestrictionStatus(): ?string
    {
        return $this->productRestrictionStatus;
    }

    /**
     * Sets Product Restriction Status.
     * Status of the card product restriction submitted. Based on the response  the value will be set
     * either as “Success” or “Failed”.
     *
     * @maps ProductRestrictionStatus
     */
    public function setProductRestrictionStatus(?string $productRestrictionStatus): void
    {
        $this->productRestrictionStatus = $productRestrictionStatus;
    }

    /**
     * Returns Product Restriction Description.
     * Response for the product restriction in case of an error. This field will have a value only when
     * “ProductRestrictionStatus” is “Failed”.
     */
    public function getProductRestrictionDescription(): ?string
    {
        return $this->productRestrictionDescription;
    }

    /**
     * Sets Product Restriction Description.
     * Response for the product restriction in case of an error. This field will have a value only when
     * “ProductRestrictionStatus” is “Failed”.
     *
     * @maps ProductRestrictionDescription
     */
    public function setProductRestrictionDescription(?string $productRestrictionDescription): void
    {
        $this->productRestrictionDescription = $productRestrictionDescription;
    }

    /**
     * Returns Location Restriction Status.
     * Card Location restriction submitted, based on response value set as “Success” or “Failed”.
     */
    public function getLocationRestrictionStatus(): ?string
    {
        return $this->locationRestrictionStatus;
    }

    /**
     * Sets Location Restriction Status.
     * Card Location restriction submitted, based on response value set as “Success” or “Failed”.
     *
     * @maps LocationRestrictionStatus
     */
    public function setLocationRestrictionStatus(?string $locationRestrictionStatus): void
    {
        $this->locationRestrictionStatus = $locationRestrictionStatus;
    }

    /**
     * Returns Location Restriction Status Description.
     * Response for the location restriction in case of an error. This field will have a value only when
     * “LocationRestrictionStatus” is “Failed”.
     */
    public function getLocationRestrictionStatusDescription(): ?string
    {
        return $this->locationRestrictionStatusDescription;
    }

    /**
     * Sets Location Restriction Status Description.
     * Response for the location restriction in case of an error. This field will have a value only when
     * “LocationRestrictionStatus” is “Failed”.
     *
     * @maps LocationRestrictionStatusDescription
     */
    public function setLocationRestrictionStatusDescription(?string $locationRestrictionStatusDescription): void
    {
        $this->locationRestrictionStatusDescription = $locationRestrictionStatusDescription;
    }

    /**
     * Returns Validation Error Code.
     * Error code for validation failure.
     */
    public function getValidationErrorCode(): ?string
    {
        return $this->validationErrorCode;
    }

    /**
     * Sets Validation Error Code.
     * Error code for validation failure.
     *
     * @maps ValidationErrorCode
     */
    public function setValidationErrorCode(?string $validationErrorCode): void
    {
        $this->validationErrorCode = $validationErrorCode;
    }

    /**
     * Returns Validation Error Description.
     * Description of validation failure.
     */
    public function getValidationErrorDescription(): ?string
    {
        return $this->validationErrorDescription;
    }

    /**
     * Sets Validation Error Description.
     * Description of validation failure.
     *
     * @maps ValidationErrorDescription
     */
    public function setValidationErrorDescription(?string $validationErrorDescription): void
    {
        $this->validationErrorDescription = $validationErrorDescription;
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
        if (isset($this->accountId)) {
            $json['AccountId']                            = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber']                        = $this->accountNumber;
        }
        if (isset($this->cardId)) {
            $json['CardId']                               = $this->cardId;
        }
        if (isset($this->pAN)) {
            $json['PAN']                                  = $this->pAN;
        }
        if (isset($this->usageRestrictionStatus)) {
            $json['UsageRestrictionStatus']               = $this->usageRestrictionStatus;
        }
        if (isset($this->usageRestrictionDescription)) {
            $json['UsageRestrictionDescription']          = $this->usageRestrictionDescription;
        }
        if (isset($this->dayTimeRestrictionStatus)) {
            $json['DayTimeRestrictionStatus']             = $this->dayTimeRestrictionStatus;
        }
        if (isset($this->dayTimeRestrictionDescription)) {
            $json['DayTimeRestrictionDescription']        = $this->dayTimeRestrictionDescription;
        }
        if (isset($this->productRestrictionStatus)) {
            $json['ProductRestrictionStatus']             = $this->productRestrictionStatus;
        }
        if (isset($this->productRestrictionDescription)) {
            $json['ProductRestrictionDescription']        = $this->productRestrictionDescription;
        }
        if (isset($this->locationRestrictionStatus)) {
            $json['LocationRestrictionStatus']            = $this->locationRestrictionStatus;
        }
        if (isset($this->locationRestrictionStatusDescription)) {
            $json['LocationRestrictionStatusDescription'] = $this->locationRestrictionStatusDescription;
        }
        if (isset($this->validationErrorCode)) {
            $json['ValidationErrorCode']                  = $this->validationErrorCode;
        }
        if (isset($this->validationErrorDescription)) {
            $json['ValidationErrorDescription']           = $this->validationErrorDescription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
