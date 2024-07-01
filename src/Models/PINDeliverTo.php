<?php

declare(strict_types=1);

/*
 * ShellCardManagementAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellCardManagementAPIsLib\Models;

use stdClass;

class PINDeliverTo implements \JsonSerializable
{
    /**
     * @var array
     */
    private $contactName = [];

    /**
     * @var array
     */
    private $contactTitle = [];

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $addressLine;

    /**
     * @var string|null
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var array
     */
    private $regionID = [];

    /**
     * @var array
     */
    private $countryID = [];

    /**
     * @var array
     */
    private $phoneNumber = [];

    /**
     * @var array
     */
    private $emailAddress = [];

    /**
     * @var bool|null
     */
    private $savePINReminder;

    /**
     * @param string $companyName
     * @param string $addressLine
     * @param string $city
     */
    public function __construct(string $companyName, string $addressLine, string $city)
    {
        $this->companyName = $companyName;
        $this->addressLine = $addressLine;
        $this->city = $city;
    }

    /**
     * Returns Contact Name.
     * Contact Name
     * Max Length: 50
     */
    public function getContactName(): ?string
    {
        if (count($this->contactName) == 0) {
            return null;
        }
        return $this->contactName['value'];
    }

    /**
     * Sets Contact Name.
     * Contact Name
     * Max Length: 50
     *
     * @maps ContactName
     */
    public function setContactName(?string $contactName): void
    {
        $this->contactName['value'] = $contactName;
    }

    /**
     * Unsets Contact Name.
     * Contact Name
     * Max Length: 50
     */
    public function unsetContactName(): void
    {
        $this->contactName = [];
    }

    /**
     * Returns Contact Title.
     * Contact Title
     * Max Length: 50
     */
    public function getContactTitle(): ?string
    {
        if (count($this->contactTitle) == 0) {
            return null;
        }
        return $this->contactTitle['value'];
    }

    /**
     * Sets Contact Title.
     * Contact Title
     * Max Length: 50
     *
     * @maps ContactTitle
     */
    public function setContactTitle(?string $contactTitle): void
    {
        $this->contactTitle['value'] = $contactTitle;
    }

    /**
     * Unsets Contact Title.
     * Contact Title
     * Max Length: 50
     */
    public function unsetContactTitle(): void
    {
        $this->contactTitle = [];
    }

    /**
     * Returns Company Name.
     * Company Name for PIN delivery.
     * Max Length: 50
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     * Company Name for PIN delivery.
     * Max Length: 50
     *
     * @required
     * @maps CompanyName
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns Address Line.
     * Address Lines
     * Max Length: 1024
     */
    public function getAddressLine(): string
    {
        return $this->addressLine;
    }

    /**
     * Sets Address Line.
     * Address Lines
     * Max Length: 1024
     *
     * @required
     * @maps AddressLine
     */
    public function setAddressLine(string $addressLine): void
    {
        $this->addressLine = $addressLine;
    }

    /**
     * Returns Zip Code.
     * Zip Code
     * Max Length: 10
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     * Zip Code
     * Max Length: 10
     *
     * @maps ZipCode
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Returns City.
     * City
     * Max Length: 40
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City
     * Max Length: 40
     *
     * @required
     * @maps City
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Region ID.
     * Region
     */
    public function getRegionID(): ?int
    {
        if (count($this->regionID) == 0) {
            return null;
        }
        return $this->regionID['value'];
    }

    /**
     * Sets Region ID.
     * Region
     *
     * @maps RegionID
     */
    public function setRegionID(?int $regionID): void
    {
        $this->regionID['value'] = $regionID;
    }

    /**
     * Unsets Region ID.
     * Region
     */
    public function unsetRegionID(): void
    {
        $this->regionID = [];
    }

    /**
     * Returns Country ID.
     * Country
     */
    public function getCountryID(): ?int
    {
        if (count($this->countryID) == 0) {
            return null;
        }
        return $this->countryID['value'];
    }

    /**
     * Sets Country ID.
     * Country
     *
     * @maps CountryID
     */
    public function setCountryID(?int $countryID): void
    {
        $this->countryID['value'] = $countryID;
    }

    /**
     * Unsets Country ID.
     * Country
     */
    public function unsetCountryID(): void
    {
        $this->countryID = [];
    }

    /**
     * Returns Phone Number.
     * Cardholder phone number for PIN delivery.
     */
    public function getPhoneNumber(): ?string
    {
        if (count($this->phoneNumber) == 0) {
            return null;
        }
        return $this->phoneNumber['value'];
    }

    /**
     * Sets Phone Number.
     * Cardholder phone number for PIN delivery.
     *
     * @maps PhoneNumber
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber['value'] = $phoneNumber;
    }

    /**
     * Unsets Phone Number.
     * Cardholder phone number for PIN delivery.
     */
    public function unsetPhoneNumber(): void
    {
        $this->phoneNumber = [];
    }

    /**
     * Returns Email Address.
     * Cardholder email address for PIN delivery
     * Max Length : 90
     * Example: xxxxxx@example.com <br/>Note:Based on the international standard that there can be Max
     * Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88
     * (Minimum of 2)
     */
    public function getEmailAddress(): ?string
    {
        if (count($this->emailAddress) == 0) {
            return null;
        }
        return $this->emailAddress['value'];
    }

    /**
     * Sets Email Address.
     * Cardholder email address for PIN delivery
     * Max Length : 90
     * Example: xxxxxx@example.com <br/>Note:Based on the international standard that there can be Max
     * Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88
     * (Minimum of 2)
     *
     * @maps EmailAddress
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress['value'] = $emailAddress;
    }

    /**
     * Unsets Email Address.
     * Cardholder email address for PIN delivery
     * Max Length : 90
     * Example: xxxxxx@example.com <br/>Note:Based on the international standard that there can be Max
     * Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88
     * (Minimum of 2)
     */
    public function unsetEmailAddress(): void
    {
        $this->emailAddress = [];
    }

    /**
     * Returns Save PIN Reminder.
     * Save PIN Reminder
     * If SavePINReminder is true, the contact address will be saved database for PIN reminder.
     *
     * <br/>Only allowed for PIN Advice paper delivery.
     */
    public function getSavePINReminder(): ?bool
    {
        return $this->savePINReminder;
    }

    /**
     * Sets Save PIN Reminder.
     * Save PIN Reminder
     * If SavePINReminder is true, the contact address will be saved database for PIN reminder.
     *
     * <br/>Only allowed for PIN Advice paper delivery.
     *
     * @maps SavePINReminder
     */
    public function setSavePINReminder(?bool $savePINReminder): void
    {
        $this->savePINReminder = $savePINReminder;
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
        if (!empty($this->contactName)) {
            $json['ContactName']     = $this->contactName['value'];
        }
        if (!empty($this->contactTitle)) {
            $json['ContactTitle']    = $this->contactTitle['value'];
        }
        $json['CompanyName']         = $this->companyName;
        $json['AddressLine']         = $this->addressLine;
        $json['ZipCode']             = $this->zipCode;
        $json['City']                = $this->city;
        if (!empty($this->regionID)) {
            $json['RegionID']        = $this->regionID['value'];
        }
        if (!empty($this->countryID)) {
            $json['CountryID']       = $this->countryID['value'];
        }
        if (!empty($this->phoneNumber)) {
            $json['PhoneNumber']     = $this->phoneNumber['value'];
        }
        if (!empty($this->emailAddress)) {
            $json['EmailAddress']    = $this->emailAddress['value'];
        }
        if (isset($this->savePINReminder)) {
            $json['SavePINReminder'] = $this->savePINReminder;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
