
# Card Summary Response

## Structure

`CardSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SummaryResponse[])`](../../doc/models/summary-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status0",
  "Data": [
    {
      "ActiveCards": 252,
      "BlockedCards": 156,
      "CancelledCards": 102,
      "ExpiredCards": 156,
      "ExpiringCards": 122
    },
    {
      "ActiveCards": 252,
      "BlockedCards": 156,
      "CancelledCards": 102,
      "ExpiredCards": 156,
      "ExpiringCards": 122
    },
    {
      "ActiveCards": 252,
      "BlockedCards": 156,
      "CancelledCards": 102,
      "ExpiredCards": 156,
      "ExpiringCards": 122
    }
  ]
}
```

