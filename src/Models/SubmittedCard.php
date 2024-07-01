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
 * Response entity object for SubmittedCard list <br/>Note: This list will be empty for status 9006 and
 * 9012 i.e., request for all the cards failed.
 */
class SubmittedCard implements \JsonSerializable
{
    /**
     * @var array
     */
    private $replacementCardReference = [];

    /**
     * @var array
     */
    private $updateCardReference = [];

    /**
     * @var array
     */
    private $accountId = [];

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $cardExpiryDate = [];

    /**
     * @var array
     */
    private $cardId = [];

    /**
     * @var array
     */
    private $colCoCode = [];

    /**
     * @var array
     */
    private $colCoId = [];

    /**
     * @var array
     */
    private $pAN = [];

    /**
     * @var array
     */
    private $payerId = [];

    /**
     * @var array
     */
    private $payerNumber = [];

    /**
     * Returns Replacement Card Reference.
     * Reference number for tracking of replacement card order request of the specific card,<br />
     * This is applicable for requests with target status as Block and OrderReplacement passed as True.
     */
    public function getReplacementCardReference(): ?int
    {
        if (count($this->replacementCardReference) == 0) {
            return null;
        }
        return $this->replacementCardReference['value'];
    }

    /**
     * Sets Replacement Card Reference.
     * Reference number for tracking of replacement card order request of the specific card,<br />
     * This is applicable for requests with target status as Block and OrderReplacement passed as True.
     *
     * @maps ReplacementCardReference
     */
    public function setReplacementCardReference(?int $replacementCardReference): void
    {
        $this->replacementCardReference['value'] = $replacementCardReference;
    }

    /**
     * Unsets Replacement Card Reference.
     * Reference number for tracking of replacement card order request of the specific card,<br />
     * This is applicable for requests with target status as Block and OrderReplacement passed as True.
     */
    public function unsetReplacementCardReference(): void
    {
        $this->replacementCardReference = [];
    }

    /**
     * Returns Update Card Reference.
     * Reference number for tracking of update status request of the specific card,
     */
    public function getUpdateCardReference(): ?int
    {
        if (count($this->updateCardReference) == 0) {
            return null;
        }
        return $this->updateCardReference['value'];
    }

    /**
     * Sets Update Card Reference.
     * Reference number for tracking of update status request of the specific card,
     *
     * @maps UpdateCardReference
     */
    public function setUpdateCardReference(?int $updateCardReference): void
    {
        $this->updateCardReference['value'] = $updateCardReference;
    }

    /**
     * Unsets Update Card Reference.
     * Reference number for tracking of update status request of the specific card,
     */
    public function unsetUpdateCardReference(): void
    {
        $this->updateCardReference = [];
    }

    /**
     * Returns Account Id.
     * Account Id of the customer.<br />
     * Optional if AccountNumber is passed, else Mandatory.
     */
    public function getAccountId(): ?int
    {
        if (count($this->accountId) == 0) {
            return null;
        }
        return $this->accountId['value'];
    }

    /**
     * Sets Account Id.
     * Account Id of the customer.<br />
     * Optional if AccountNumber is passed, else Mandatory.
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId['value'] = $accountId;
    }

    /**
     * Unsets Account Id.
     * Account Id of the customer.<br />
     * Optional if AccountNumber is passed, else Mandatory.
     */
    public function unsetAccountId(): void
    {
        $this->accountId = [];
    }

    /**
     * Returns Account Number.
     * Account Number of the customer.<br />
     * Optional if AccountId is passed, else Mandatory.
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Account Number of the customer.<br />
     * Optional if AccountId is passed, else Mandatory.
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account Number of the customer.<br />
     * Optional if AccountId is passed, else Mandatory.
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Card Expiry Date.
     * Expiry date of the card.<br />
     * Mandatory if PAN is passed, else optional.<br />
     * Format: yyyyMMdd
     */
    public function getCardExpiryDate(): ?string
    {
        if (count($this->cardExpiryDate) == 0) {
            return null;
        }
        return $this->cardExpiryDate['value'];
    }

    /**
     * Sets Card Expiry Date.
     * Expiry date of the card.<br />
     * Mandatory if PAN is passed, else optional.<br />
     * Format: yyyyMMdd
     *
     * @maps CardExpiryDate
     */
    public function setCardExpiryDate(?string $cardExpiryDate): void
    {
        $this->cardExpiryDate['value'] = $cardExpiryDate;
    }

    /**
     * Unsets Card Expiry Date.
     * Expiry date of the card.<br />
     * Mandatory if PAN is passed, else optional.<br />
     * Format: yyyyMMdd
     */
    public function unsetCardExpiryDate(): void
    {
        $this->cardExpiryDate = [];
    }

    /**
     * Returns Card Id.
     * Card Id of the card.<br />
     * Optional if PAN is passed, else Mandatory.
     */
    public function getCardId(): ?int
    {
        if (count($this->cardId) == 0) {
            return null;
        }
        return $this->cardId['value'];
    }

    /**
     * Sets Card Id.
     * Card Id of the card.<br />
     * Optional if PAN is passed, else Mandatory.
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId['value'] = $cardId;
    }

    /**
     * Unsets Card Id.
     * Card Id of the card.<br />
     * Optional if PAN is passed, else Mandatory.
     */
    public function unsetCardId(): void
    {
        $this->cardId = [];
    }

    /**
     * Returns Col Co Code.
     * Collecting company code of the customer. <br />
     * Optional if ColCoId is passed, else Mandatory.<br />
     */
    public function getColCoCode(): ?int
    {
        if (count($this->colCoCode) == 0) {
            return null;
        }
        return $this->colCoCode['value'];
    }

    /**
     * Sets Col Co Code.
     * Collecting company code of the customer. <br />
     * Optional if ColCoId is passed, else Mandatory.<br />
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode['value'] = $colCoCode;
    }

    /**
     * Unsets Col Co Code.
     * Collecting company code of the customer. <br />
     * Optional if ColCoId is passed, else Mandatory.<br />
     */
    public function unsetColCoCode(): void
    {
        $this->colCoCode = [];
    }

    /**
     * Returns Col Co Id.
     * Collecting company id of the customer. <br />
     * Optional if ColCoCode is passed, else Mandatory.<br />
     */
    public function getColCoId(): ?int
    {
        if (count($this->colCoId) == 0) {
            return null;
        }
        return $this->colCoId['value'];
    }

    /**
     * Sets Col Co Id.
     * Collecting company id of the customer. <br />
     * Optional if ColCoCode is passed, else Mandatory.<br />
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId['value'] = $colCoId;
    }

    /**
     * Unsets Col Co Id.
     * Collecting company id of the customer. <br />
     * Optional if ColCoCode is passed, else Mandatory.<br />
     */
    public function unsetColCoId(): void
    {
        $this->colCoId = [];
    }

    /**
     * Returns P AN.
     * PAN of the card.<br />
     * Optional if CardId is passed, else Mandatory.<br />
     */
    public function getPAN(): ?string
    {
        if (count($this->pAN) == 0) {
            return null;
        }
        return $this->pAN['value'];
    }

    /**
     * Sets P AN.
     * PAN of the card.<br />
     * Optional if CardId is passed, else Mandatory.<br />
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN['value'] = $pAN;
    }

    /**
     * Unsets P AN.
     * PAN of the card.<br />
     * Optional if CardId is passed, else Mandatory.<br />
     */
    public function unsetPAN(): void
    {
        $this->pAN = [];
    }

    /**
     * Returns Payer Id.
     * Payer id of the customer.<br />
     * Optional if PayerNumber is passed, else Mandatory.
     */
    public function getPayerId(): ?int
    {
        if (count($this->payerId) == 0) {
            return null;
        }
        return $this->payerId['value'];
    }

    /**
     * Sets Payer Id.
     * Payer id of the customer.<br />
     * Optional if PayerNumber is passed, else Mandatory.
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer id of the customer.<br />
     * Optional if PayerNumber is passed, else Mandatory.
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * PayerNumber of the customer.<br />
     * Optional if PayerId is passed, else Mandatory.
     */
    public function getPayerNumber(): ?string
    {
        if (count($this->payerNumber) == 0) {
            return null;
        }
        return $this->payerNumber['value'];
    }

    /**
     * Sets Payer Number.
     * PayerNumber of the customer.<br />
     * Optional if PayerId is passed, else Mandatory.
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * PayerNumber of the customer.<br />
     * Optional if PayerId is passed, else Mandatory.
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
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
        if (!empty($this->replacementCardReference)) {
            $json['ReplacementCardReference'] = $this->replacementCardReference['value'];
        }
        if (!empty($this->updateCardReference)) {
            $json['UpdateCardReference']      = $this->updateCardReference['value'];
        }
        if (!empty($this->accountId)) {
            $json['AccountId']                = $this->accountId['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['AccountNumber']            = $this->accountNumber['value'];
        }
        if (!empty($this->cardExpiryDate)) {
            $json['CardExpiryDate']           = $this->cardExpiryDate['value'];
        }
        if (!empty($this->cardId)) {
            $json['CardId']                   = $this->cardId['value'];
        }
        if (!empty($this->colCoCode)) {
            $json['ColCoCode']                = $this->colCoCode['value'];
        }
        if (!empty($this->colCoId)) {
            $json['ColCoId']                  = $this->colCoId['value'];
        }
        if (!empty($this->pAN)) {
            $json['PAN']                      = $this->pAN['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']                  = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']              = $this->payerNumber['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
