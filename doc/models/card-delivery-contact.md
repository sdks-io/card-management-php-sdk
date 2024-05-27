
# Card Delivery Contact

Request entity object for CardDeliveryContact
Mandatory when CardDeliveryType is 2 else ignored.

## Structure

`CardDeliveryContact`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deliveryContactTitle` | `?string` | Optional | Title of the contact person <br /><br>Optional<br>Max field length: 10<br>**Constraints**: *Maximum Length*: `10` | getDeliveryContactTitle(): ?string | setDeliveryContactTitle(?string deliveryContactTitle): void |
| `deliveryContactName` | `?string` | Required | Name of the contact person <br /><br>Mandatory  <br /><br>Max field length: 50<br>**Constraints**: *Maximum Length*: `50` | getDeliveryContactName(): ?string | setDeliveryContactName(?string deliveryContactName): void |
| `deliveryCompanyName` | `?string` | Required | Company name <br /><br>Mandatory  <br /><br>Max field length: 50<br>**Constraints**: *Maximum Length*: `50` | getDeliveryCompanyName(): ?string | setDeliveryCompanyName(?string deliveryCompanyName): void |
| `deliveryAddressLine1` | `?string` | Required | Address line 1 <br /><br>Mandatory<br /><br>Max field length: 40<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine1(): ?string | setDeliveryAddressLine1(?string deliveryAddressLine1): void |
| `deliveryAddressLine2` | `?string` | Optional | Address line 2 <br /><br>Optional <br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine2(): ?string | setDeliveryAddressLine2(?string deliveryAddressLine2): void |
| `deliveryAddressLine3` | `?string` | Optional | Address line 3 <br /><br>Optional <br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine3(): ?string | setDeliveryAddressLine3(?string deliveryAddressLine3): void |
| `deliveryZipCode` | `?string` | Required | ZIP code <br /><br>Mandatory  <br /><br>Max field length: 10  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `10` | getDeliveryZipCode(): ?string | setDeliveryZipCode(?string deliveryZipCode): void |
| `deliveryCity` | `?string` | Required | City  <br /><br>Mandatory  <br /><br>Max field length: 40<br>**Constraints**: *Maximum Length*: `40` | getDeliveryCity(): ?string | setDeliveryCity(?string deliveryCity): void |
| `deliveryRegionId` | `?int` | Optional | Region Id  <br /><br>Optional | getDeliveryRegionId(): ?int | setDeliveryRegionId(?int deliveryRegionId): void |
| `deliveryRegion` | `?string` | Optional | Region  <br /><br>Optional<br /><br>When region is passed | getDeliveryRegion(): ?string | setDeliveryRegion(?string deliveryRegion): void |
| `deliveryCountry` | `?string` | Required | The ISO code of the country.<br /> | getDeliveryCountry(): ?string | setDeliveryCountry(?string deliveryCountry): void |
| `phoneNumber` | `?string` | Optional | Phone number for courier delivery.<br /><br>Optional.<br /><br>Max field length: 20<br>**Constraints**: *Maximum Length*: `20` | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `emailAddress` | `?string` | Optional | Email address for courier delivery.<br /><br>Optional.<br /><br>Max field length: 90 <br/>Note:Based on the international standard that there can be Max Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88 (Minimum of 2)<br>**Constraints**: *Maximum Length*: `90` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `saveForCardReissue` | `?bool` | Optional | If this is specified, the contact address will be saved in cards platform for card reissue processing.<br /><br>Optional | getSaveForCardReissue(): ?bool | setSaveForCardReissue(?bool saveForCardReissue): void |

## Example (as JSON)

```json
{
  "DeliveryContactTitle": "DeliveryContactTitle0",
  "DeliveryContactName": "DeliveryContactName6",
  "DeliveryCompanyName": "DeliveryCompanyName4",
  "DeliveryAddressLine1": "DeliveryAddressLine14",
  "DeliveryAddressLine2": "DeliveryAddressLine26",
  "DeliveryAddressLine3": "DeliveryAddressLine38",
  "DeliveryZipCode": "DeliveryZipCode6",
  "DeliveryCity": "DeliveryCity8",
  "DeliveryRegionId": 216,
  "DeliveryRegion": "DeliveryRegion2",
  "DeliveryCountry": "DeliveryCountry6"
}
```

