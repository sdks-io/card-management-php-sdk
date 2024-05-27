
# PIN Delivery Contact

Request entity object for PINDeliveryContact
Mandatory when PINDeliveryAddressType is ‘3’ (New delivery address). Else, ignored.

## Structure

`PINDeliveryContact`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deliveryContactTitle` | `?string` | Optional | Title of the contact person <br /><br>Optional<br>**Constraints**: *Maximum Length*: `10` | getDeliveryContactTitle(): ?string | setDeliveryContactTitle(?string deliveryContactTitle): void |
| `deliveryContactName` | `?string` | Optional | Name of the contact person <br /><br>Mandatory - If PINAdviceType is paper else optional. <br /><br>Max field length: 50  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `50` | getDeliveryContactName(): ?string | setDeliveryContactName(?string deliveryContactName): void |
| `deliveryCompanyName` | `?string` | Optional | Company name <br /><br>Mandatory - If PINAdviceType is paper else optional. <br /><br>Max field length: 50  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `50` | getDeliveryCompanyName(): ?string | setDeliveryCompanyName(?string deliveryCompanyName): void |
| `deliveryAddressLine1` | `?string` | Optional | Address line 1 <br /><br>Mandatory - if PINAdviceType is paper else optional.<br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine1(): ?string | setDeliveryAddressLine1(?string deliveryAddressLine1): void |
| `deliveryAddressLine2` | `?string` | Optional | Address line 2 <br /><br>Optional <br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine2(): ?string | setDeliveryAddressLine2(?string deliveryAddressLine2): void |
| `deliveryAddressLine3` | `?string` | Optional | Address line 3 <br /><br>Optional <br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryAddressLine3(): ?string | setDeliveryAddressLine3(?string deliveryAddressLine3): void |
| `deliveryZipCode` | `?string` | Optional | ZIP code <br /><br>Mandatory - if PINAdviceType is paper else optional. <br /><br>Max field length: 10  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `10` | getDeliveryZipCode(): ?string | setDeliveryZipCode(?string deliveryZipCode): void |
| `deliveryCity` | `?string` | Optional | City  <br /><br>Mandatory - If PINAdviceType is paper else optional. <br /><br>Max field length: 40  <br /><br>Optional<br>**Constraints**: *Maximum Length*: `40` | getDeliveryCity(): ?string | setDeliveryCity(?string deliveryCity): void |
| `deliveryRegionId` | `?int` | Optional | Region Id  <br /><br>Optional | getDeliveryRegionId(): ?int | setDeliveryRegionId(?int deliveryRegionId): void |
| `deliveryRegion` | `?string` | Optional | Region  <br /><br>Optional<br /> | getDeliveryRegion(): ?string | setDeliveryRegion(?string deliveryRegion): void |
| `deliveryCountry` | `?string` | Optional | The ISO code of the country.<br /><br>Mandatory if PINAdviceType is paper else optional. | getDeliveryCountry(): ?string | setDeliveryCountry(?string deliveryCountry): void |
| `phoneNumber` | `?string` | Optional | Phone number for to send SMS of the PIN in case PINAdviceType is SMS.<br /><br>Mandatory if PINAdviceType is SMS else optional.<br /><br>Max field length: 20<br>**Constraints**: *Maximum Length*: `20` | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `emailAddress` | `?string` | Optional | Email address for to send email of the PIN in case PINAdviceType is Email.<br /><br>Mandatory if PINAdviceType is email else optional.<br /><br>Max field length: 90. <br/>Note:Based on the international standard that there can be Max Length 64 before the @ (the 'Local part’) =64(minimum of 1) Max Lenth after the (the domain) = 88 (Minimum of 2)<br>**Constraints**: *Maximum Length*: `90` | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |
| `saveForPINReminder` | `?bool` | Optional | The given address will be used for sending PIN reminders in future when requested.<br /><br>Only allowed for paper delivery<br /><br>Optional | getSaveForPINReminder(): ?bool | setSaveForPINReminder(?bool saveForPINReminder): void |

## Example (as JSON)

```json
{
  "DeliveryContactTitle": "DeliveryContactTitle6",
  "DeliveryContactName": "DeliveryContactName8",
  "DeliveryCompanyName": "DeliveryCompanyName0",
  "DeliveryAddressLine1": "DeliveryAddressLine10",
  "DeliveryAddressLine2": "DeliveryAddressLine22"
}
```

