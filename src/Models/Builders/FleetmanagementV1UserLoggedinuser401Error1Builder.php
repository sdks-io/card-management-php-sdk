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
use ShellCardManagementAPIsLib\Models\FleetmanagementV1UserLoggedinuser401Error1;

/**
 * Builder for model FleetmanagementV1UserLoggedinuser401Error1
 *
 * @see FleetmanagementV1UserLoggedinuser401Error1
 */
class FleetmanagementV1UserLoggedinuser401Error1Builder
{
    /**
     * @var FleetmanagementV1UserLoggedinuser401Error1
     */
    private $instance;

    private function __construct(FleetmanagementV1UserLoggedinuser401Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fleetmanagement v1 user loggedinuser 401 error 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new FleetmanagementV1UserLoggedinuser401Error1());
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
     * Initializes a new fleetmanagement v1 user loggedinuser 401 error 1 object.
     */
    public function build(): FleetmanagementV1UserLoggedinuser401Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
