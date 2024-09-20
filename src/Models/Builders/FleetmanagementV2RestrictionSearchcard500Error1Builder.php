<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\Fault;
use ShellCardManagementAPIsLib\Models\FleetmanagementV2RestrictionSearchcard500Error1;

/**
 * Builder for model FleetmanagementV2RestrictionSearchcard500Error1
 *
 * @see FleetmanagementV2RestrictionSearchcard500Error1
 */
class FleetmanagementV2RestrictionSearchcard500Error1Builder
{
    /**
     * @var FleetmanagementV2RestrictionSearchcard500Error1
     */
    private $instance;

    private function __construct(FleetmanagementV2RestrictionSearchcard500Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fleetmanagement v2 restriction searchcard 500 error 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new FleetmanagementV2RestrictionSearchcard500Error1());
    }

    /**
     * Sets fault field.
     */
    public function fault(?Fault $value): self
    {
        $this->instance->setFault($value);
        return $this;
    }

    /**
     * Initializes a new fleetmanagement v2 restriction searchcard 500 error 1 object.
     */
    public function build(): FleetmanagementV2RestrictionSearchcard500Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
