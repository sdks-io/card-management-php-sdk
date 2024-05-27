<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class SearchAccountLimitResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var SearchAccountLimitResponseData|null
     */
    private $data;

    /**
     * Returns Request Id.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Data.
     */
    public function getData(): ?SearchAccountLimitResponseData
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps Data
     */
    public function setData(?SearchAccountLimitResponseData $data): void
    {
        $this->data = $data;
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
        if (isset($this->requestId)) {
            $json['RequestId'] = $this->requestId;
        }
        if (isset($this->status)) {
            $json['Status']    = $this->status;
        }
        if (isset($this->data)) {
            $json['Data']      = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
