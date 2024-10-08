<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class SearchCardRestriction implements \JsonSerializable
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
     * Returns Card Id.
     * Unique Card Id
     *
     * Optional if PAN is given, else mandatory.
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
     * Unique Card Id
     *
     * Optional if PAN is given, else mandatory.
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId['value'] = $cardId;
    }

    /**
     * Unsets Card Id.
     * Unique Card Id
     *
     * Optional if PAN is given, else mandatory.
     */
    public function unsetCardId(): void
    {
        $this->cardId = [];
    }

    /**
     * Returns P AN.
     * Card PAN.
     *
     * Optional if CardId is given, else mandatory.
     *
     * Note: PAN is ignored if CardId is given.
     *
     * Example: 7002051006629890645
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
     * Card PAN.
     *
     * Optional if CardId is given, else mandatory.
     *
     * Note: PAN is ignored if CardId is given.
     *
     * Example: 7002051006629890645
     *
     * @maps PAN
     */
    public function setPAN(?string $pAN): void
    {
        $this->pAN['value'] = $pAN;
    }

    /**
     * Unsets P AN.
     * Card PAN.
     *
     * Optional if CardId is given, else mandatory.
     *
     * Note: PAN is ignored if CardId is given.
     *
     * Example: 7002051006629890645
     */
    public function unsetPAN(): void
    {
        $this->pAN = [];
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
            $json['CardId'] = $this->cardId['value'];
        }
        if (!empty($this->pAN)) {
            $json['PAN']    = $this->pAN['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
