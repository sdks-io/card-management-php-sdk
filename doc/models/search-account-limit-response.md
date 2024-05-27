
# Search Account Limit Response

## Structure

`SearchAccountLimitResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?SearchAccountLimitResponseData`](../../doc/models/search-account-limit-response-data.md) | Optional | - | getData(): ?SearchAccountLimitResponseData | setData(?SearchAccountLimitResponseData data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId0",
  "Status": "Status6",
  "Data": {
    "AccountId": 62,
    "AccountNumber": "AccountNumber8",
    "ReferenceProduct": "ReferenceProduct8",
    "RestrictionCondition": "RestrictionCondition4",
    "VelocityLimits": [
      {
        "Type": "Type0",
        "Period": "Period2",
        "Limit": 24.94,
        "Accumulation": 132.24,
        "Balance": 189.6
      },
      {
        "Type": "Type0",
        "Period": "Period2",
        "Limit": 24.94,
        "Accumulation": 132.24,
        "Balance": 189.6
      },
      {
        "Type": "Type0",
        "Period": "Period2",
        "Limit": 24.94,
        "Accumulation": 132.24,
        "Balance": 189.6
      }
    ]
  }
}
```

