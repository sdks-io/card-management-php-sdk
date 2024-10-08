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
 * Encapsulates the details of a Summary response.
 */
class SummaryResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $activeCards = [];

    /**
     * @var array
     */
    private $blockedCards = [];

    /**
     * @var array
     */
    private $cancelledCards = [];

    /**
     * @var array
     */
    private $expiredCards = [];

    /**
     * @var array
     */
    private $expiringCards = [];

    /**
     * @var array
     */
    private $fraudCards = [];

    /**
     * @var array
     */
    private $newCards = [];

    /**
     * @var array
     */
    private $renewalPendingCards = [];

    /**
     * @var array
     */
    private $replacedCards = [];

    /**
     * @var array
     */
    private $temporaryBlockByCustomer = [];

    /**
     * @var array
     */
    private $temporaryBlockByShell = [];

    /**
     * @var array
     */
    private $totalCards = [];

    /**
     * Returns Active Cards.
     * Total number of active cards for the given search criteria
     */
    public function getActiveCards(): ?int
    {
        if (count($this->activeCards) == 0) {
            return null;
        }
        return $this->activeCards['value'];
    }

    /**
     * Sets Active Cards.
     * Total number of active cards for the given search criteria
     *
     * @maps ActiveCards
     */
    public function setActiveCards(?int $activeCards): void
    {
        $this->activeCards['value'] = $activeCards;
    }

    /**
     * Unsets Active Cards.
     * Total number of active cards for the given search criteria
     */
    public function unsetActiveCards(): void
    {
        $this->activeCards = [];
    }

    /**
     * Returns Blocked Cards.
     * Total number of cards for the given search criteria that are permanently blocked (Blocked)
     */
    public function getBlockedCards(): ?int
    {
        if (count($this->blockedCards) == 0) {
            return null;
        }
        return $this->blockedCards['value'];
    }

    /**
     * Sets Blocked Cards.
     * Total number of cards for the given search criteria that are permanently blocked (Blocked)
     *
     * @maps BlockedCards
     */
    public function setBlockedCards(?int $blockedCards): void
    {
        $this->blockedCards['value'] = $blockedCards;
    }

    /**
     * Unsets Blocked Cards.
     * Total number of cards for the given search criteria that are permanently blocked (Blocked)
     */
    public function unsetBlockedCards(): void
    {
        $this->blockedCards = [];
    }

    /**
     * Returns Cancelled Cards.
     * Total number of cards for the given search criteria that are cancelled (at cancelled status) blocked
     * by customer
     */
    public function getCancelledCards(): ?int
    {
        if (count($this->cancelledCards) == 0) {
            return null;
        }
        return $this->cancelledCards['value'];
    }

    /**
     * Sets Cancelled Cards.
     * Total number of cards for the given search criteria that are cancelled (at cancelled status) blocked
     * by customer
     *
     * @maps CancelledCards
     */
    public function setCancelledCards(?int $cancelledCards): void
    {
        $this->cancelledCards['value'] = $cancelledCards;
    }

    /**
     * Unsets Cancelled Cards.
     * Total number of cards for the given search criteria that are cancelled (at cancelled status) blocked
     * by customer
     */
    public function unsetCancelledCards(): void
    {
        $this->cancelledCards = [];
    }

    /**
     * Returns Expired Cards.
     * Total number of expired cards for the given search criteria
     */
    public function getExpiredCards(): ?int
    {
        if (count($this->expiredCards) == 0) {
            return null;
        }
        return $this->expiredCards['value'];
    }

    /**
     * Sets Expired Cards.
     * Total number of expired cards for the given search criteria
     *
     * @maps ExpiredCards
     */
    public function setExpiredCards(?int $expiredCards): void
    {
        $this->expiredCards['value'] = $expiredCards;
    }

    /**
     * Unsets Expired Cards.
     * Total number of expired cards for the given search criteria
     */
    public function unsetExpiredCards(): void
    {
        $this->expiredCards = [];
    }

    /**
     * Returns Expiring Cards.
     * Cards that are active and expiring in X days, X should be configurable
     */
    public function getExpiringCards(): ?int
    {
        if (count($this->expiringCards) == 0) {
            return null;
        }
        return $this->expiringCards['value'];
    }

    /**
     * Sets Expiring Cards.
     * Cards that are active and expiring in X days, X should be configurable
     *
     * @maps ExpiringCards
     */
    public function setExpiringCards(?int $expiringCards): void
    {
        $this->expiringCards['value'] = $expiringCards;
    }

    /**
     * Unsets Expiring Cards.
     * Cards that are active and expiring in X days, X should be configurable
     */
    public function unsetExpiringCards(): void
    {
        $this->expiringCards = [];
    }

    /**
     * Returns Fraud Cards.
     * Totalnumber of Cards in Fraud status for the given search criteria.
     */
    public function getFraudCards(): ?int
    {
        if (count($this->fraudCards) == 0) {
            return null;
        }
        return $this->fraudCards['value'];
    }

    /**
     * Sets Fraud Cards.
     * Totalnumber of Cards in Fraud status for the given search criteria.
     *
     * @maps FraudCards
     */
    public function setFraudCards(?int $fraudCards): void
    {
        $this->fraudCards['value'] = $fraudCards;
    }

    /**
     * Unsets Fraud Cards.
     * Totalnumber of Cards in Fraud status for the given search criteria.
     */
    public function unsetFraudCards(): void
    {
        $this->fraudCards = [];
    }

    /**
     * Returns New Cards.
     * Total number of cards in New status for the given search criteria.
     */
    public function getNewCards(): ?int
    {
        if (count($this->newCards) == 0) {
            return null;
        }
        return $this->newCards['value'];
    }

    /**
     * Sets New Cards.
     * Total number of cards in New status for the given search criteria.
     *
     * @maps NewCards
     */
    public function setNewCards(?int $newCards): void
    {
        $this->newCards['value'] = $newCards;
    }

    /**
     * Unsets New Cards.
     * Total number of cards in New status for the given search criteria.
     */
    public function unsetNewCards(): void
    {
        $this->newCards = [];
    }

    /**
     * Returns Renewal Pending Cards.
     * Total number of Renewal Pending cards for the given search criteria
     */
    public function getRenewalPendingCards(): ?int
    {
        if (count($this->renewalPendingCards) == 0) {
            return null;
        }
        return $this->renewalPendingCards['value'];
    }

    /**
     * Sets Renewal Pending Cards.
     * Total number of Renewal Pending cards for the given search criteria
     *
     * @maps RenewalPendingCards
     */
    public function setRenewalPendingCards(?int $renewalPendingCards): void
    {
        $this->renewalPendingCards['value'] = $renewalPendingCards;
    }

    /**
     * Unsets Renewal Pending Cards.
     * Total number of Renewal Pending cards for the given search criteria
     */
    public function unsetRenewalPendingCards(): void
    {
        $this->renewalPendingCards = [];
    }

    /**
     * Returns Replaced Cards.
     * Cards with status Replaced
     */
    public function getReplacedCards(): ?int
    {
        if (count($this->replacedCards) == 0) {
            return null;
        }
        return $this->replacedCards['value'];
    }

    /**
     * Sets Replaced Cards.
     * Cards with status Replaced
     *
     * @maps ReplacedCards
     */
    public function setReplacedCards(?int $replacedCards): void
    {
        $this->replacedCards['value'] = $replacedCards;
    }

    /**
     * Unsets Replaced Cards.
     * Cards with status Replaced
     */
    public function unsetReplacedCards(): void
    {
        $this->replacedCards = [];
    }

    /**
     * Returns Temporary Block by Customer.
     * Total number of cards for the given search criteria that are temporarily blocked by customer
     */
    public function getTemporaryBlockByCustomer(): ?int
    {
        if (count($this->temporaryBlockByCustomer) == 0) {
            return null;
        }
        return $this->temporaryBlockByCustomer['value'];
    }

    /**
     * Sets Temporary Block by Customer.
     * Total number of cards for the given search criteria that are temporarily blocked by customer
     *
     * @maps TemporaryBlockByCustomer
     */
    public function setTemporaryBlockByCustomer(?int $temporaryBlockByCustomer): void
    {
        $this->temporaryBlockByCustomer['value'] = $temporaryBlockByCustomer;
    }

    /**
     * Unsets Temporary Block by Customer.
     * Total number of cards for the given search criteria that are temporarily blocked by customer
     */
    public function unsetTemporaryBlockByCustomer(): void
    {
        $this->temporaryBlockByCustomer = [];
    }

    /**
     * Returns Temporary Block by Shell.
     * Total number of cards for the given search criteria that are temporarily blocked by Shell
     */
    public function getTemporaryBlockByShell(): ?int
    {
        if (count($this->temporaryBlockByShell) == 0) {
            return null;
        }
        return $this->temporaryBlockByShell['value'];
    }

    /**
     * Sets Temporary Block by Shell.
     * Total number of cards for the given search criteria that are temporarily blocked by Shell
     *
     * @maps TemporaryBlockByShell
     */
    public function setTemporaryBlockByShell(?int $temporaryBlockByShell): void
    {
        $this->temporaryBlockByShell['value'] = $temporaryBlockByShell;
    }

    /**
     * Unsets Temporary Block by Shell.
     * Total number of cards for the given search criteria that are temporarily blocked by Shell
     */
    public function unsetTemporaryBlockByShell(): void
    {
        $this->temporaryBlockByShell = [];
    }

    /**
     * Returns Total Cards.
     * Total number of cards for the given search criteria
     */
    public function getTotalCards(): ?int
    {
        if (count($this->totalCards) == 0) {
            return null;
        }
        return $this->totalCards['value'];
    }

    /**
     * Sets Total Cards.
     * Total number of cards for the given search criteria
     *
     * @maps TotalCards
     */
    public function setTotalCards(?int $totalCards): void
    {
        $this->totalCards['value'] = $totalCards;
    }

    /**
     * Unsets Total Cards.
     * Total number of cards for the given search criteria
     */
    public function unsetTotalCards(): void
    {
        $this->totalCards = [];
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
        if (!empty($this->activeCards)) {
            $json['ActiveCards']              = $this->activeCards['value'];
        }
        if (!empty($this->blockedCards)) {
            $json['BlockedCards']             = $this->blockedCards['value'];
        }
        if (!empty($this->cancelledCards)) {
            $json['CancelledCards']           = $this->cancelledCards['value'];
        }
        if (!empty($this->expiredCards)) {
            $json['ExpiredCards']             = $this->expiredCards['value'];
        }
        if (!empty($this->expiringCards)) {
            $json['ExpiringCards']            = $this->expiringCards['value'];
        }
        if (!empty($this->fraudCards)) {
            $json['FraudCards']               = $this->fraudCards['value'];
        }
        if (!empty($this->newCards)) {
            $json['NewCards']                 = $this->newCards['value'];
        }
        if (!empty($this->renewalPendingCards)) {
            $json['RenewalPendingCards']      = $this->renewalPendingCards['value'];
        }
        if (!empty($this->replacedCards)) {
            $json['ReplacedCards']            = $this->replacedCards['value'];
        }
        if (!empty($this->temporaryBlockByCustomer)) {
            $json['TemporaryBlockByCustomer'] = $this->temporaryBlockByCustomer['value'];
        }
        if (!empty($this->temporaryBlockByShell)) {
            $json['TemporaryBlockByShell']    = $this->temporaryBlockByShell['value'];
        }
        if (!empty($this->totalCards)) {
            $json['TotalCards']               = $this->totalCards['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
