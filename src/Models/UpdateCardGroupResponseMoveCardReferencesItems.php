<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class UpdateCardGroupResponseMoveCardReferencesItems implements \JsonSerializable
{
    /**
     * @var array
     */
    private $cardId = [];

    /**
     * @var array
     */
    private $pAN = [];

    /**
     * @var array
     */
    private $reference = [];

    /**
     * Returns Card Id.
     * Card Id of the card.
     * Example: 123
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
     * Card Id of the card.
     * Example: 123
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId['value'] = $cardId;
    }

    /**
     * Unsets Card Id.
     * Card Id of the card.
     * Example: 123
     */
    public function unsetCardId(): void
    {
        $this->cardId = [];
    }

    /**
     * Returns P AN.
     * PAN of the card.
     * Example: 7002051123456789145
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
     * PAN of the card.
     * Example: 7002051123456789145
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN['value'] = $pAN;
    }

    /**
     * Unsets P AN.
     * PAN of the card.
     * Example: 7002051123456789145
     */
    public function unsetPAN(): void
    {
        $this->pAN = [];
    }

    /**
     * Returns Reference.
     * Reference number for tracking of update status request of the specific card.
     */
    public function getReference(): ?int
    {
        if (count($this->reference) == 0) {
            return null;
        }
        return $this->reference['value'];
    }

    /**
     * Sets Reference.
     * Reference number for tracking of update status request of the specific card.
     *
     * @maps Reference
     */
    public function setReference(?int $reference): void
    {
        $this->reference['value'] = $reference;
    }

    /**
     * Unsets Reference.
     * Reference number for tracking of update status request of the specific card.
     */
    public function unsetReference(): void
    {
        $this->reference = [];
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
        if (!empty($this->cardId)) {
            $json['CardId']    = $this->cardId['value'];
        }
        if (!empty($this->pAN)) {
            $json['PAN']       = $this->pAN['value'];
        }
        if (!empty($this->reference)) {
            $json['Reference'] = $this->reference['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
