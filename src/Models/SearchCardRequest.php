<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class SearchCardRequest implements \JsonSerializable
{
    /**
     * @var Filters|null
     */
    private $filters;

    /**
     * @var string|null
     */
    private $pageSize;

    /**
     * @var string|null
     */
    private $page;

    /**
     * Returns Filters.
     */
    public function getFilters(): ?Filters
    {
        return $this->filters;
    }

    /**
     * Sets Filters.
     *
     * @maps Filters
     */
    public function setFilters(?Filters $filters): void
    {
        $this->filters = $filters;
    }

    /**
     * Returns Page Size.
     * Page Size – Number of records to show on a page
     * Optional
     * Default value 50
     */
    public function getPageSize(): ?string
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Page Size – Number of records to show on a page
     * Optional
     * Default value 50
     *
     * @maps PageSize
     */
    public function setPageSize(?string $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * Returns Page.
     * Page Number
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * Sets Page.
     * Page Number
     *
     * @maps Page
     */
    public function setPage(?string $page): void
    {
        $this->page = $page;
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
            $json['Filters']  = $this->filters;
        }
        if (isset($this->pageSize)) {
            $json['PageSize'] = $this->pageSize;
        }
        if (isset($this->page)) {
            $json['Page']     = $this->page;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
