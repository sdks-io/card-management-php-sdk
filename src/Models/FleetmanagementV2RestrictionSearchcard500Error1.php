<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class FleetmanagementV2RestrictionSearchcard500Error1 implements \JsonSerializable
{
    /**
     * @var Fault|null
     */
    private $fault;

    /**
     * Returns Fault.
     */
    public function getFault(): ?Fault
    {
        return $this->fault;
    }

    /**
     * Sets Fault.
     *
     * @maps fault
     */
    public function setFault(?Fault $fault): void
    {
        $this->fault = $fault;
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
        if (isset($this->fault)) {
            $json['fault'] = $this->fault;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
