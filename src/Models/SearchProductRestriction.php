<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class SearchProductRestriction implements \JsonSerializable
{
    /**
     * @var RestrictionProduct[]|null
     */
    private $products;

    /**
     * @var ProductGroup[]|null
     */
    private $productGroups;

    /**
     * Returns Products.
     *
     * @return RestrictionProduct[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * Sets Products.
     *
     * @maps Products
     *
     * @param RestrictionProduct[]|null $products
     */
    public function setProducts(?array $products): void
    {
        $this->products = $products;
    }

    /**
     * Returns Product Groups.
     *
     * @return ProductGroup[]|null
     */
    public function getProductGroups(): ?array
    {
        return $this->productGroups;
    }

    /**
     * Sets Product Groups.
     *
     * @maps ProductGroups
     *
     * @param ProductGroup[]|null $productGroups
     */
    public function setProductGroups(?array $productGroups): void
    {
        $this->productGroups = $productGroups;
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
        if (isset($this->products)) {
            $json['Products']      = $this->products;
        }
        if (isset($this->productGroups)) {
            $json['ProductGroups'] = $this->productGroups;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
