
# Restriction Card Response Data Items

## Structure

`RestrictionCardResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the customer. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardId` | `?int` | Optional | Unique Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `dayTimeRestrictionDescription` | `?string` | Optional | This field will have a value only when “DayTimeRestrictionStatus” is “Failed”. | getDayTimeRestrictionDescription(): ?string | setDayTimeRestrictionDescription(?string dayTimeRestrictionDescription): void |
| `dayTimeRestrictionStatus` | `?string` | Optional | Status of the card day/time restriction submitted to API. Based on the response from API value will be set as either “Success” or “Failed”. | getDayTimeRestrictionStatus(): ?string | setDayTimeRestrictionStatus(?string dayTimeRestrictionStatus): void |
| `locationRestrictionDescription` | `?string` | Optional | This field will have a value only when “LocationRestrictionStatus” is “Failed”. | getLocationRestrictionDescription(): ?string | setLocationRestrictionDescription(?string locationRestrictionDescription): void |
| `locationRestrictionStatus` | `?string` | Optional | Card Location restriction submitted to gateway based on gateway response value set as “Success” or “Failed”. | getLocationRestrictionStatus(): ?string | setLocationRestrictionStatus(?string locationRestrictionStatus): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `productRestrictionDescription` | `?string` | Optional | This field will have a value only when “ProductRestrictionStatus” is “Failed”. | getProductRestrictionDescription(): ?string | setProductRestrictionDescription(?string productRestrictionDescription): void |
| `productRestrictionStatus` | `?string` | Optional | Status of the card product restriction submitted | getProductRestrictionStatus(): ?string | setProductRestrictionStatus(?string productRestrictionStatus): void |
| `usageRestrictionDescription` | `?string` | Optional | This field will have a value only when “UsageRestrictionStatus” is “Failed”. | getUsageRestrictionDescription(): ?string | setUsageRestrictionDescription(?string usageRestrictionDescription): void |
| `usageRestrictionStatus` | `?string` | Optional | Status of the card usage restriction submitted | getUsageRestrictionStatus(): ?string | setUsageRestrictionStatus(?string usageRestrictionStatus): void |
| `validationErrorCode` | `?string` | Optional | Error code for validation failure.<br>Example error codes:<br>0007, 9007, 7000, 7001. | getValidationErrorCode(): ?string | setValidationErrorCode(?string validationErrorCode): void |
| `validationErrorDescription` | `?string` | Optional | Description of validation failure. | getValidationErrorDescription(): ?string | setValidationErrorDescription(?string validationErrorDescription): void |

## Example (as JSON)

```json
{
  "AccountId": 182,
  "AccountNumber": "AccountNumber8",
  "CardId": 88,
  "DayTimeRestrictionDescription": "DayTimeRestrictionDescription8",
  "DayTimeRestrictionStatus": "DayTimeRestrictionStatus8"
}
```

