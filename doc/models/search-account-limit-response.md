
# Search Account Limit Response

## Structure

`SearchAccountLimitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |
| `accountId` | `?int` | Optional | Account ID of the customer. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number<br>Example: GB99215176 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `referenceProduct` | `?string` | Optional | 3 digit Shell global fuel product code, if already set up.<br>Example: 021 | getReferenceProduct(): ?string | setReferenceProduct(?string referenceProduct): void |
| `restrictionCondition` | `?string` | Optional | The restriction condition code.<br>Example: DECLINE_ALERT | getRestrictionCondition(): ?string | setRestrictionCondition(?string restrictionCondition): void |
| `velocityLimits` | [`?(AccountVelocityLimit[])`](../../doc/models/account-velocity-limit.md) | Optional | - | getVelocityLimits(): ?array | setVelocityLimits(?array velocityLimits): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "AccountId": 114,
  "AccountNumber": "AccountNumber2",
  "ReferenceProduct": "ReferenceProduct2",
  "RestrictionCondition": "RestrictionCondition0"
}
```

