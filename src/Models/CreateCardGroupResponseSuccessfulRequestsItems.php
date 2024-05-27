<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class CreateCardGroupResponseSuccessfulRequestsItems implements \JsonSerializable
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
     * @var int|null
     */
    private $reference;

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
     * Returns Reference.
     * Reference number for tracking of update status request of the specific card,
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * Reference number for tracking of update status request of the specific card,
     *
     * @maps Reference
     */
    public function setReference(?int $reference): void
    {
        $this->reference = $reference;
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
            $json['CardId']    = $this->cardId;
        }
        if (isset($this->pAN)) {
            $json['PAN']       = $this->pAN;
        }
        if (isset($this->reference)) {
            $json['Reference'] = $this->reference;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
