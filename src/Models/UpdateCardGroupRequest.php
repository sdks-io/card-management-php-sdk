<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class UpdateCardGroupRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $colCoCode;

    /**
     * @var int|null
     */
    private $colCoId;

    /**
     * @var string|null
     */
    private $payerNumber;

    /**
     * @var int|null
     */
    private $payerId;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var int|null
     */
    private $cardGroupId;

    /**
     * @var string|null
     */
    private $cardGroupName;

    /**
     * @var bool|null
     */
    private $printOnCard;

    /**
     * @var int|null
     */
    private $cardTypeId;

    /**
     * @var bool|null
     */
    private $terminateCardGroup;

    /**
     * @var bool|null
     */
    private $moveCards;

    /**
     * @var int|null
     */
    private $targetAccountId;

    /**
     * @var string|null
     */
    private $targetAccountNumber;

    /**
     * @var string|null
     */
    private $targetNewCardGroupName;

    /**
     * @var int|null
     */
    private $targetCardGroupId;

    /**
     * Returns Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86-Philippines
     *
     * 5-UK
     */
    public function getColCoCode(): ?int
    {
        return $this->colCoCode;
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86-Philippines
     *
     * 5-UK
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Col Co Id.
     * Collecting Company Id  of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1-Philippines
     *
     * 5-UK
     */
    public function getColCoId(): ?int
    {
        return $this->colCoId;
    }

    /**
     * Sets Col Co Id.
     * Collecting Company Id  of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1-Philippines
     *
     * 5-UK
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId = $colCoId;
    }

    /**
     * Returns Payer Number.
     * Payer Number of the selected payer.
     * Optional if PayerId is passed else Mandatory
     */
    public function getPayerNumber(): ?string
    {
        return $this->payerNumber;
    }

    /**
     * Sets Payer Number.
     * Payer Number of the selected payer.
     * Optional if PayerId is passed else Mandatory
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber = $payerNumber;
    }

    /**
     * Returns Payer Id.
     * Payer Id (i.e., Customer Id of the Payment Customer) of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     */
    public function getPayerId(): ?int
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     * Payer Id (i.e., Customer Id of the Payment Customer) of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Returns Account Id.
     * Account ID of the card-group to be updated/terminated.
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account ID of the card-group to be updated/terminated.
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Number.
     * Account Number of the card-group to be updated/terminated.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number of the card-group to be updated/terminated.
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Card Group Id.
     * Unique Id of the card group that needs to be updated or terminated.
     */
    public function getCardGroupId(): ?int
    {
        return $this->cardGroupId;
    }

    /**
     * Sets Card Group Id.
     * Unique Id of the card group that needs to be updated or terminated.
     *
     * @maps CardGroupId
     */
    public function setCardGroupId(?int $cardGroupId): void
    {
        $this->cardGroupId = $cardGroupId;
    }

    /**
     * Returns Card Group Name.
     * New name for the card group if it needs to be updated. Set this field to ‘null’ if no change
     * required to the current card group name.
     *
     *
     * Optional
     *
     *
     * Minimum length: 1 (Configurable)
     * Maximum length: 40 (Configurable)
     * Allowed characters (Configurable) are: - A-Z 0-9, / ‘. & Ä Ö Ü Å Æ É Ø
     * Note: The card group name has to be unique for customer. Else an error with error code 9015 is
     * returned.
     */
    public function getCardGroupName(): ?string
    {
        return $this->cardGroupName;
    }

    /**
     * Sets Card Group Name.
     * New name for the card group if it needs to be updated. Set this field to ‘null’ if no change
     * required to the current card group name.
     *
     *
     * Optional
     *
     *
     * Minimum length: 1 (Configurable)
     * Maximum length: 40 (Configurable)
     * Allowed characters (Configurable) are: - A-Z 0-9, / ‘. & Ä Ö Ü Å Æ É Ø
     * Note: The card group name has to be unique for customer. Else an error with error code 9015 is
     * returned.
     *
     * @maps CardGroupName
     */
    public function setCardGroupName(?string $cardGroupName): void
    {
        $this->cardGroupName = $cardGroupName;
    }

    /**
     * Returns Print on Card.
     * Whether to emboss the card group name on the cards.
     *
     * Populate this field only if the value needs to be updated. Otherwise set to ‘null’.
     */
    public function getPrintOnCard(): ?bool
    {
        return $this->printOnCard;
    }

    /**
     * Sets Print on Card.
     * Whether to emboss the card group name on the cards.
     *
     * Populate this field only if the value needs to be updated. Otherwise set to ‘null’.
     *
     * @maps PrintOnCard
     */
    public function setPrintOnCard(?bool $printOnCard): void
    {
        $this->printOnCard = $printOnCard;
    }

    /**
     * Returns Card Type Id.
     * Card Type ID of the card group.
     *
     * Populate this field if the value needs to be updated. Otherwise set to ‘null’.
     *
     * Optional
     *
     * Note:
     *
     * 1)    If a card type is passed, the cardgorup will allow cards with same card type to be moved in to
     * the card group.
     *
     * 2)    Pass ‘-1’ to remove the card type from the card group.
     */
    public function getCardTypeId(): ?int
    {
        return $this->cardTypeId;
    }

    /**
     * Sets Card Type Id.
     * Card Type ID of the card group.
     *
     * Populate this field if the value needs to be updated. Otherwise set to ‘null’.
     *
     * Optional
     *
     * Note:
     *
     * 1)    If a card type is passed, the cardgorup will allow cards with same card type to be moved in to
     * the card group.
     *
     * 2)    Pass ‘-1’ to remove the card type from the card group.
     *
     * @maps CardTypeId
     */
    public function setCardTypeId(?int $cardTypeId): void
    {
        $this->cardTypeId = $cardTypeId;
    }

    /**
     * Returns Terminate Card Group.
     * Whether to terminate the card group.
     * When set to true, the card group will be terminated by setting current date as it’s termination date.
     * Optional, False by default .
     */
    public function getTerminateCardGroup(): ?bool
    {
        return $this->terminateCardGroup;
    }

    /**
     * Sets Terminate Card Group.
     * Whether to terminate the card group.
     * When set to true, the card group will be terminated by setting current date as it’s termination date.
     * Optional, False by default .
     *
     * @maps TerminateCardGroup
     */
    public function setTerminateCardGroup(?bool $terminateCardGroup): void
    {
        $this->terminateCardGroup = $terminateCardGroup;
    }

    /**
     * Returns Move Cards.
     * Whether to move the cards from this CardGroup in to a different or a new CardGroup.
     * Optional
     * When the value is set to ‘False’ or ‘null’, the cards that are currently in the card-group will
     * remain under the same card-group.
     */
    public function getMoveCards(): ?bool
    {
        return $this->moveCards;
    }

    /**
     * Sets Move Cards.
     * Whether to move the cards from this CardGroup in to a different or a new CardGroup.
     * Optional
     * When the value is set to ‘False’ or ‘null’, the cards that are currently in the card-group will
     * remain under the same card-group.
     *
     * @maps MoveCards
     */
    public function setMoveCards(?bool $moveCards): void
    {
        $this->moveCards = $moveCards;
    }

    /**
     * Returns Target Account Id.
     * Account ID of the new/target card-group.
     * Either TargetAccountId or TargetAccountNumber is mandatory when MoveCards is set to True.
     */
    public function getTargetAccountId(): ?int
    {
        return $this->targetAccountId;
    }

    /**
     * Sets Target Account Id.
     * Account ID of the new/target card-group.
     * Either TargetAccountId or TargetAccountNumber is mandatory when MoveCards is set to True.
     *
     * @maps TargetAccountId
     */
    public function setTargetAccountId(?int $targetAccountId): void
    {
        $this->targetAccountId = $targetAccountId;
    }

    /**
     * Returns Target Account Number.
     * Account Number of the new/target card-group.
     * Either TargetAccountId or TargetAccountNumber is mandatory when MoveCards is set to True.
     */
    public function getTargetAccountNumber(): ?string
    {
        return $this->targetAccountNumber;
    }

    /**
     * Sets Target Account Number.
     * Account Number of the new/target card-group.
     * Either TargetAccountId or TargetAccountNumber is mandatory when MoveCards is set to True.
     *
     * @maps TargetAccountNumber
     */
    public function setTargetAccountNumber(?string $targetAccountNumber): void
    {
        $this->targetAccountNumber = $targetAccountNumber;
    }

    /**
     * Returns Target New Card Group Name.
     * Name of the new card group if the cards in the existing card-group have to be moved to a new card-
     * group.
     *
     *
     * Mandatory when MoveCards parameter is True and TargetCardGroupId is null.
     *
     *
     * Minimum length: 1 (Configurable)
     * Maximum length: 30 (Configurable)
     */
    public function getTargetNewCardGroupName(): ?string
    {
        return $this->targetNewCardGroupName;
    }

    /**
     * Sets Target New Card Group Name.
     * Name of the new card group if the cards in the existing card-group have to be moved to a new card-
     * group.
     *
     *
     * Mandatory when MoveCards parameter is True and TargetCardGroupId is null.
     *
     *
     * Minimum length: 1 (Configurable)
     * Maximum length: 30 (Configurable)
     *
     * @maps TargetNewCardGroupName
     */
    public function setTargetNewCardGroupName(?string $targetNewCardGroupName): void
    {
        $this->targetNewCardGroupName = $targetNewCardGroupName;
    }

    /**
     * Returns Target Card Group Id.
     * ID of the card group if the cards in the existing card-group have to be moved to another existing
     * card-group.
     * Mandatory when MoveCards parameter is True and TargetNewCardGroupName is null.
     * If the value is “-1” then the cards will be moved out of the current CardGroup.
     */
    public function getTargetCardGroupId(): ?int
    {
        return $this->targetCardGroupId;
    }

    /**
     * Sets Target Card Group Id.
     * ID of the card group if the cards in the existing card-group have to be moved to another existing
     * card-group.
     * Mandatory when MoveCards parameter is True and TargetNewCardGroupName is null.
     * If the value is “-1” then the cards will be moved out of the current CardGroup.
     *
     * @maps TargetCardGroupId
     */
    public function setTargetCardGroupId(?int $targetCardGroupId): void
    {
        $this->targetCardGroupId = $targetCardGroupId;
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
        if (isset($this->colCoCode)) {
            $json['ColCoCode']              = $this->colCoCode;
        }
        if (isset($this->colCoId)) {
            $json['ColCoId']                = $this->colCoId;
        }
        if (isset($this->payerNumber)) {
            $json['PayerNumber']            = $this->payerNumber;
        }
        if (isset($this->payerId)) {
            $json['PayerId']                = $this->payerId;
        }
        if (isset($this->accountId)) {
            $json['AccountId']              = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber']          = $this->accountNumber;
        }
        if (isset($this->cardGroupId)) {
            $json['CardGroupId']            = $this->cardGroupId;
        }
        if (isset($this->cardGroupName)) {
            $json['CardGroupName']          = $this->cardGroupName;
        }
        if (isset($this->printOnCard)) {
            $json['PrintOnCard']            = $this->printOnCard;
        }
        if (isset($this->cardTypeId)) {
            $json['CardTypeId']             = $this->cardTypeId;
        }
        if (isset($this->terminateCardGroup)) {
            $json['TerminateCardGroup']     = $this->terminateCardGroup;
        }
        if (isset($this->moveCards)) {
            $json['MoveCards']              = $this->moveCards;
        }
        if (isset($this->targetAccountId)) {
            $json['TargetAccountId']        = $this->targetAccountId;
        }
        if (isset($this->targetAccountNumber)) {
            $json['TargetAccountNumber']    = $this->targetAccountNumber;
        }
        if (isset($this->targetNewCardGroupName)) {
            $json['TargetNewCardGroupName'] = $this->targetNewCardGroupName;
        }
        if (isset($this->targetCardGroupId)) {
            $json['TargetCardGroupId']      = $this->targetCardGroupId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
