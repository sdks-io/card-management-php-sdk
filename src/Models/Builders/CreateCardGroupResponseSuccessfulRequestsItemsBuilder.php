<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CreateCardGroupResponseSuccessfulRequestsItems;

/**
 * Builder for model CreateCardGroupResponseSuccessfulRequestsItems
 *
 * @see CreateCardGroupResponseSuccessfulRequestsItems
 */
class CreateCardGroupResponseSuccessfulRequestsItemsBuilder
{
    /**
     * @var CreateCardGroupResponseSuccessfulRequestsItems
     */
    private $instance;

    private function __construct(CreateCardGroupResponseSuccessfulRequestsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create card group response successful requests items Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCardGroupResponseSuccessfulRequestsItems());
    }

    /**
     * Sets card id field.
     */
    public function cardId(?int $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Sets pan field.
     */
    public function pAN(?string $value): self
    {
        $this->instance->setPAN($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?int $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Initializes a new create card group response successful requests items object.
     */
    public function build(): CreateCardGroupResponseSuccessfulRequestsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
