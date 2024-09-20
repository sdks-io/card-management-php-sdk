<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class PINAdviceTypes implements \JsonSerializable
{
    /**
     * @var array
     */
    private $pINAdviceTypeID = [];

    /**
     * @var bool|null
     */
    private $isCardOrderOption;

    /**
     * @var bool|null
     */
    private $isPINReminderOption;

    /**
     * Returns P in Advice Type ID.
     * Id of of PIN advice type.
     * Possible Values:
     * 1.    Paper
     * 2.    Email
     * 3.    SMS
     * 4.    None
     */
    public function getPINAdviceTypeID(): ?int
    {
        if (count($this->pINAdviceTypeID) == 0) {
            return null;
        }
        return $this->pINAdviceTypeID['value'];
    }

    /**
     * Sets P in Advice Type ID.
     * Id of of PIN advice type.
     * Possible Values:
     * 1.    Paper
     * 2.    Email
     * 3.    SMS
     * 4.    None
     *
     * @maps PINAdviceTypeID
     */
    public function setPINAdviceTypeID(?int $pINAdviceTypeID): void
    {
        $this->pINAdviceTypeID['value'] = $pINAdviceTypeID;
    }

    /**
     * Unsets P in Advice Type ID.
     * Id of of PIN advice type.
     * Possible Values:
     * 1.    Paper
     * 2.    Email
     * 3.    SMS
     * 4.    None
     */
    public function unsetPINAdviceTypeID(): void
    {
        $this->pINAdviceTypeID = [];
    }

    /**
     * Returns Is Card Order Option.
     * Whether the PIN advice type is available for card ordering
     */
    public function getIsCardOrderOption(): ?bool
    {
        return $this->isCardOrderOption;
    }

    /**
     * Sets Is Card Order Option.
     * Whether the PIN advice type is available for card ordering
     *
     * @maps IsCardOrderOption
     */
    public function setIsCardOrderOption(?bool $isCardOrderOption): void
    {
        $this->isCardOrderOption = $isCardOrderOption;
    }

    /**
     * Returns Is PIN Reminder Option.
     * Whether the PIN advice type is available for PIN Reminder
     */
    public function getIsPINReminderOption(): ?bool
    {
        return $this->isPINReminderOption;
    }

    /**
     * Sets Is PIN Reminder Option.
     * Whether the PIN advice type is available for PIN Reminder
     *
     * @maps IsPINReminderOption
     */
    public function setIsPINReminderOption(?bool $isPINReminderOption): void
    {
        $this->isPINReminderOption = $isPINReminderOption;
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
        if (!empty($this->pINAdviceTypeID)) {
            $json['PINAdviceTypeID']     = $this->pINAdviceTypeID['value'];
        }
        if (isset($this->isCardOrderOption)) {
            $json['IsCardOrderOption']   = $this->isCardOrderOption;
        }
        if (isset($this->isPINReminderOption)) {
            $json['IsPINReminderOption'] = $this->isPINReminderOption;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
