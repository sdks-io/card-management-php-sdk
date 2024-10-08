<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ProductGroup;

/**
 * Builder for model ProductGroup
 *
 * @see ProductGroup
 */
class ProductGroupBuilder
{
    /**
     * @var ProductGroup
     */
    private $instance;

    private function __construct(ProductGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product group Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductGroup());
    }

    /**
     * Sets reference id field.
     */
    public function referenceId(?int $value): self
    {
        $this->instance->setReferenceId($value);
        return $this;
    }

    /**
     * Sets product group id field.
     */
    public function productGroupId(?string $value): self
    {
        $this->instance->setProductGroupId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets is default field.
     */
    public function isDefault(?bool $value): self
    {
        $this->instance->setIsDefault($value);
        return $this;
    }

    /**
     * Sets is fuel type field.
     */
    public function isFuelType(?bool $value): self
    {
        $this->instance->setIsFuelType($value);
        return $this;
    }

    /**
     * Sets products field.
     */
    public function products(?array $value): self
    {
        $this->instance->setProducts($value);
        return $this;
    }

    /**
     * Initializes a new product group object.
     */
    public function build(): ProductGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
