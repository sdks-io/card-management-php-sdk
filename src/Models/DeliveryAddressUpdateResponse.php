<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class DeliveryAddressUpdateResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var int|null
     */
    private $serviceReference;

    /**
     * @var DeliveryAddressUpdateReferences2|null
     */
    private $deliveryAddressUpdateReferences;

    /**
     * @var ErrorStatus|null
     */
    private $error;

    /**
     * Returns Request Id.
     * Request ID to which was passed on the API request.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * Request ID to which was passed on the API request.
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Service Reference.
     * Service reference number for tracking.
     */
    public function getServiceReference(): ?int
    {
        return $this->serviceReference;
    }

    /**
     * Sets Service Reference.
     * Service reference number for tracking.
     *
     * @maps ServiceReference
     */
    public function setServiceReference(?int $serviceReference): void
    {
        $this->serviceReference = $serviceReference;
    }

    /**
     * Returns Delivery Address Update References.
     */
    public function getDeliveryAddressUpdateReferences(): ?DeliveryAddressUpdateReferences2
    {
        return $this->deliveryAddressUpdateReferences;
    }

    /**
     * Sets Delivery Address Update References.
     *
     * @maps DeliveryAddressUpdateReferences
     */
    public function setDeliveryAddressUpdateReferences(
        ?DeliveryAddressUpdateReferences2 $deliveryAddressUpdateReferences
    ): void {
        $this->deliveryAddressUpdateReferences = $deliveryAddressUpdateReferences;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?ErrorStatus
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps Error
     */
    public function setError(?ErrorStatus $error): void
    {
        $this->error = $error;
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
            $json['RequestId']                       = $this->requestId;
        }
        if (isset($this->serviceReference)) {
            $json['ServiceReference']                = $this->serviceReference;
        }
        if (isset($this->deliveryAddressUpdateReferences)) {
            $json['DeliveryAddressUpdateReferences'] = $this->deliveryAddressUpdateReferences;
        }
        if (isset($this->error)) {
            $json['Error']                           = $this->error;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
