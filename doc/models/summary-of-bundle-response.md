
# Summary of Bundle Response

## Structure

`SummaryOfBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SummaryOfBundleResponseDataItems[])`](../../doc/models/summary-of-bundle-response-data-items.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "Status": "Status8",
  "Data": [
    {
      "PayerId": 2,
      "PayerNumber": "PayerNumber6",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CountOfCardsNotInBundle": 122
    }
  ]
}
```

