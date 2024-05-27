<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\CreateCardGroupRequestCardsItems;

/**
 * Builder for model CreateCardGroupRequestCardsItems
 *
 * @see CreateCardGroupRequestCardsItems
 */
class CreateCardGroupRequestCardsItemsBuilder
{
    /**
     * @var CreateCardGroupRequestCardsItems
     */
    private $instance;

    private function __construct(CreateCardGroupRequestCardsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create card group request cards items Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCardGroupRequestCardsItems());
    }

    /**
     * Sets account id field.
     */
    public function accountId(?int $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
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
     * Initializes a new create card group request cards items object.
     */
    public function build(): CreateCardGroupRequestCardsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
