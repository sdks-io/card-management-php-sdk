<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class LocationRestrictionsShellSiteRestrictionsItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string[]|null
     */
    private $sites;

    /**
     * @var string[]|null
     */
    private $siteGroups;

    /**
     * @var bool|null
     */
    private $exclusive;

    /**
     * Returns Country.
     * ISO 3166-1 Numeric-3 code of the country where the site restriction is applied.
     *
     * Example: 826 for United Kingdom.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * ISO 3166-1 Numeric-3 code of the country where the site restriction is applied.
     *
     * Example: 826 for United Kingdom.
     *
     * @maps Country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Sites.
     * A list of Site IDs in this country, in the format “AA1111” where “AA” is a 2-character country code
     * and “1111” is a 4-digit site number in that country, which needs to be either restricted or allowed.
     *
     * A list of values must be passed for either Sites or SiteGroups or both.
     *
     * Max 10 sites are allowed for the Shell site Restriction.
     *
     * For example, “GB1234”.
     *
     * @return string[]|null
     */
    public function getSites(): ?array
    {
        return $this->sites;
    }

    /**
     * Sets Sites.
     * A list of Site IDs in this country, in the format “AA1111” where “AA” is a 2-character country code
     * and “1111” is a 4-digit site number in that country, which needs to be either restricted or allowed.
     *
     * A list of values must be passed for either Sites or SiteGroups or both.
     *
     * Max 10 sites are allowed for the Shell site Restriction.
     *
     * For example, “GB1234”.
     *
     * @maps Sites
     *
     * @param string[]|null $sites
     */
    public function setSites(?array $sites): void
    {
        $this->sites = $sites;
    }

    /**
     * Returns Site Groups.
     * A list of site group ids in this country which needs to be either restricted or allowed.
     *
     * A list of values must be passed for either Sites or SiteGroups or both.
     *
     * Max 10 sites groups are allowed for the Shell site Restriction.
     *
     * @return string[]|null
     */
    public function getSiteGroups(): ?array
    {
        return $this->siteGroups;
    }

    /**
     * Sets Site Groups.
     * A list of site group ids in this country which needs to be either restricted or allowed.
     *
     * A list of values must be passed for either Sites or SiteGroups or both.
     *
     * Max 10 sites groups are allowed for the Shell site Restriction.
     *
     * @maps SiteGroups
     *
     * @param string[]|null $siteGroups
     */
    public function setSiteGroups(?array $siteGroups): void
    {
        $this->siteGroups = $siteGroups;
    }

    /**
     * Returns Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites & site
     * groups where the transaction will be allowed.
     *
     * True - (exclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites and site groups where
     * the transactions will be declined.
     */
    public function getExclusive(): ?bool
    {
        return $this->exclusive;
    }

    /**
     * Sets Exclusive.
     * Flag indicates whether the profile is inclusive or exclusive.
     *
     * Mandatory
     *
     * Example: False - (inclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites & site
     * groups where the transaction will be allowed.
     *
     * True - (exclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites and site groups where
     * the transactions will be declined.
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
            $json['Country']    = $this->country;
        }
        if (isset($this->sites)) {
            $json['Sites']      = $this->sites;
        }
        if (isset($this->siteGroups)) {
            $json['SiteGroups'] = $this->siteGroups;
        }
        if (isset($this->exclusive)) {
            $json['Exclusive']  = $this->exclusive;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
