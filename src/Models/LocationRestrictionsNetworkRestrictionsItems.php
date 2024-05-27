<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class LocationRestrictionsNetworkRestrictionsItems implements \JsonSerializable
{
    /**
     * @var string
     */
    private $country;

    /**
     * @var bool
     */
    private $exclusive;

    /**
     * @var string[]|null
     */
    private $networks;

    /**
     * @param string $country
     * @param bool $exclusive
     */
    public function __construct(string $country, bool $exclusive)
    {
        $this->country = $country;
        $this->exclusive = $exclusive;
    }

    /**
     * Returns Country.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     *
     * Example: 826 for United Kingdom.
     *
     * Mandatory
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     *
     * Example: 826 for United Kingdom.
     *
     * Mandatory
     *
     * @required
     * @maps Country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Networks” property lists the networks in which the
     * transaction will be allowed.
     *
     * True - (exclusive), i.e. the “Networks” property lists the networks in which the transactions will
     * be declined.
     */
    public function getExclusive(): bool
    {
        return $this->exclusive;
    }

    /**
     * Sets Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Networks” property lists the networks in which the
     * transaction will be allowed.
     *
     * True - (exclusive), i.e. the “Networks” property lists the networks in which the transactions will
     * be declined.
     *
     * @required
     * @maps Exclusive
     */
    public function setExclusive(bool $exclusive): void
    {
        $this->exclusive = $exclusive;
    }

    /**
     * Returns Networks.
     * A list of Gateway network codes, typically 7 or 10 digits.
     *
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
     *
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
        $json['Country']      = $this->country;
        $json['Exclusive']    = $this->exclusive;
        if (isset($this->networks)) {
            $json['Networks'] = $this->networks;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
