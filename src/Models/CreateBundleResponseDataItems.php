<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class CreateBundleResponseDataItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bundleId;

    /**
     * @var array
     */
    private $cards = [];

    /**
     * @var array
     */
    private $dayTimeRestrictionProfileId = [];

    /**
     * @var array
     */
    private $locationRestrictionProfileId = [];

    /**
     * @var array
     */
    private $productRestrictionProfileId = [];

    /**
     * Returns Bundle Id.
     * Identifier of the newly created bundle in Gateway.
     */
    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    /**
     * Sets Bundle Id.
     * Identifier of the newly created bundle in Gateway.
     *
     * @maps BundleId
     */
    public function setBundleId(?string $bundleId): void
    {
        $this->bundleId = $bundleId;
    }

    /**
     * Returns Cards.
     * List of product restriction requests validated and submitted successfully for each card.
     *
     * @return CreateBundleResponseDataItemsCardsItems[]|null
     */
    public function getCards(): ?array
    {
        if (count($this->cards) == 0) {
            return null;
        }
        return $this->cards['value'];
    }

    /**
     * Sets Cards.
     * List of product restriction requests validated and submitted successfully for each card.
     *
     * @maps Cards
     *
     * @param CreateBundleResponseDataItemsCardsItems[]|null $cards
     */
    public function setCards(?array $cards): void
    {
        $this->cards['value'] = $cards;
    }

    /**
     * Unsets Cards.
     * List of product restriction requests validated and submitted successfully for each card.
     */
    public function unsetCards(): void
    {
        $this->cards = [];
    }

    /**
     * Returns Day Time Restriction Profile Id.
     * Identifier of the day/time restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function getDayTimeRestrictionProfileId(): ?string
    {
        if (count($this->dayTimeRestrictionProfileId) == 0) {
            return null;
        }
        return $this->dayTimeRestrictionProfileId['value'];
    }

    /**
     * Sets Day Time Restriction Profile Id.
     * Identifier of the day/time restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     *
     * @maps DayTimeRestrictionProfileId
     */
    public function setDayTimeRestrictionProfileId(?string $dayTimeRestrictionProfileId): void
    {
        $this->dayTimeRestrictionProfileId['value'] = $dayTimeRestrictionProfileId;
    }

    /**
     * Unsets Day Time Restriction Profile Id.
     * Identifier of the day/time restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function unsetDayTimeRestrictionProfileId(): void
    {
        $this->dayTimeRestrictionProfileId = [];
    }

    /**
     * Returns Location Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function getLocationRestrictionProfileId(): ?string
    {
        if (count($this->locationRestrictionProfileId) == 0) {
            return null;
        }
        return $this->locationRestrictionProfileId['value'];
    }

    /**
     * Sets Location Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     *
     * @maps LocationRestrictionProfileId
     */
    public function setLocationRestrictionProfileId(?string $locationRestrictionProfileId): void
    {
        $this->locationRestrictionProfileId['value'] = $locationRestrictionProfileId;
    }

    /**
     * Unsets Location Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function unsetLocationRestrictionProfileId(): void
    {
        $this->locationRestrictionProfileId = [];
    }

    /**
     * Returns Product Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function getProductRestrictionProfileId(): ?string
    {
        if (count($this->productRestrictionProfileId) == 0) {
            return null;
        }
        return $this->productRestrictionProfileId['value'];
    }

    /**
     * Sets Product Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     *
     * @maps ProductRestrictionProfileId
     */
    public function setProductRestrictionProfileId(?string $productRestrictionProfileId): void
    {
        $this->productRestrictionProfileId['value'] = $productRestrictionProfileId;
    }

    /**
     * Unsets Product Restriction Profile Id.
     * Identifier of the location restriction profile created for the bundle in Gateway.
     *
     * This will be null if respective action is passed as “Default”.
     */
    public function unsetProductRestrictionProfileId(): void
    {
        $this->productRestrictionProfileId = [];
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
        if (isset($this->bundleId)) {
            $json['BundleId']                     = $this->bundleId;
        }
        if (!empty($this->cards)) {
            $json['Cards']                        = $this->cards['value'];
        }
        if (!empty($this->dayTimeRestrictionProfileId)) {
            $json['DayTimeRestrictionProfileId']  = $this->dayTimeRestrictionProfileId['value'];
        }
        if (!empty($this->locationRestrictionProfileId)) {
            $json['LocationRestrictionProfileId'] = $this->locationRestrictionProfileId['value'];
        }
        if (!empty($this->productRestrictionProfileId)) {
            $json['ProductRestrictionProfileId']  = $this->productRestrictionProfileId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
