<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class ErrorDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $detail;

    /**
     * @var array|null
     */
    private $additionalInfo;

    /**
     * Returns Code.
     * Error code representing the error encountered
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Error code representing the error encountered
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Title.
     * Error type description
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Error type description
     *
     * @maps Title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Detail.
     * Detailed inforamtion about the error
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     * Detailed inforamtion about the error
     *
     * @maps Detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Returns Additional Info.
     * Applicable when more details related to error to be returned
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->additionalInfo;
    }

    /**
     * Sets Additional Info.
     * Applicable when more details related to error to be returned
     *
     * @maps AdditionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
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
        if (isset($this->code)) {
            $json['Code']           = $this->code;
        }
        if (isset($this->title)) {
            $json['Title']          = $this->title;
        }
        if (isset($this->detail)) {
            $json['Detail']         = $this->detail;
        }
        if (isset($this->additionalInfo)) {
            $json['AdditionalInfo'] = $this->additionalInfo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
