<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class SummaryOfBundleRequest implements \JsonSerializable
{
    /**
     * @var SummaryofBundle|null
     */
    private $filters;

    /**
     * Returns Filters.
     */
    public function getFilters(): ?SummaryofBundle
    {
        return $this->filters;
    }

    /**
     * Sets Filters.
     *
     * @maps Filters
     */
    public function setFilters(?SummaryofBundle $filters): void
    {
        $this->filters = $filters;
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
        if (isset($this->filters)) {
            $json['Filters'] = $this->filters;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
