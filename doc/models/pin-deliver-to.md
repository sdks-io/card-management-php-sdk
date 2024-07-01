
# PIN Deliver To

## Structure

`PINDeliverTo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contactName` | `?string` | Optional | Contact Name<br>Max Length: 50 | getContactName(): ?string | setContactName(?string contactName): void |
| `contactTitle` | `?string` | Optional | Contact Title<br>Max Length: 50 | getContactTitle(): ?string | setContactTitle(?string contactTitle): void |
| `companyName` | `string` | Required | Company Name for PIN delivery.<br>Max Length: 50 | getCompanyName(): string | setCompanyName(string companyName): void |
| `addressLine` | `string` | Required | Address Lines<br>Max Length: 1024 | getAddressLine(): string | setAddressLine(string addressLine): void |
| `zipCode` | `?string` | Required | Zip Code<br>Max Length: 10 | getZipCode(): ?string | setZipCode(?string zipCode): void |
| `city` | `string` | Required | City<br>Max Length: 40 | getCity(): string | setCity(string city): void |
| `regionID` | `?int` | Optional | Region | getRegionID(): ?int | setRegionID(?int regionID): void |
| `countryID` | `?int` | Optional | Country | getCountryID(): ?int | setCountryID(?int countryID): void |
| `phoneNumber` | `?string` | Optional | Cardholder phone number for PIN delivery. | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `emailAddress` | `?string` | Optional | Cardholder email address for PIN delivery<br>Max Length : 90<br>Example: xxxxxx@example.com <br/>Note:Based on the international standard that there can be Max Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88 (Minimum of 2) | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `savePINReminder` | `?bool` | Optional | Save PIN Reminder<br>If SavePINReminder is true, the contact address will be saved database for PIN reminder.<br><br><br/>Only allowed for PIN Advice paper delivery. | getSavePINReminder(): ?bool | setSavePINReminder(?bool savePINReminder): void |

## Example (as JSON)

```json
{
  "ContactName": "ContactName0",
  "ContactTitle": "ContactTitle6",
  "CompanyName": "CompanyName2",
  "AddressLine": "AddressLine6",
  "ZipCode": "ZipCode4",
  "City": "City0",
  "RegionID": 6,
  "CountryID": 136,
  "PhoneNumber": "PhoneNumber4"
}
```

