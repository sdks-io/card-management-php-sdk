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
 * Error object
 */
class DefaultErrorFault implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $faultstring;

    /**
     * @var DefaultErrorFaultDetail|null
     */
    private $detail;

    /**
     * Returns Faultstring.
     * Error Description
     */
    public function getFaultstring(): ?string
    {
        return $this->faultstring;
    }

    /**
     * Sets Faultstring.
     * Error Description
     *
     * @maps faultstring
     */
    public function setFaultstring(?string $faultstring): void
    {
        $this->faultstring = $faultstring;
    }

    /**
     * Returns Detail.
     * Details about the error
     */
    public function getDetail(): ?DefaultErrorFaultDetail
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     * Details about the error
     *
     * @maps detail
     */
    public function setDetail(?DefaultErrorFaultDetail $detail): void
    {
        $this->detail = $detail;
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
        if (isset($this->faultstring)) {
            $json['faultstring'] = $this->faultstring;
        }
        if (isset($this->detail)) {
            $json['detail']      = $this->detail;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
