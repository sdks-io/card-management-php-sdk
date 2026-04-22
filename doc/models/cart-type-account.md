
# Cart Type Account

## Structure

`CartTypeAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the customer. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `isDefault` | `?bool` | Optional | Whether card type is default or not. | getIsDefault(): ?bool | setIsDefault(?bool isDefault): void |
| `customerCardTypeId` | `?int` | Optional | Customer Card Type Id in Cards Platform. | getCustomerCardTypeId(): ?int | setCustomerCardTypeId(?int customerCardTypeId): void |
| `isVisibleToCustomers` | `?bool` | Optional | True/False – Whether the card type can be used for card ordering. <br><br> Note - IsVisibleToCustomers will be set as ‘false’ when the card type is not active or. configured in MS to be not visible. | getIsVisibleToCustomers(): ?bool | setIsVisibleToCustomers(?bool isVisibleToCustomers): void |
| `embossAccountName` | `?string` | Optional | Default Name to be embossed on the card. | getEmbossAccountName(): ?string | setEmbossAccountName(?string embossAccountName): void |
| `defaultPurchaseCategoryId` | `?int` | Optional | Default Purchase category of the card type. | getDefaultPurchaseCategoryId(): ?int | setDefaultPurchaseCategoryId(?int defaultPurchaseCategoryId): void |
| `usageRestrictions` | [`?CardUsageRestrictions`](../../doc/models/card-usage-restrictions.md) | Optional | - | getUsageRestrictions(): ?CardUsageRestrictions | setUsageRestrictions(?CardUsageRestrictions usageRestrictions): void |
| `dayTimeRestrictions` | [`?CardDayTimeRestrictions`](../../doc/models/card-day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?CardDayTimeRestrictions | setDayTimeRestrictions(?CardDayTimeRestrictions dayTimeRestrictions): void |

## Example (as JSON)

```json
{
  "AccountId": 1234,
  "AccountNumber": "GB000000123",
  "IsDefault": true,
  "CustomerCardTypeId": 1,
  "IsVisibleToCustomers": true,
  "EmbossAccountName": "abcd1234",
  "DefaultPurchaseCategoryId": 34
}
```

