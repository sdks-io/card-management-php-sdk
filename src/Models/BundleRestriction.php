<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class BundleRestriction implements \JsonSerializable
{
    /**
     * @var array
     */
    private $dayTimeRestrictionAction = [];

    /**
     * @var array
     */
    private $locationRestrictionAction = [];

    /**
     * @var array
     */
    private $usageRestrictions = [];

    /**
     * @var DayTimeRestriction|null
     */
    private $dayTimeRestrictions;

    /**
     * @var array
     */
    private $productRestrictions = [];

    /**
     * @var LocationRestriction|null
     */
    private $locationRestrictions;

    /**
     * Returns Day Time Restriction Action.
     * The value indicates what actions to be performed with respect to day time restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No Day/Time restriction will be applied on the bundle in Gateway.
     */
    public function getDayTimeRestrictionAction(): ?string
    {
        if (count($this->dayTimeRestrictionAction) == 0) {
            return null;
        }
        return $this->dayTimeRestrictionAction['value'];
    }

    /**
     * Sets Day Time Restriction Action.
     * The value indicates what actions to be performed with respect to day time restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No Day/Time restriction will be applied on the bundle in Gateway.
     *
     * @maps DayTimeRestrictionAction
     */
    public function setDayTimeRestrictionAction(?string $dayTimeRestrictionAction): void
    {
        $this->dayTimeRestrictionAction['value'] = $dayTimeRestrictionAction;
    }

    /**
     * Unsets Day Time Restriction Action.
     * The value indicates what actions to be performed with respect to day time restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No Day/Time restriction will be applied on the bundle in Gateway.
     */
    public function unsetDayTimeRestrictionAction(): void
    {
        $this->dayTimeRestrictionAction = [];
    }

    /**
     * Returns Location Restriction Action.
     * The value indicates what actions to be performed with respect to location restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No location restriction will be applied on the bundle in Gateway.
     */
    public function getLocationRestrictionAction(): ?string
    {
        if (count($this->locationRestrictionAction) == 0) {
            return null;
        }
        return $this->locationRestrictionAction['value'];
    }

    /**
     * Sets Location Restriction Action.
     * The value indicates what actions to be performed with respect to location restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No location restriction will be applied on the bundle in Gateway.
     *
     * @maps LocationRestrictionAction
     */
    public function setLocationRestrictionAction(?string $locationRestrictionAction): void
    {
        $this->locationRestrictionAction['value'] = $locationRestrictionAction;
    }

    /**
     * Unsets Location Restriction Action.
     * The value indicates what actions to be performed with respect to location restriction.
     *
     * Mandatory
     *
     * Allowed values –
     *
     * • Add: Apply the given restriction on the bundle.
     *
     * • Default: No location restriction will be applied on the bundle in Gateway.
     */
    public function unsetLocationRestrictionAction(): void
    {
        $this->locationRestrictionAction = [];
    }

    /**
     * Returns Usage Restrictions.
     */
    public function getUsageRestrictions(): ?UsageRestrictionsCard
    {
        if (count($this->usageRestrictions) == 0) {
            return null;
        }
        return $this->usageRestrictions['value'];
    }

    /**
     * Sets Usage Restrictions.
     *
     * @maps UsageRestrictions
     */
    public function setUsageRestrictions(?UsageRestrictionsCard $usageRestrictions): void
    {
        $this->usageRestrictions['value'] = $usageRestrictions;
    }

    /**
     * Unsets Usage Restrictions.
     */
    public function unsetUsageRestrictions(): void
    {
        $this->usageRestrictions = [];
    }

    /**
     * Returns Day Time Restrictions.
     * Details of the day/time restrictions such as weekdays and time range in which transactions should be
     * allowed on the card.
     */
    public function getDayTimeRestrictions(): ?DayTimeRestriction
    {
        return $this->dayTimeRestrictions;
    }

    /**
     * Sets Day Time Restrictions.
     * Details of the day/time restrictions such as weekdays and time range in which transactions should be
     * allowed on the card.
     *
     * @maps DayTimeRestrictions
     */
    public function setDayTimeRestrictions(?DayTimeRestriction $dayTimeRestrictions): void
    {
        $this->dayTimeRestrictions = $dayTimeRestrictions;
    }

    /**
     * Returns Product Restrictions.
     */
    public function getProductRestrictions(): ?ProductRestrictionCard
    {
        if (count($this->productRestrictions) == 0) {
            return null;
        }
        return $this->productRestrictions['value'];
    }

    /**
     * Sets Product Restrictions.
     *
     * @maps ProductRestrictions
     */
    public function setProductRestrictions(?ProductRestrictionCard $productRestrictions): void
    {
        $this->productRestrictions['value'] = $productRestrictions;
    }

    /**
     * Unsets Product Restrictions.
     */
    public function unsetProductRestrictions(): void
    {
        $this->productRestrictions = [];
    }

    /**
     * Returns Location Restrictions.
     */
    public function getLocationRestrictions(): ?LocationRestriction
    {
        return $this->locationRestrictions;
    }

    /**
     * Sets Location Restrictions.
     *
     * @maps LocationRestrictions
     */
    public function setLocationRestrictions(?LocationRestriction $locationRestrictions): void
    {
        $this->locationRestrictions = $locationRestrictions;
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
        if (!empty($this->dayTimeRestrictionAction)) {
            $json['DayTimeRestrictionAction']  = $this->dayTimeRestrictionAction['value'];
        }
        if (!empty($this->locationRestrictionAction)) {
            $json['LocationRestrictionAction'] = $this->locationRestrictionAction['value'];
        }
        if (!empty($this->usageRestrictions)) {
            $json['UsageRestrictions']         = $this->usageRestrictions['value'];
        }
        if (isset($this->dayTimeRestrictions)) {
            $json['DayTimeRestrictions']       = $this->dayTimeRestrictions;
        }
        if (!empty($this->productRestrictions)) {
            $json['ProductRestrictions']       = $this->productRestrictions['value'];
        }
        if (isset($this->locationRestrictions)) {
            $json['LocationRestrictions']      = $this->locationRestrictions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
