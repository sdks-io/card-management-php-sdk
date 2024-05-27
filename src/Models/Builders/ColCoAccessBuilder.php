<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ColCoAccess;

/**
 * Builder for model ColCoAccess
 *
 * @see ColCoAccess
 */
class ColCoAccessBuilder
{
    /**
     * @var ColCoAccess
     */
    private $instance;

    private function __construct(ColCoAccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new col co access Builder object.
     */
    public static function init(): self
    {
        return new self(new ColCoAccess());
    }

    /**
     * Sets col co id field.
     */
    public function colCoId(?string $value): self
    {
        $this->instance->setColCoId($value);
        return $this;
    }

    /**
     * Unsets col co id field.
     */
    public function unsetColCoId(): self
    {
        $this->instance->unsetColCoId();
        return $this;
    }

    /**
     * Sets col co code field.
     */
    public function colCoCode(?string $value): self
    {
        $this->instance->setColCoCode($value);
        return $this;
    }

    /**
     * Unsets col co code field.
     */
    public function unsetColCoCode(): self
    {
        $this->instance->unsetColCoCode();
        return $this;
    }

    /**
     * Sets col co country name field.
     */
    public function colCoCountryName(?string $value): self
    {
        $this->instance->setColCoCountryName($value);
        return $this;
    }

    /**
     * Unsets col co country name field.
     */
    public function unsetColCoCountryName(): self
    {
        $this->instance->unsetColCoCountryName();
        return $this;
    }

    /**
     * Sets issuing country number field.
     */
    public function issuingCountryNumber(?string $value): self
    {
        $this->instance->setIssuingCountryNumber($value);
        return $this;
    }

    /**
     * Unsets issuing country number field.
     */
    public function unsetIssuingCountryNumber(): self
    {
        $this->instance->unsetIssuingCountryNumber();
        return $this;
    }

    /**
     * Initializes a new col co access object.
     */
    public function build(): ColCoAccess
    {
        return CoreHelper::clone($this->instance);
    }
}
