<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Exceptions;

class FleetmanagementV2RestrictionSearchcard500ErrorException extends ApiException
{
    /**
     * @var \ShellCardManagementAPIsLib\Models\Fault|null
     */
    private $fault;

    /**
     * Returns Fault.
     */
    public function getFault(): ?\ShellCardManagementAPIsLib\Models\Fault
    {
        return $this->fault;
    }

    /**
     * Sets Fault.
     *
     * @maps fault
     */
    public function setFault(?\ShellCardManagementAPIsLib\Models\Fault $fault): void
    {
        $this->fault = $fault;
    }
}
