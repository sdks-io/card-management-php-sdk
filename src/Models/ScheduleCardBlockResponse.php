<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class ScheduleCardBlockResponse implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $mainReference;

    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ScheduleCardBlockResponseDataItems[]|null
     */
    private $data;

    /**
     * Returns Main Reference.
     * Reference number for tracking the execution of the request.
     * Note: Reference will be empty for status 9006 and 9012 i.e., request for all the cards failed.
     */
    public function getMainReference(): ?int
    {
        return $this->mainReference;
    }

    /**
     * Sets Main Reference.
     * Reference number for tracking the execution of the request.
     * Note: Reference will be empty for status 9006 and 9012 i.e., request for all the cards failed.
     *
     * @maps MainReference
     */
    public function setMainReference(?int $mainReference): void
    {
        $this->mainReference = $mainReference;
    }

    /**
     * Returns Request Id.
     * API Request ID
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * API Request ID
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Overall Status of the API call
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Overall Status of the API call
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Data.
     * List of SubmittedScheduleCardBlockCard entity.
     *
     * @return ScheduleCardBlockResponseDataItems[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * List of SubmittedScheduleCardBlockCard entity.
     *
     * @maps Data
     *
     * @param ScheduleCardBlockResponseDataItems[]|null $data
     */
    public function setData(?array $data): void
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
        if (isset($this->mainReference)) {
            $json['MainReference'] = $this->mainReference;
        }
        if (isset($this->requestId)) {
            $json['RequestId']     = $this->requestId;
        }
        if (isset($this->status)) {
            $json['Status']        = $this->status;
        }
        if (isset($this->data)) {
            $json['Data']          = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
