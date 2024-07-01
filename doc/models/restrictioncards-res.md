
# Restrictioncards Res

## Structure

`RestrictioncardsRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardId` | `?string` | Optional | Unique Card Id<br>Example: 275549 | getCardId(): ?string | setCardId(?string cardId): void |
| `pAN` | `?string` | Optional | Card PAN.<br>Example: 7002051006629890645 | getPAN(): ?string | setPAN(?string pAN): void |
| `usageRestrictionStatus` | `?string` | Optional | Status of the card usage restriction submitted. Based on the response the value will be set as either “Success” or “Failed”. | getUsageRestrictionStatus(): ?string | setUsageRestrictionStatus(?string usageRestrictionStatus): void |
| `usageRestrictionDescription` | `?string` | Optional | Response for the usage restriction in case of an error. This field will have a value only when “UsageRestrictionStatus” is “Failed”. | getUsageRestrictionDescription(): ?string | setUsageRestrictionDescription(?string usageRestrictionDescription): void |
| `dayTimeRestrictionStatus` | `?string` | Optional | Status of the card day/time restriction submitted. Based on the response from Gateway value will be set as either “Success” or “Failed”. | getDayTimeRestrictionStatus(): ?string | setDayTimeRestrictionStatus(?string dayTimeRestrictionStatus): void |
| `dayTimeRestrictionDescription` | `?string` | Optional | Response for the day/time restriction in case of an error. This field will have a value only when “DayTimeRestrictionStatus” is “Failed”. | getDayTimeRestrictionDescription(): ?string | setDayTimeRestrictionDescription(?string dayTimeRestrictionDescription): void |
| `productRestrictionStatus` | `?string` | Optional | Status of the card product restriction submitted. Based on the response  the value will be set  either as “Success” or “Failed”. | getProductRestrictionStatus(): ?string | setProductRestrictionStatus(?string productRestrictionStatus): void |
| `productRestrictionDescription` | `?string` | Optional | Response for the product restriction in case of an error. This field will have a value only when “ProductRestrictionStatus” is “Failed”. | getProductRestrictionDescription(): ?string | setProductRestrictionDescription(?string productRestrictionDescription): void |
| `locationRestrictionStatus` | `?string` | Optional | Card Location restriction submitted, based on response value set as “Success” or “Failed”. | getLocationRestrictionStatus(): ?string | setLocationRestrictionStatus(?string locationRestrictionStatus): void |
| `locationRestrictionStatusDescription` | `?string` | Optional | Response for the location restriction in case of an error. This field will have a value only when “LocationRestrictionStatus” is “Failed”. | getLocationRestrictionStatusDescription(): ?string | setLocationRestrictionStatusDescription(?string locationRestrictionStatusDescription): void |
| `validationErrorCode` | `?string` | Optional | Error code for validation failure. | getValidationErrorCode(): ?string | setValidationErrorCode(?string validationErrorCode): void |
| `validationErrorDescription` | `?string` | Optional | Description of validation failure. | getValidationErrorDescription(): ?string | setValidationErrorDescription(?string validationErrorDescription): void |

## Example (as JSON)

```json
{
  "AccountId": 148,
  "AccountNumber": "AccountNumber0",
  "CardId": "CardId0",
  "PAN": "PAN2",
  "UsageRestrictionStatus": "UsageRestrictionStatus0"
}
```

