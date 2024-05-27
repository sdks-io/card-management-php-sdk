<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

/**
 * List of Delivery address update entity. The fields of this entity are described below.
 */
class DeliveryAddressUpdateReferences implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $cardId;

    /**
     * @var string|null
     */
    private $cardPAN;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var int|null
     */
    private $referenceId;

    /**
     * @var string|null
     */
    private $errorInfo;

    /**
     * Returns Card Id.
     * CardId
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * CardId
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns Card PAN.
     * PAN of the card.
     */
    public function getCardPAN(): ?string
    {
        return $this->cardPAN;
    }

    /**
     * Sets Card PAN.
     * PAN of the card.
     *
     * @maps CardPAN
     */
    public function setCardPAN(?string $cardPAN): void
    {
        $this->cardPAN = $cardPAN;
    }

    /**
     * Returns Account Id.
     * AccountId
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * AccountId
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Number.
     * Account number
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account number
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Reference Id.
     * Individual delivery address update reference number for the delivery address update request.
     */
    public function getReferenceId(): ?int
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * Individual delivery address update reference number for the delivery address update request.
     *
     * @maps ReferenceId
     */
    public function setReferenceId(?int $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Returns Error Info.
     * Individual error information for the delivery address update request.
     */
    public function getErrorInfo(): ?string
    {
        return $this->errorInfo;
    }

    /**
     * Sets Error Info.
     * Individual error information for the delivery address update request.
     *
     * @maps ErrorInfo
     */
    public function setErrorInfo(?string $errorInfo): void
    {
        $this->errorInfo = $errorInfo;
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
            $json['CardId']        = $this->cardId;
        }
        if (isset($this->cardPAN)) {
            $json['CardPAN']       = $this->cardPAN;
        }
        if (isset($this->accountId)) {
            $json['AccountId']     = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber'] = $this->accountNumber;
        }
        if (isset($this->referenceId)) {
            $json['ReferenceId']   = $this->referenceId;
        }
        if (isset($this->errorInfo)) {
            $json['ErrorInfo']     = $this->errorInfo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
