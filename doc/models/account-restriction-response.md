
# Account Restriction Response

## Structure

`AccountRestrictionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |
| `accountId` | `?int` | Optional | Account Id on which restriction is applied.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number on which restriction is applied.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `usageRestrictionStatus` | `?string` | Optional | Status of the card usage restriction submitted to Gateway. Based on the response from Gateway value will be set as either “Success” or “Failed”. | getUsageRestrictionStatus(): ?string | setUsageRestrictionStatus(?string usageRestrictionStatus): void |
| `usageRestrictionDescription` | `?string` | Optional | Response for the usage restriction in case of an error. This field will have a value only when “UsageRestrictionStatus” is “Failed”. | getUsageRestrictionDescription(): ?string | setUsageRestrictionDescription(?string usageRestrictionDescription): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "AccountId": 130,
  "AccountNumber": "AccountNumber8",
  "UsageRestrictionStatus": "UsageRestrictionStatus8",
  "UsageRestrictionDescription": "UsageRestrictionDescription2"
}
```

