<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\UpdateCardGroupResponseMoveCardReferencesItems;

/**
 * Builder for model UpdateCardGroupResponseMoveCardReferencesItems
 *
 * @see UpdateCardGroupResponseMoveCardReferencesItems
 */
class UpdateCardGroupResponseMoveCardReferencesItemsBuilder
{
    /**
     * @var UpdateCardGroupResponseMoveCardReferencesItems
     */
    private $instance;

    private function __construct(UpdateCardGroupResponseMoveCardReferencesItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update card group response move card references items Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateCardGroupResponseMoveCardReferencesItems());
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
     * Unsets card id field.
     */
    public function unsetCardId(): self
    {
        $this->instance->unsetCardId();
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
     * Unsets pan field.
     */
    public function unsetPAN(): self
    {
        $this->instance->unsetPAN();
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
     * Unsets reference field.
     */
    public function unsetReference(): self
    {
        $this->instance->unsetReference();
        return $this;
    }

    /**
     * Initializes a new update card group response move card references items object.
     */
    public function build(): UpdateCardGroupResponseMoveCardReferencesItems
    {
        return CoreHelper::clone($this->instance);
    }
}
