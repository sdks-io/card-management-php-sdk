<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class NetworkRestriction implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string[]|null
     */
    private $networks;

    /**
     * @var bool|null
     */
    private $exclusive;

    /**
     * Returns Country.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     * Example: 826 for United Kingdom.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     * Example: 826 for United Kingdom.
     *
     * @maps Country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Networks.
     * A list of Gateway network codes, typically 7 or 10 digits.
     * Example: 0002003250
     *
     * @return string[]|null
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * Sets Networks.
     * A list of Gateway network codes, typically 7 or 10 digits.
     * Example: 0002003250
     *
     * @maps Networks
     *
     * @param string[]|null $networks
     */
    public function setNetworks(?array $networks): void
    {
        $this->networks = $networks;
    }

    /**
     * Returns Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     * Example: False - (inclusive), i.e. the “Networks” property lists the networks in which the
     * transaction will be allowed.
     * True - (exclusive), i.e. the “Networks” property lists the networks in which the transactions will
     * be declined.
     */
    public function getExclusive(): ?bool
    {
        return $this->exclusive;
    }

    /**
     * Sets Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     * Example: False - (inclusive), i.e. the “Networks” property lists the networks in which the
     * transaction will be allowed.
     * True - (exclusive), i.e. the “Networks” property lists the networks in which the transactions will
     * be declined.
     *
     * @maps Exclusive
     */
    public function setExclusive(?bool $exclusive): void
    {
        $this->exclusive = $exclusive;
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
        if (isset($this->country)) {
            $json['Country']   = $this->country;
        }
        if (isset($this->networks)) {
            $json['Networks']  = $this->networks;
        }
        if (isset($this->exclusive)) {
            $json['Exclusive'] = $this->exclusive;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
