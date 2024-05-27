
# Cancel Card Response

## Structure

`CancelCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Cancel card reference number for tracking the execution of the request. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `orderReplacementReference` | `?int` | Optional | Order replacement reference number for tracking the execution of the order replacement cards request. | getOrderReplacementReference(): ?int | setOrderReplacementReference(?int orderReplacementReference): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SubmittedCard[])`](../../doc/models/submitted-card.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "MainReference": 166,
  "OrderReplacementReference": 120,
  "Status": "Status8",
  "Data": [
    {
      "ReplacementCardReference": 84,
      "UpdateCardReference": 178,
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardExpiryDate": "CardExpiryDate6"
    },
    {
      "ReplacementCardReference": 84,
      "UpdateCardReference": 178,
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardExpiryDate": "CardExpiryDate6"
    },
    {
      "ReplacementCardReference": 84,
      "UpdateCardReference": 178,
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardExpiryDate": "CardExpiryDate6"
    }
  ]
}
```

