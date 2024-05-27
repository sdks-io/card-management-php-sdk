<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class CardSummaryRequest implements \JsonSerializable
{
    /**
     * @var SummaryRequest|null
     */
    private $filters;

    /**
     * Returns Filters.
     * Encapsulates the details of a Summary Request.
     *
     * Summary Request fields are same as the Search Request base class and no new fields are required.
     */
    public function getFilters(): ?SummaryRequest
    {
        return $this->filters;
    }

    /**
     * Sets Filters.
     * Encapsulates the details of a Summary Request.
     *
     * Summary Request fields are same as the Search Request base class and no new fields are required.
     *
     * @maps Filters
     */
    public function setFilters(?SummaryRequest $filters): void
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
