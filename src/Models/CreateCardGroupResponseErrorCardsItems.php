<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class CreateCardGroupResponseErrorCardsItems implements \JsonSerializable
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
    private $errorCode;

    /**
     * @var string|null
     */
    private $errorDescription;

    /**
     * Returns Card Id.
     * Card Id of the card.
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Card Id of the card.
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns P AN.
     * PAN of the card.
     */
    public function getPAN(): ?string
    {
        return $this->pAN;
    }

    /**
     * Sets P AN.
     * PAN of the card.
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN = $pAN;
    }

    /**
     * Returns Error Code.
     * Error code for validation failure.
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     * Error code for validation failure.
     *
     * @maps ErrorCode
     */
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Description.
     * Description of validation failure.
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    /**
     * Sets Error Description.
     * Description of validation failure.
     *
     * @maps ErrorDescription
     */
    public function setErrorDescription(?string $errorDescription): void
    {
        $this->errorDescription = $errorDescription;
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
            $json['CardId']           = $this->cardId;
        }
        if (isset($this->pAN)) {
            $json['PAN']              = $this->pAN;
        }
        if (isset($this->errorCode)) {
            $json['ErrorCode']        = $this->errorCode;
        }
        if (isset($this->errorDescription)) {
            $json['ErrorDescription'] = $this->errorDescription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
