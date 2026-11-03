
# Address

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressId` | `?int` | Optional | Address Id in cards platform. | getAddressId(): ?int | setAddressId(?int addressId): void |
| `addressLine1` | `?string` | Optional | Address line1 | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Address line2 | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | AddressLine3 | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `zipCode` | `?string` | Optional | ZipCode | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `city` | `?string` | Optional | City | getCity(): ?string | setCity(?string city): void |
| `regionId` | `?int` | Optional | Region Id of the address. | getRegionId(): ?int | setRegionId(?int regionId): void |
| `countryISOCode` | `?string` | Optional | Country ISO code of the address | getCountryISOCode(): ?string | setCountryISOCode(?string countryISOCode): void |
| `country` | `?string` | Optional | Country for the address | getCountry(): ?string | setCountry(?string country): void |
| `telephone` | `?string` | Optional | Telephone number of the address contact | getTelephone(): ?string | setTelephone(?string telephone): void |
| `emailAddress` | `?string` | Optional | Email address of the address contact | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `fax` | `?string` | Optional | Fax number of the address contact | getFax(): ?string | setFax(?string fax): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AddressBuilder;

$address = AddressBuilder::init()
    ->addressId(1)
    ->addressLine1('test street')
    ->addressLine2('Address line2')
    ->addressLine3('AddressLine3')
    ->zipCode('667 78')
    ->city('LUMPUR')
    ->regionId(1234)
    ->countryISOCode('CZ')
    ->country('Germany')
    ->telephone('3245872364823')
    ->emailAddress('testmail@gmail.com')
    ->fax('3245872364823')
    ->build();
```

