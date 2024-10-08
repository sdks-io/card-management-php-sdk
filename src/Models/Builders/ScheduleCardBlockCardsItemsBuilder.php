<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\ScheduleCardBlockCardsItems;

/**
 * Builder for model ScheduleCardBlockCardsItems
 *
 * @see ScheduleCardBlockCardsItems
 */
class ScheduleCardBlockCardsItemsBuilder
{
    /**
     * @var ScheduleCardBlockCardsItems
     */
    private $instance;

    private function __construct(ScheduleCardBlockCardsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new schedule card block cards items Builder object.
     */
    public static function init(string $action): self
    {
        return new self(new ScheduleCardBlockCardsItems($action));
    }

    /**
     * Sets col co code field.
     */
    public function colCoCode(?int $value): self
    {
        $this->instance->setColCoCode($value);
        return $this;
    }

    /**
     * Sets col co id field.
     */
    public function colCoId(?int $value): self
    {
        $this->instance->setColCoId($value);
        return $this;
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
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Sets payer number field.
     */
    public function payerNumber(?string $value): self
    {
        $this->instance->setPayerNumber($value);
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
     * Sets panid field.
     */
    public function pANID(?string $value): self
    {
        $this->instance->setPANID($value);
        return $this;
    }

    /**
     * Sets card expiry date field.
     */
    public function cardExpiryDate(?string $value): self
    {
        $this->instance->setCardExpiryDate($value);
        return $this;
    }

    /**
     * Sets from date field.
     */
    public function fromDate(?string $value): self
    {
        $this->instance->setFromDate($value);
        return $this;
    }

    /**
     * Sets to date field.
     */
    public function toDate(?string $value): self
    {
        $this->instance->setToDate($value);
        return $this;
    }

    /**
     * Sets caller field.
     */
    public function caller(?string $value): self
    {
        $this->instance->setCaller($value);
        return $this;
    }

    /**
     * Unsets caller field.
     */
    public function unsetCaller(): self
    {
        $this->instance->unsetCaller();
        return $this;
    }

    /**
     * Sets notify caller field.
     */
    public function notifyCaller(?bool $value): self
    {
        $this->instance->setNotifyCaller($value);
        return $this;
    }

    /**
     * Initializes a new schedule card block cards items object.
     */
    public function build(): ScheduleCardBlockCardsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
