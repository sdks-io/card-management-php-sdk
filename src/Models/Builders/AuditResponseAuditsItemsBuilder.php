<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellCardManagementAPIsLib\Models\AuditResponseAuditsItems;

/**
 * Builder for model AuditResponseAuditsItems
 *
 * @see AuditResponseAuditsItems
 */
class AuditResponseAuditsItemsBuilder
{
    /**
     * @var AuditResponseAuditsItems
     */
    private $instance;

    private function __construct(AuditResponseAuditsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new audit response audits items Builder object.
     */
    public static function init(): self
    {
        return new self(new AuditResponseAuditsItems());
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
     * Sets additional information 1 field.
     */
    public function additionalInformation1(?string $value): self
    {
        $this->instance->setAdditionalInformation1($value);
        return $this;
    }

    /**
     * Unsets additional information 1 field.
     */
    public function unsetAdditionalInformation1(): self
    {
        $this->instance->unsetAdditionalInformation1();
        return $this;
    }

    /**
     * Sets additional information 2 field.
     */
    public function additionalInformation2(?string $value): self
    {
        $this->instance->setAdditionalInformation2($value);
        return $this;
    }

    /**
     * Unsets additional information 2 field.
     */
    public function unsetAdditionalInformation2(): self
    {
        $this->instance->unsetAdditionalInformation2();
        return $this;
    }

    /**
     * Sets additional information 3 field.
     */
    public function additionalInformation3(?string $value): self
    {
        $this->instance->setAdditionalInformation3($value);
        return $this;
    }

    /**
     * Unsets additional information 3 field.
     */
    public function unsetAdditionalInformation3(): self
    {
        $this->instance->unsetAdditionalInformation3();
        return $this;
    }

    /**
     * Sets additional information 4 field.
     */
    public function additionalInformation4(?string $value): self
    {
        $this->instance->setAdditionalInformation4($value);
        return $this;
    }

    /**
     * Unsets additional information 4 field.
     */
    public function unsetAdditionalInformation4(): self
    {
        $this->instance->unsetAdditionalInformation4();
        return $this;
    }

    /**
     * Sets additional information 5 field.
     */
    public function additionalInformation5(?string $value): self
    {
        $this->instance->setAdditionalInformation5($value);
        return $this;
    }

    /**
     * Unsets additional information 5 field.
     */
    public function unsetAdditionalInformation5(): self
    {
        $this->instance->unsetAdditionalInformation5();
        return $this;
    }

    /**
     * Sets additional information 6 field.
     */
    public function additionalInformation6(?string $value): self
    {
        $this->instance->setAdditionalInformation6($value);
        return $this;
    }

    /**
     * Unsets additional information 6 field.
     */
    public function unsetAdditionalInformation6(): self
    {
        $this->instance->unsetAdditionalInformation6();
        return $this;
    }

    /**
     * Sets additional information 7 field.
     */
    public function additionalInformation7(?string $value): self
    {
        $this->instance->setAdditionalInformation7($value);
        return $this;
    }

    /**
     * Unsets additional information 7 field.
     */
    public function unsetAdditionalInformation7(): self
    {
        $this->instance->unsetAdditionalInformation7();
        return $this;
    }

    /**
     * Sets additional information 8 field.
     */
    public function additionalInformation8(?string $value): self
    {
        $this->instance->setAdditionalInformation8($value);
        return $this;
    }

    /**
     * Unsets additional information 8 field.
     */
    public function unsetAdditionalInformation8(): self
    {
        $this->instance->unsetAdditionalInformation8();
        return $this;
    }

    /**
     * Sets additional information 9 field.
     */
    public function additionalInformation9(?string $value): self
    {
        $this->instance->setAdditionalInformation9($value);
        return $this;
    }

    /**
     * Unsets additional information 9 field.
     */
    public function unsetAdditionalInformation9(): self
    {
        $this->instance->unsetAdditionalInformation9();
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
     * Sets col co code field.
     */
    public function colCoCode(?int $value): self
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
     * Sets error code field.
     */
    public function errorCode(?string $value): self
    {
        $this->instance->setErrorCode($value);
        return $this;
    }

    /**
     * Sets error string field.
     */
    public function errorString(?string $value): self
    {
        $this->instance->setErrorString($value);
        return $this;
    }

    /**
     * Unsets error string field.
     */
    public function unsetErrorString(): self
    {
        $this->instance->unsetErrorString();
        return $this;
    }

    /**
     * Sets global request id field.
     */
    public function globalRequestID(?string $value): self
    {
        $this->instance->setGlobalRequestID($value);
        return $this;
    }

    /**
     * Unsets global request id field.
     */
    public function unsetGlobalRequestID(): self
    {
        $this->instance->unsetGlobalRequestID();
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
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
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
     * Sets processed on field.
     */
    public function processedOn(?string $value): self
    {
        $this->instance->setProcessedOn($value);
        return $this;
    }

    /**
     * Unsets processed on field.
     */
    public function unsetProcessedOn(): self
    {
        $this->instance->unsetProcessedOn();
        return $this;
    }

    /**
     * Sets requested by field.
     */
    public function requestedBy(?string $value): self
    {
        $this->instance->setRequestedBy($value);
        return $this;
    }

    /**
     * Unsets requested by field.
     */
    public function unsetRequestedBy(): self
    {
        $this->instance->unsetRequestedBy();
        return $this;
    }

    /**
     * Sets requested operation field.
     */
    public function requestedOperation(?string $value): self
    {
        $this->instance->setRequestedOperation($value);
        return $this;
    }

    /**
     * Unsets requested operation field.
     */
    public function unsetRequestedOperation(): self
    {
        $this->instance->unsetRequestedOperation();
        return $this;
    }

    /**
     * Sets request reference field.
     */
    public function requestReference(?int $value): self
    {
        $this->instance->setRequestReference($value);
        return $this;
    }

    /**
     * Unsets request reference field.
     */
    public function unsetRequestReference(): self
    {
        $this->instance->unsetRequestReference();
        return $this;
    }

    /**
     * Sets request type field.
     */
    public function requestType(?string $value): self
    {
        $this->instance->setRequestType($value);
        return $this;
    }

    /**
     * Unsets request type field.
     */
    public function unsetRequestType(): self
    {
        $this->instance->unsetRequestType();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets submitted on field.
     */
    public function submittedOn(?string $value): self
    {
        $this->instance->setSubmittedOn($value);
        return $this;
    }

    /**
     * Unsets submitted on field.
     */
    public function unsetSubmittedOn(): self
    {
        $this->instance->unsetSubmittedOn();
        return $this;
    }

    /**
     * Sets sub request reference field.
     */
    public function subRequestReference(?int $value): self
    {
        $this->instance->setSubRequestReference($value);
        return $this;
    }

    /**
     * Unsets sub request reference field.
     */
    public function unsetSubRequestReference(): self
    {
        $this->instance->unsetSubRequestReference();
        return $this;
    }

    /**
     * Sets user display name field.
     */
    public function userDisplayName(?string $value): self
    {
        $this->instance->setUserDisplayName($value);
        return $this;
    }

    /**
     * Unsets user display name field.
     */
    public function unsetUserDisplayName(): self
    {
        $this->instance->unsetUserDisplayName();
        return $this;
    }

    /**
     * Initializes a new audit response audits items object.
     */
    public function build(): AuditResponseAuditsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
