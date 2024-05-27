<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

/**
 * This entity models the data that is sent in the http request body of this operation.
 */
class CancelCardRequest implements \JsonSerializable
{
    /**
     * @var UpdateCard[]
     */
    private $cards;

    /**
     * @var array
     */
    private $reasonId = [];

    /**
     * @var array
     */
    private $reasonText = [];

    /**
     * @param UpdateCard[] $cards
     */
    public function __construct(array $cards)
    {
        $this->cards = $cards;
    }

    /**
     * Returns Cards.
     * List of CancelCardRequest entity.
     *
     * Each card in the list will be Cancelled.
     *
     * The details of the entity are given below.
     *
     * @return UpdateCard[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Sets Cards.
     * List of CancelCardRequest entity.
     *
     * Each card in the list will be Cancelled.
     *
     * The details of the entity are given below.
     *
     * @required
     * @maps Cards
     *
     * @param UpdateCard[] $cards
     */
    public function setCards(array $cards): void
    {
        $this->cards = $cards;
    }

    /**
     * Returns Reason Id.
     * Reason id for cancelling the card.<br />
     *
     * Optional if ReasonText is passed, else mandatory<br />
     *
     * When passed, the reason Id will be validated with the allowed reason id’s configured for the card
     * type of the card.<br />
     *
     * If the reason Id is not allowed, then it will be included on the error cards response.
     *
     *
     *
     * Possible values:
     *
     * 1 (Lost)
     *
     * 2 (Stolen)
     *
     * 3 (Card no longer required)
     */
    public function getReasonId(): ?int
    {
        if (count($this->reasonId) == 0) {
            return null;
        }
        return $this->reasonId['value'];
    }

    /**
     * Sets Reason Id.
     * Reason id for cancelling the card.<br />
     *
     * Optional if ReasonText is passed, else mandatory<br />
     *
     * When passed, the reason Id will be validated with the allowed reason id’s configured for the card
     * type of the card.<br />
     *
     * If the reason Id is not allowed, then it will be included on the error cards response.
     *
     *
     *
     * Possible values:
     *
     * 1 (Lost)
     *
     * 2 (Stolen)
     *
     * 3 (Card no longer required)
     *
     * @maps ReasonId
     */
    public function setReasonId(?int $reasonId): void
    {
        $this->reasonId['value'] = $reasonId;
    }

    /**
     * Unsets Reason Id.
     * Reason id for cancelling the card.<br />
     *
     * Optional if ReasonText is passed, else mandatory<br />
     *
     * When passed, the reason Id will be validated with the allowed reason id’s configured for the card
     * type of the card.<br />
     *
     * If the reason Id is not allowed, then it will be included on the error cards response.
     *
     *
     *
     * Possible values:
     *
     * 1 (Lost)
     *
     * 2 (Stolen)
     *
     * 3 (Card no longer required)
     */
    public function unsetReasonId(): void
    {
        $this->reasonId = [];
    }

    /**
     * Returns Reason Text.
     * Reason text for cancelling the card.<br />
     *
     * Optional if ReasonId is passed, else mandatory<br />
     *
     * When Reason Id is not known to the client, the reason text can be passed.<br />
     *
     * When Reason Text is passed and the Target Status is either Block or Damaged, the text will be
     * validated with the allowed list of values configured for the card type of the card.
     *
     * If the text is not allowed, then it will be included on the error cards response.
     *
     * However, if the Target status is Temporary block or Unblock then the text will be submitted
     *
     *
     *
     * Possible Values:
     *
     * 1) Lost
     *
     * 2) Stolen
     *
     * 3) Card no longer required
     */
    public function getReasonText(): ?string
    {
        if (count($this->reasonText) == 0) {
            return null;
        }
        return $this->reasonText['value'];
    }

    /**
     * Sets Reason Text.
     * Reason text for cancelling the card.<br />
     *
     * Optional if ReasonId is passed, else mandatory<br />
     *
     * When Reason Id is not known to the client, the reason text can be passed.<br />
     *
     * When Reason Text is passed and the Target Status is either Block or Damaged, the text will be
     * validated with the allowed list of values configured for the card type of the card.
     *
     * If the text is not allowed, then it will be included on the error cards response.
     *
     * However, if the Target status is Temporary block or Unblock then the text will be submitted
     *
     *
     *
     * Possible Values:
     *
     * 1) Lost
     *
     * 2) Stolen
     *
     * 3) Card no longer required
     *
     * @maps ReasonText
     */
    public function setReasonText(?string $reasonText): void
    {
        $this->reasonText['value'] = $reasonText;
    }

    /**
     * Unsets Reason Text.
     * Reason text for cancelling the card.<br />
     *
     * Optional if ReasonId is passed, else mandatory<br />
     *
     * When Reason Id is not known to the client, the reason text can be passed.<br />
     *
     * When Reason Text is passed and the Target Status is either Block or Damaged, the text will be
     * validated with the allowed list of values configured for the card type of the card.
     *
     * If the text is not allowed, then it will be included on the error cards response.
     *
     * However, if the Target status is Temporary block or Unblock then the text will be submitted
     *
     *
     *
     * Possible Values:
     *
     * 1) Lost
     *
     * 2) Stolen
     *
     * 3) Card no longer required
     */
    public function unsetReasonText(): void
    {
        $this->reasonText = [];
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['Cards']          = $this->cards;
        if (!empty($this->reasonId)) {
            $json['ReasonId']   = $this->reasonId['value'];
        }
        if (!empty($this->reasonText)) {
            $json['ReasonText'] = $this->reasonText['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
