<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\OrderCardEnquiry;

/**
 * Builder for model OrderCardEnquiry
 *
 * @see OrderCardEnquiry
 */
class OrderCardEnquiryBuilder
{
    /**
     * @var OrderCardEnquiry
     */
    private $instance;

    private function __construct(OrderCardEnquiry $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new order card enquiry Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderCardEnquiry());
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
     * Unsets account id field.
     */
    public function unsetAccountId(): self
    {
        $this->instance->unsetAccountId();
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
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets bcoreference field.
     */
    public function bCOReference(?int $value): self
    {
        $this->instance->setBCOReference($value);
        return $this;
    }

    /**
     * Unsets bcoreference field.
     */
    public function unsetBCOReference(): self
    {
        $this->instance->unsetBCOReference();
        return $this;
    }

    /**
     * Sets bcorow number field.
     */
    public function bCORowNumber(?int $value): self
    {
        $this->instance->setBCORowNumber($value);
        return $this;
    }

    /**
     * Unsets bcorow number field.
     */
    public function unsetBCORowNumber(): self
    {
        $this->instance->unsetBCORowNumber();
        return $this;
    }

    /**
     * Sets card group id field.
     */
    public function cardGroupId(?int $value): self
    {
        $this->instance->setCardGroupId($value);
        return $this;
    }

    /**
     * Unsets card group id field.
     */
    public function unsetCardGroupId(): self
    {
        $this->instance->unsetCardGroupId();
        return $this;
    }

    /**
     * Sets card group name field.
     */
    public function cardGroupName(?string $value): self
    {
        $this->instance->setCardGroupName($value);
        return $this;
    }

    /**
     * Unsets card group name field.
     */
    public function unsetCardGroupName(): self
    {
        $this->instance->unsetCardGroupName();
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
     * Unsets card id field.
     */
    public function unsetCardId(): self
    {
        $this->instance->unsetCardId();
        return $this;
    }

    /**
     * Sets card pan field.
     */
    public function cardPAN(?string $value): self
    {
        $this->instance->setCardPAN($value);
        return $this;
    }

    /**
     * Unsets card pan field.
     */
    public function unsetCardPAN(): self
    {
        $this->instance->unsetCardPAN();
        return $this;
    }

    /**
     * Sets masked pan field.
     */
    public function maskedPAN(?string $value): self
    {
        $this->instance->setMaskedPAN($value);
        return $this;
    }

    /**
     * Unsets masked pan field.
     */
    public function unsetMaskedPAN(): self
    {
        $this->instance->unsetMaskedPAN();
        return $this;
    }

    /**
     * Sets panid field.
     */
    public function pANID(?float $value): self
    {
        $this->instance->setPANID($value);
        return $this;
    }

    /**
     * Unsets panid field.
     */
    public function unsetPANID(): self
    {
        $this->instance->unsetPANID();
        return $this;
    }

    /**
     * Sets card type code field.
     */
    public function cardTypeCode(?string $value): self
    {
        $this->instance->setCardTypeCode($value);
        return $this;
    }

    /**
     * Unsets card type code field.
     */
    public function unsetCardTypeCode(): self
    {
        $this->instance->unsetCardTypeCode();
        return $this;
    }

    /**
     * Sets card type id field.
     */
    public function cardTypeId(?int $value): self
    {
        $this->instance->setCardTypeId($value);
        return $this;
    }

    /**
     * Unsets card type id field.
     */
    public function unsetCardTypeId(): self
    {
        $this->instance->unsetCardTypeId();
        return $this;
    }

    /**
     * Sets card type name field.
     */
    public function cardTypeName(?string $value): self
    {
        $this->instance->setCardTypeName($value);
        return $this;
    }

    /**
     * Unsets card type name field.
     */
    public function unsetCardTypeName(): self
    {
        $this->instance->unsetCardTypeName();
        return $this;
    }

    /**
     * Sets driver name field.
     */
    public function driverName(?string $value): self
    {
        $this->instance->setDriverName($value);
        return $this;
    }

    /**
     * Unsets driver name field.
     */
    public function unsetDriverName(): self
    {
        $this->instance->unsetDriverName();
        return $this;
    }

    /**
     * Sets error code field.
     */
    public function errorCode(?string $value): self
    {
        $this->instance->setErrorCode($value);
        return $this;
    }

    /**
     * Unsets error code field.
     */
    public function unsetErrorCode(): self
    {
        $this->instance->unsetErrorCode();
        return $this;
    }

    /**
     * Sets error description field.
     */
    public function errorDescription(?string $value): self
    {
        $this->instance->setErrorDescription($value);
        return $this;
    }

    /**
     * Unsets error description field.
     */
    public function unsetErrorDescription(): self
    {
        $this->instance->unsetErrorDescription();
        return $this;
    }

    /**
     * Sets gateway sync error code field.
     */
    public function gatewaySyncErrorCode(?string $value): self
    {
        $this->instance->setGatewaySyncErrorCode($value);
        return $this;
    }

    /**
     * Unsets gateway sync error code field.
     */
    public function unsetGatewaySyncErrorCode(): self
    {
        $this->instance->unsetGatewaySyncErrorCode();
        return $this;
    }

    /**
     * Sets gateway sync error description field.
     */
    public function gatewaySyncErrorDescription(?string $value): self
    {
        $this->instance->setGatewaySyncErrorDescription($value);
        return $this;
    }

    /**
     * Unsets gateway sync error description field.
     */
    public function unsetGatewaySyncErrorDescription(): self
    {
        $this->instance->unsetGatewaySyncErrorDescription();
        return $this;
    }

    /**
     * Sets gateway sync status field.
     */
    public function gatewaySyncStatus(?string $value): self
    {
        $this->instance->setGatewaySyncStatus($value);
        return $this;
    }

    /**
     * Unsets gateway sync status field.
     */
    public function unsetGatewaySyncStatus(): self
    {
        $this->instance->unsetGatewaySyncStatus();
        return $this;
    }

    /**
     * Sets main reference field.
     */
    public function mainReference(?int $value): self
    {
        $this->instance->setMainReference($value);
        return $this;
    }

    /**
     * Sets order card reference field.
     */
    public function orderCardReference(?int $value): self
    {
        $this->instance->setOrderCardReference($value);
        return $this;
    }

    /**
     * Sets order status field.
     */
    public function orderStatus(?string $value): self
    {
        $this->instance->setOrderStatus($value);
        return $this;
    }

    /**
     * Unsets order status field.
     */
    public function unsetOrderStatus(): self
    {
        $this->instance->unsetOrderStatus();
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
     * Unsets payer number field.
     */
    public function unsetPayerNumber(): self
    {
        $this->instance->unsetPayerNumber();
        return $this;
    }

    /**
     * Sets processed date field.
     */
    public function processedDate(?string $value): self
    {
        $this->instance->setProcessedDate($value);
        return $this;
    }

    /**
     * Unsets processed date field.
     */
    public function unsetProcessedDate(): self
    {
        $this->instance->unsetProcessedDate();
        return $this;
    }

    /**
     * Sets purchase category code field.
     */
    public function purchaseCategoryCode(?string $value): self
    {
        $this->instance->setPurchaseCategoryCode($value);
        return $this;
    }

    /**
     * Unsets purchase category code field.
     */
    public function unsetPurchaseCategoryCode(): self
    {
        $this->instance->unsetPurchaseCategoryCode();
        return $this;
    }

    /**
     * Sets purchase category id field.
     */
    public function purchaseCategoryId(?int $value): self
    {
        $this->instance->setPurchaseCategoryId($value);
        return $this;
    }

    /**
     * Unsets purchase category id field.
     */
    public function unsetPurchaseCategoryId(): self
    {
        $this->instance->unsetPurchaseCategoryId();
        return $this;
    }

    /**
     * Sets purchase category name field.
     */
    public function purchaseCategoryName(?string $value): self
    {
        $this->instance->setPurchaseCategoryName($value);
        return $this;
    }

    /**
     * Unsets purchase category name field.
     */
    public function unsetPurchaseCategoryName(): self
    {
        $this->instance->unsetPurchaseCategoryName();
        return $this;
    }

    /**
     * Sets submitted date field.
     */
    public function submittedDate(?string $value): self
    {
        $this->instance->setSubmittedDate($value);
        return $this;
    }

    /**
     * Unsets submitted date field.
     */
    public function unsetSubmittedDate(): self
    {
        $this->instance->unsetSubmittedDate();
        return $this;
    }

    /**
     * Sets sync processed date field.
     */
    public function syncProcessedDate(?string $value): self
    {
        $this->instance->setSyncProcessedDate($value);
        return $this;
    }

    /**
     * Unsets sync processed date field.
     */
    public function unsetSyncProcessedDate(): self
    {
        $this->instance->unsetSyncProcessedDate();
        return $this;
    }

    /**
     * Sets sync requested date field.
     */
    public function syncRequestedDate(?string $value): self
    {
        $this->instance->setSyncRequestedDate($value);
        return $this;
    }

    /**
     * Unsets sync requested date field.
     */
    public function unsetSyncRequestedDate(): self
    {
        $this->instance->unsetSyncRequestedDate();
        return $this;
    }

    /**
     * Sets vrn field.
     */
    public function vRN(?string $value): self
    {
        $this->instance->setVRN($value);
        return $this;
    }

    /**
     * Unsets vrn field.
     */
    public function unsetVRN(): self
    {
        $this->instance->unsetVRN();
        return $this;
    }

    /**
     * Sets order request id field.
     */
    public function orderRequestId(?string $value): self
    {
        $this->instance->setOrderRequestId($value);
        return $this;
    }

    /**
     * Unsets order request id field.
     */
    public function unsetOrderRequestId(): self
    {
        $this->instance->unsetOrderRequestId();
        return $this;
    }

    /**
     * Sets expiry date field.
     */
    public function expiryDate(?string $value): self
    {
        $this->instance->setExpiryDate($value);
        return $this;
    }

    /**
     * Unsets expiry date field.
     */
    public function unsetExpiryDate(): self
    {
        $this->instance->unsetExpiryDate();
        return $this;
    }

    /**
     * Sets client reference id field.
     */
    public function clientReferenceId(?string $value): self
    {
        $this->instance->setClientReferenceId($value);
        return $this;
    }

    /**
     * Unsets client reference id field.
     */
    public function unsetClientReferenceId(): self
    {
        $this->instance->unsetClientReferenceId();
        return $this;
    }

    /**
     * Sets status description field.
     */
    public function statusDescription(?string $value): self
    {
        $this->instance->setStatusDescription($value);
        return $this;
    }

    /**
     * Unsets status description field.
     */
    public function unsetStatusDescription(): self
    {
        $this->instance->unsetStatusDescription();
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
     * Unsets col co id field.
     */
    public function unsetColCoId(): self
    {
        $this->instance->unsetColCoId();
        return $this;
    }

    /**
     * Initializes a new order card enquiry object.
     */
    public function build(): OrderCardEnquiry
    {
        return CoreHelper::clone($this->instance);
    }
}
