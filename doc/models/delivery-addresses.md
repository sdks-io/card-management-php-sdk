
# Delivery Addresses

## Structure

`DeliveryAddresses`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressId` | `?int` | Optional | Address Id | getAddressId(): ?int | setAddressId(?int addressId): void |
| `addressLine1` | `?string` | Optional | AddressLine1 | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | AddressLine2 | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | AddressLine3 | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `city` | `?string` | Optional | City | getCity(): ?string | setCity(?string city): void |
| `companyName` | `?string` | Optional | Account Name | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `contactForeName` | `?string` | Optional | Contact fore name of the delivery address. | getContactForeName(): ?string | setContactForeName(?string contactForeName): void |
| `contactLastName` | `?string` | Optional | Contact last name of the delivery address. | getContactLastName(): ?string | setContactLastName(?string contactLastName): void |
| `contactMiddleName` | `?string` | Optional | Contact middle name of the delivery address. | getContactMiddleName(): ?string | setContactMiddleName(?string contactMiddleName): void |
| `contactTitle` | `?string` | Optional | ContactTitle | getContactTitle(): ?string | setContactTitle(?string contactTitle): void |
| `country` | `?string` | Optional | Country | getCountry(): ?string | setCountry(?string country): void |
| `countryId` | `?int` | Optional | Country Id | getCountryId(): ?int | setCountryId(?int countryId): void |
| `countryISOCode` | `?string` | Optional | Country ISO code | getCountryISOCode(): ?string | setCountryISOCode(?string countryISOCode): void |
| `fax` | `?string` | Optional | Fax number of the address contact. | getFax(): ?string | setFax(?string fax): void |
| `region` | `?string` | Optional | Region of the Card Delivery address | getRegion(): ?string | setRegion(?string region): void |
| `regionId` | `?int` | Optional | Region Id of the address. | getRegionId(): ?int | setRegionId(?int regionId): void |
| `telephone` | `?string` | Optional | Telephone number of the address contact | getTelephone(): ?string | setTelephone(?string telephone): void |
| `zipCode` | `?string` | Optional | Delivery Zip code | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `addressType` | `?int` | Optional | Delivery address type.<br>Possible Values:<br>1 – Card and PIN delivery address<br>2 – Card delivery address<br>3 – PIN delivery address | getAddressType(): ?int | setAddressType(?int addressType): void |

## Example (as JSON)

```json
{
  "AddressId": 1,
  "AddressLine1": "AddressLine1",
  "AddressLine2": "AddressLine2",
  "AddressLine3": "AddressLine3",
  "City": "germany",
  "CompanyName": "5.11.3 DE",
  "ContactForeName": "5.11.13 DE",
  "ContactLastName": "SAM",
  "ContactMiddleName": "SAM",
  "ContactTitle": "Mr",
  "Country": "Germany",
  "CountryId": 9,
  "CountryISOCode": "DE",
  "Fax": "657875",
  "Region": "Germany",
  "RegionId": 133,
  "Telephone": "78787786868",
  "ZipCode": "E14 5HQ",
  "AddressType": 1
}
```

