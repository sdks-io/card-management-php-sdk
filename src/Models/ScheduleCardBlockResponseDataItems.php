<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class ScheduleCardBlockResponseDataItems implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $cardId;

    /**
     * @var string|null
     */
    private $fromDate;

    /**
     * @var string|null
     */
    private $toDate;

    /**
     * @var int|null
     */
    private $referenceId;

    /**
     * Returns Card Id.
     * Unique Id of the card.
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Unique Id of the card.
     *
     * @maps CardId
     */
    public function setCardId(?int $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns From Date.
     * Effective start date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 12:30
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }

    /**
     * Sets From Date.
     * Effective start date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 12:30
     *
     * @maps FromDate
     */
    public function setFromDate(?string $fromDate): void
    {
        $this->fromDate = $fromDate;
    }

    /**
     * Returns To Date.
     * Effective end date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 14:30
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }

    /**
     * Sets To Date.
     * Effective end date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 14:30
     *
     * @maps ToDate
     */
    public function setToDate(?string $toDate): void
    {
        $this->toDate = $toDate;
    }

    /**
     * Returns Reference Id.
     * Effective end date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 14:30
     */
    public function getReferenceId(): ?int
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     * Effective end date & time of Block / Unblock as updated in the intermediate queue table.
     *
     *
     * Format: yyyyMMdd HH:mm
     * Eg: 20230512 14:30
     *
     * @maps ReferenceId
     */
    public function setReferenceId(?int $referenceId): void
    {
        $this->referenceId = $referenceId;
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
            $json['CardId']      = $this->cardId;
        }
        if (isset($this->fromDate)) {
            $json['FromDate']    = $this->fromDate;
        }
        if (isset($this->toDate)) {
            $json['ToDate']      = $this->toDate;
        }
        if (isset($this->referenceId)) {
            $json['ReferenceId'] = $this->referenceId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
