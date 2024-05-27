<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ProductAllOf0;

/**
 * Builder for model ProductAllOf0
 *
 * @see ProductAllOf0
 */
class ProductAllOf0Builder
{
    /**
     * @var ProductAllOf0
     */
    private $instance;

    private function __construct(ProductAllOf0 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product all of 0 Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductAllOf0());
    }

    /**
     * Sets global product code field.
     */
    public function globalProductCode(?string $value): self
    {
        $this->instance->setGlobalProductCode($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Initializes a new product all of 0 object.
     */
    public function build(): ProductAllOf0
    {
        return CoreHelper::clone($this->instance);
    }
}
