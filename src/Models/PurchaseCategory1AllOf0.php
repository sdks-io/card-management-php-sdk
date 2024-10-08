<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class PurchaseCategory1AllOf0 implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool
     */
    private $isVisible;

    /**
     * @var ProductGroup[]
     */
    private $productGroups;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @param bool $isVisible
     * @param ProductGroup[] $productGroups
     */
    public function __construct(bool $isVisible, array $productGroups)
    {
        $this->isVisible = $isVisible;
        $this->productGroups = $productGroups;
    }

    /**
     * Returns Id.
     * Purchase category ID
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Purchase category ID
     *
     * @maps Id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Code.
     * Purchase category code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Purchase category code
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Name.
     * Name of Purchase category .
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of Purchase category .
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Is Visible.
     * PurchaseCategory can be used while submitting new order cards requests if true else will not be used
     * for ordering cards.
     */
    public function getIsVisible(): bool
    {
        return $this->isVisible;
    }

    /**
     * Sets Is Visible.
     * PurchaseCategory can be used while submitting new order cards requests if true else will not be used
     * for ordering cards.
     *
     * @required
     * @maps IsVisible
     */
    public function setIsVisible(bool $isVisible): void
    {
        $this->isVisible = $isVisible;
    }

    /**
     * Returns Product Groups.
     * List of product sets
     *
     * @return ProductGroup[]
     */
    public function getProductGroups(): array
    {
        return $this->productGroups;
    }

    /**
     * Sets Product Groups.
     * List of product sets
     *
     * @required
     * @maps ProductGroups
     *
     * @param ProductGroup[] $productGroups
     */
    public function setProductGroups(array $productGroups): void
    {
        $this->productGroups = $productGroups;
    }

    /**
     * Returns Title.
     * Purchase category Title by given language code.
     *
     * 1.    Basic
     *
     * 2.    Essentials
     *
     * 3.    Extra
     *
     * 4.    Premium
     *
     * 5.    Basic and LNG
     *
     * 6.    Essentials and LNG
     *
     * 7.    Extra and LNG
     *
     * 8.    Premium and LNG
     *
     * Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code
     * and default language code (en-GB).
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Purchase category Title by given language code.
     *
     * 1.    Basic
     *
     * 2.    Essentials
     *
     * 3.    Extra
     *
     * 4.    Premium
     *
     * 5.    Basic and LNG
     *
     * 6.    Essentials and LNG
     *
     * 7.    Extra and LNG
     *
     * 8.    Premium and LNG
     *
     * Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code
     * and default language code (en-GB).
     *
     * @maps Title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     * Purchase category description by given language code.
     *
     * Example:
     *
     * 0 - Diesel Products and TMF
     *
     * 1 - All Fuel Products and TMF
     *
     * 2 - All Fuels Products, Car related items and TMF
     *
     * 3 - No Restriction
     *
     * 0 - Diesel Products + LNG and TMF
     *
     * 1 - All Fuel Products + LNG and TMF
     *
     * 2 - All Fuels Products + LNG, Car related items and TMF
     *
     * 3 - No Restriction + LNG
     *
     * Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code
     * and default language code (en-GB).
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Purchase category description by given language code.
     *
     * Example:
     *
     * 0 - Diesel Products and TMF
     *
     * 1 - All Fuel Products and TMF
     *
     * 2 - All Fuels Products, Car related items and TMF
     *
     * 3 - No Restriction
     *
     * 0 - Diesel Products + LNG and TMF
     *
     * 1 - All Fuel Products + LNG and TMF
     *
     * 2 - All Fuels Products + LNG, Car related items and TMF
     *
     * 3 - No Restriction + LNG
     *
     * Note: Purchase Category name (GFN) is returned when Title does not exist for the given language Code
     * and default language code (en-GB).
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
        $json['Id']              = $this->id;
        $json['Code']            = $this->code;
        $json['Name']            = $this->name;
        $json['IsVisible']       = $this->isVisible;
        $json['ProductGroups']   = $this->productGroups;
        if (isset($this->title)) {
            $json['Title']       = $this->title;
        }
        if (isset($this->description)) {
            $json['Description'] = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
