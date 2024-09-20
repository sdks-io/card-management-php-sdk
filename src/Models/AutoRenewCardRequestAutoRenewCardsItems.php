<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class AutoRenewCardRequestAutoRenewCardsItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $pAN;

    /**
     * @var float|null
     */
    private $pANID;

    /**
     * @var int|null
     */
    private $cardId;

    /**
     * @var bool
     */
    private $reissueSetting;

    /**
     * @param bool $reissueSetting
     */
    public function __construct(bool $reissueSetting)
    {
        $this->reissueSetting = $reissueSetting;
    }

    /**
     * Returns Account Number.
     * Account Number of the customer.
     * Optional if AccountId is passed, else Mandatory.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number of the customer.
     * Optional if AccountId is passed, else Mandatory.
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Account Id.
     * Account Id of the customer.
     * Optional if AccountNumber is passed, else Mandatory.
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account Id of the customer.
     * Optional if AccountNumber is passed, else Mandatory.
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns P AN.
     * PAN of the card.
     * Optional if CardId is passed, else Mandatory.
     */
    public function getPAN(): ?string
    {
        return $this->pAN;
    }

    /**
     * Sets P AN.
     * PAN of the card.
     * Optional if CardId is passed, else Mandatory.
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN = $pAN;
    }

    /**
     * Returns P ANID.
     * Card PAN ID.
     *
     * Optional if CardId is given, else mandatory.
     *
     * Note: PANID is ignored if CardId is given.
     */
    public function getPANID(): ?float
    {
        return $this->pANID;
    }

    /**
     * Sets P ANID.
     * Card PAN ID.
     *
     * Optional if CardId is given, else mandatory.
     *
     * Note: PANID is ignored if CardId is given.
     *
     * @maps PANID
     */
    public function setPANID(?float $pANID): void
    {
        $this->pANID = $pANID;
    }

    /**
     * Returns Card Id.
     * Card Id of the card.
     * Optional if PAN is passed, else Mandatory.
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Card Id of the card.
     * Optional if PAN is passed, else Mandatory.
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns Reissue Setting.
     * Reissue setting of the card.
     *
     * Values:
     *
     * True – Card will be Reissued when nearing its expiry date
     *
     * False – Card will not be Reissued
     *
     * Mandatory
     */
    public function getReissueSetting(): bool
    {
        return $this->reissueSetting;
    }

    /**
     * Sets Reissue Setting.
     * Reissue setting of the card.
     *
     * Values:
     *
     * True – Card will be Reissued when nearing its expiry date
     *
     * False – Card will not be Reissued
     *
     * Mandatory
     *
     * @required
     * @maps ReissueSetting
     */
    public function setReissueSetting(bool $reissueSetting): void
    {
        $this->reissueSetting = $reissueSetting;
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
        if (isset($this->accountNumber)) {
            $json['AccountNumber'] = $this->accountNumber;
        }
        if (isset($this->accountId)) {
            $json['AccountId']     = $this->accountId;
        }
        if (isset($this->pAN)) {
            $json['PAN']           = $this->pAN;
        }
        if (isset($this->pANID)) {
            $json['PANID']         = $this->pANID;
        }
        if (isset($this->cardId)) {
            $json['CardId']        = $this->cardId;
        }
        $json['ReissueSetting']    = $this->reissueSetting;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
