
# PIN Delivery Address

## Structure

`PINDeliveryAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contactForeName` | `?string` | Optional | Fore name of the contact person | getContactForeName(): ?string | setContactForeName(?string contactForeName): void |
| `contactMiddleName` | `?string` | Optional | Middle name of the contact person | getContactMiddleName(): ?string | setContactMiddleName(?string contactMiddleName): void |
| `contactLastName` | `?string` | Optional | Last name of the contact person | getContactLastName(): ?string | setContactLastName(?string contactLastName): void |
| `contactTitle` | `?string` | Optional | Title of the contact person Optional Max field length- 10 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request.<br>**Constraints**: *Maximum Length*: `10` | getContactTitle(): ?string | setContactTitle(?string contactTitle): void |
| `companyName` | `string` | Required | Company name Mandatory if IsNewDeliveryAddress and OrderReplacement are passed. True, Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request. | getCompanyName(): string | setCompanyName(string companyName): void |
| `addressId` | `int` | Required | Address Id in cards platform. | getAddressId(): int | setAddressId(int addressId): void |
| `addressLine1` | `string` | Required | Address line 1 Mandatory if IsNewDeliveryAddress and OrderReplacement are passed True. Max field length- 40 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request.<br>**Constraints**: *Minimum Length*: `1` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | Address line 2 Optional Max field length- 40 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request. | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | Address line Optional Max field length- 40 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request. | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `zipCode` | `string` | Required | ZIP code Mandatory if IsNewDeliveryAddress and OrderReplacement are passed. True, Max field length- 10 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request.<br>**Constraints**: *Maximum Length*: `10` | getZipCode(): string | setZipCode(string zipCode): void |
| `city` | `?string` | Optional | City Max field length- 40 Note- If the Shell Card Platform configuration is set to clear the personal details captured on card orders, this value will be cleared from the record after processing the request.<br>**Constraints**: *Maximum Length*: `40` | getCity(): ?string | setCity(?string city): void |
| `regionId` | `?int` | Optional | Region Id | getRegionId(): ?int | setRegionId(?int regionId): void |
| `region` | `?string` | Optional | Region Optional When region is passed, Shell Card Platform will look up for the region id for the given region.  If the option to clear personal details is set in the Shell Card Platform, then this value will be cleared from the record after processing the request . | getRegion(): ?string | setRegion(?string region): void |
| `countryId` | `int` | Required | Country Id in cards platform. | getCountryId(): int | setCountryId(int countryId): void |
| `countryISOCode` | `string` | Required | The ISO code of the country. Mandatory if IsNewDeliveryAddress and OrderReplacement are passed. If the option to clear personal details is set in the Shell Card Platform, then this value will be cleared from the record after processing the request . | getCountryISOCode(): string | setCountryISOCode(string countryISOCode): void |
| `country` | `string` | Required | Country name. | getCountry(): string | setCountry(string country): void |

## Example (as JSON)

```json
{
  "ContactForeName": "ROBERT",
  "ContactMiddleName": "M",
  "ContactLastName": "Langdon",
  "ContactTitle": "Mr.",
  "CompanyName": "PARKLEY Philippines",
  "AddressId": 1768,
  "AddressLine1": "No 345, 1st cross,",
  "AddressLine2": "10th avenue",
  "AddressLine3": "makati city",
  "ZipCode": "1630",
  "City": "manila",
  "Region": "EU",
  "CountryId": 1,
  "CountryISOCode": "PH",
  "Country": "Philippines"
}
```

