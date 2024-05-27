<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\SummaryOfBundleResponseDataItemsCardBundlesItems;

/**
 * Builder for model SummaryOfBundleResponseDataItemsCardBundlesItems
 *
 * @see SummaryOfBundleResponseDataItemsCardBundlesItems
 */
class SummaryOfBundleResponseDataItemsCardBundlesItemsBuilder
{
    /**
     * @var SummaryOfBundleResponseDataItemsCardBundlesItems
     */
    private $instance;

    private function __construct(SummaryOfBundleResponseDataItemsCardBundlesItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new summary of bundle response data items card bundles items Builder object.
     */
    public static function init(): self
    {
        return new self(new SummaryOfBundleResponseDataItemsCardBundlesItems());
    }

    /**
     * Sets bundle id field.
     */
    public function bundleId(?string $value): self
    {
        $this->instance->setBundleId($value);
        return $this;
    }

    /**
     * Unsets bundle id field.
     */
    public function unsetBundleId(): self
    {
        $this->instance->unsetBundleId();
        return $this;
    }

    /**
     * Sets external bundle id field.
     */
    public function externalBundleId(?string $value): self
    {
        $this->instance->setExternalBundleId($value);
        return $this;
    }

    /**
     * Unsets external bundle id field.
     */
    public function unsetExternalBundleId(): self
    {
        $this->instance->unsetExternalBundleId();
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
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets total cards field.
     */
    public function totalCards(?int $value): self
    {
        $this->instance->setTotalCards($value);
        return $this;
    }

    /**
     * Unsets total cards field.
     */
    public function unsetTotalCards(): self
    {
        $this->instance->unsetTotalCards();
        return $this;
    }

    /**
     * Initializes a new summary of bundle response data items card bundles items object.
     */
    public function build(): SummaryOfBundleResponseDataItemsCardBundlesItems
    {
        return CoreHelper::clone($this->instance);
    }
}
