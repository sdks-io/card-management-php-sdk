<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class BudleDetailsRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $colCoId;

    /**
     * @var int|null
     */
    private $colCoCode;

    /**
     * @var string|null
     */
    private $payerId;

    /**
     * @var string|null
     */
    private $payerNumber;

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
    private $bundleId;

    /**
     * Returns Col Co Id.
     * Collecting Company Id  of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     */
    public function getColCoId(): ?int
    {
        return $this->colCoId;
    }

    /**
     * Sets Col Co Id.
     * Collecting Company Id  of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId = $colCoId;
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     */
    public function getColCoCode(): ?int
    {
        return $this->colCoCode;
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Payer Id.
     * Payer Id of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     * Payer Id of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?string $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Returns Payer Number.
     * Payer Number of the selected payer.
     * Optional if PayerId is passed else Mandatory
     * Example: GB000000123
     */
    public function getPayerNumber(): ?string
    {
        return $this->payerNumber;
    }

    /**
     * Sets Payer Number.
     * Payer Number of the selected payer.
     * Optional if PayerId is passed else Mandatory
     * Example: GB000000123
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber = $payerNumber;
    }

    /**
     * Returns Account Id.
     * Account Id of the customer.
     * Optional if Account Number is passed else Mandatory
     * Example: 123456
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account Id of the customer.
     * Optional if Account Number is passed else Mandatory
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
     * Optional if Account Id is passed else Mandatory
     * Example: GB000000123
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number of the customer.
     * Optional if Account Id is passed else Mandatory
     * Example: GB000000123
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Bundle Id.
     * Bundle Id associated with account
     * Mandatory.
     * Example: 835662721
     */
    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    /**
     * Sets Bundle Id.
     * Bundle Id associated with account
     * Mandatory.
     * Example: 835662721
     *
     * @maps BundleId
     */
    public function setBundleId(?string $bundleId): void
    {
        $this->bundleId = $bundleId;
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
        if (isset($this->colCoId)) {
            $json['ColCoId']       = $this->colCoId;
        }
        if (isset($this->colCoCode)) {
            $json['ColCoCode']     = $this->colCoCode;
        }
        if (isset($this->payerId)) {
            $json['PayerId']       = $this->payerId;
        }
        if (isset($this->payerNumber)) {
            $json['PayerNumber']   = $this->payerNumber;
        }
        if (isset($this->accountId)) {
            $json['AccountId']     = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber'] = $this->accountNumber;
        }
        if (isset($this->bundleId)) {
            $json['BundleId']      = $this->bundleId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
