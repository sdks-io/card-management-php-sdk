<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class CardGroupRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $colCoId = [];

    /**
     * @var array
     */
    private $colCoCode = [];

    /**
     * @var array
     */
    private $payerId = [];

    /**
     * @var array
     */
    private $payerNumber = [];

    /**
     * @var Accounts[]|null
     */
    private $account;

    /**
     * @var array
     */
    private $cardGroupName = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * Returns Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     */
    public function getColCoId(): ?int
    {
        if (count($this->colCoId) == 0) {
            return null;
        }
        return $this->colCoId['value'];
    }

    /**
     * Sets Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId['value'] = $colCoId;
    }

    /**
     * Unsets Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     */
    public function unsetColCoId(): void
    {
        $this->colCoId = [];
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     */
    public function getColCoCode(): ?int
    {
        if (count($this->colCoCode) == 0) {
            return null;
        }
        return $this->colCoCode['value'];
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
     * 86 for Philippines
     *
     * 5 for UK
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode['value'] = $colCoCode;
    }

    /**
     * Unsets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     */
    public function unsetColCoCode(): void
    {
        $this->colCoCode = [];
    }

    /**
     * Returns Payer Id.
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
     * This input is a search criterion.
     * Example: 123456
     */
    public function getPayerId(): ?int
    {
        if (count($this->payerId) == 0) {
            return null;
        }
        return $this->payerId['value'];
    }

    /**
     * Sets Payer Id.
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
     * This input is a search criterion.
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
     * This input is a search criterion.
     * Example: 123456
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * PayerNumber of the customer.
     *
     * Optional if PayerId is passed, else Mandatory.
     *
     * This input is a search criterion.
     *
     * Example: GB00123456
     */
    public function getPayerNumber(): ?string
    {
        if (count($this->payerNumber) == 0) {
            return null;
        }
        return $this->payerNumber['value'];
    }

    /**
     * Sets Payer Number.
     * PayerNumber of the customer.
     *
     * Optional if PayerId is passed, else Mandatory.
     *
     * This input is a search criterion.
     *
     * Example: GB00123456
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * PayerNumber of the customer.
     *
     * Optional if PayerId is passed, else Mandatory.
     *
     * This input is a search criterion.
     *
     * Example: GB00123456
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
    }

    /**
     * Returns Account.
     *
     * @return Accounts[]|null
     */
    public function getAccount(): ?array
    {
        return $this->account;
    }

    /**
     * Sets Account.
     *
     * @maps Account
     *
     * @param Accounts[]|null $account
     */
    public function setAccount(?array $account): void
    {
        $this->account = $account;
    }

    /**
     * Returns Card Group Name.
     * Card Group Name
     *
     * Optional.
     *
     * Minimum of 2 characters should be provided else not considered.
     *
     * CardGroups those have the entered value at any part
     */
    public function getCardGroupName(): ?string
    {
        if (count($this->cardGroupName) == 0) {
            return null;
        }
        return $this->cardGroupName['value'];
    }

    /**
     * Sets Card Group Name.
     * Card Group Name
     *
     * Optional.
     *
     * Minimum of 2 characters should be provided else not considered.
     *
     * CardGroups those have the entered value at any part
     *
     * @maps CardGroupName
     */
    public function setCardGroupName(?string $cardGroupName): void
    {
        $this->cardGroupName['value'] = $cardGroupName;
    }

    /**
     * Unsets Card Group Name.
     * Card Group Name
     *
     * Optional.
     *
     * Minimum of 2 characters should be provided else not considered.
     *
     * CardGroups those have the entered value at any part
     */
    public function unsetCardGroupName(): void
    {
        $this->cardGroupName = [];
    }

    /**
     * Returns Status.
     * Card Group Status
     * Mandatory
     * Allowed values:
     * •    ALL
     * •    TERMINATED
     * •    ACTIVE
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Card Group Status
     * Mandatory
     * Allowed values:
     * •    ALL
     * •    TERMINATED
     * •    ACTIVE
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Card Group Status
     * Mandatory
     * Allowed values:
     * •    ALL
     * •    TERMINATED
     * •    ACTIVE
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Sets Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     *
     * @maps CurrentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Returns Page Size.
     * Page Size – Number of records to show on a page.
     * Optional
     * Default value 50.
     * Return all rows if -1 is supplied as page size.
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Page Size – Number of records to show on a page.
     * Optional
     * Default value 50.
     * Return all rows if -1 is supplied as page size.
     *
     * @maps PageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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
        if (!empty($this->colCoId)) {
            $json['ColCoId']       = $this->colCoId['value'];
        }
        if (!empty($this->colCoCode)) {
            $json['ColCoCode']     = $this->colCoCode['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']       = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']   = $this->payerNumber['value'];
        }
        if (isset($this->account)) {
            $json['Account']       = $this->account;
        }
        if (!empty($this->cardGroupName)) {
            $json['CardGroupName'] = $this->cardGroupName['value'];
        }
        if (!empty($this->status)) {
            $json['Status']        = $this->status['value'];
        }
        if (isset($this->currentPage)) {
            $json['CurrentPage']   = $this->currentPage;
        }
        if (isset($this->pageSize)) {
            $json['PageSize']      = $this->pageSize;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
