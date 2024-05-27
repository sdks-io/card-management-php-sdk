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
 * An entity that encapsulate the country restrictions.
 *
 * Optional.
 */
class LocationRestrictionsCountryRestrictions implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $exclusive;

    /**
     * @var string[]
     */
    private $countries;

    /**
     * @param bool $exclusive
     * @param string[] $countries
     */
    public function __construct(bool $exclusive, array $countries)
    {
        $this->exclusive = $exclusive;
        $this->countries = $countries;
    }

    /**
     * Returns Exclusive.
     * Boolean Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Countries” property lists the countries where the
     * transactions will be allowed.
     *
     * True - (exclusive), i.e. the “Countries” property lists the countries where the transactions will be
     * declined.
     */
    public function getExclusive(): bool
    {
        return $this->exclusive;
    }

    /**
     * Sets Exclusive.
     * Boolean Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Countries” property lists the countries where the
     * transactions will be allowed.
     *
     * True - (exclusive), i.e. the “Countries” property lists the countries where the transactions will be
     * declined.
     *
     * @required
     * @maps Exclusive
     */
    public function setExclusive(bool $exclusive): void
    {
        $this->exclusive = $exclusive;
    }

    /**
     * Returns Countries.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     *
     * Example: 826 for United Kingdom.
     *
     * Mandatory
     *
     * @return string[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * Sets Countries.
     * ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.
     *
     * Example: 826 for United Kingdom.
     *
     * Mandatory
     *
     * @required
     * @maps Countries
     *
     * @param string[] $countries
     */
    public function setCountries(array $countries): void
    {
        $this->countries = $countries;
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
        $json['Exclusive'] = $this->exclusive;
        $json['Countries'] = $this->countries;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
