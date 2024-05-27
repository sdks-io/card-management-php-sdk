
# Delivery Address Update

List of cards for delivery address update. Maximum number of cards that can be provided in the list is 50

## Structure

`DeliveryAddressUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if  PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory.<br><br>Note: -<br>PAN & ExpiryDate parameters will be considered only if CardId & PANID are not provided. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br>Mandatory if PAN is passed, else optional.<br>Format: yyyyMMdd | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `useCustomerDefaultAddress` | `bool` | Required | Whether to use the default delivery address configured at customer (or card group) level as the delivery address for this card.<br>Mandatory<br>Note: If value is false then ‘UpdateCardRenewalAddress’ is mandatory. If value set to ‘True’ then<br>‘UpdateCardRenewalAddress’ may be null/empty. It will be ignored if provided.<br>**Default**: `false` | getUseCustomerDefaultAddress(): bool | setUseCustomerDefaultAddress(bool useCustomerDefaultAddress): void |
| `updateCardRenewalAddress` | [`?UpdateCardRenewalAddress`](../../doc/models/update-card-renewal-address.md) | Optional | Delivery address of card. This address will be used for card reissue and PIN reminders in future.<br>Note: Mandatory when ‘UseCustomerDefaultAddress’ is set to ‘false’. The field is ignored otherwise. | getUpdateCardRenewalAddress(): ?UpdateCardRenewalAddress | setUpdateCardRenewalAddress(?UpdateCardRenewalAddress updateCardRenewalAddress): void |

## Example (as JSON)

```json
{
  "CardId": 123,
  "PAN": "7002051006629889654",
  "CardExpiryDate": "20170930",
  "UseCustomerDefaultAddress": false,
  "UpdateCardRenewalAddress": {
    "ContactName": "ContactName2",
    "ContactTitle": "ContactTitle8",
    "CompanyName": "CompanyName4",
    "AddressLine": "AddressLine8",
    "ZipCode": "ZipCode6",
    "City": "City2",
    "RegionID": 56,
    "CountryID": 186,
    "EmailAddress": "EmailAddress0",
    "PhoneNumber": "PhoneNumber6"
  }
}
```

