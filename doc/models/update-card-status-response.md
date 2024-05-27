
# Update Card Status Response

## Structure

`UpdateCardStatusResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SubmittedCard[])`](../../doc/models/submitted-card.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `mainReference` | `?int` | Optional | Update status reference number for tracking the execution of the request. <br>Note: Reference will be empty for status 9006 and 9012 i.e., request for all the cards failed. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `orderReplacementReference` | `?int` | Optional | Order replacement reference number for tracking the execution of the order replacement cards request. <br/>Note: Reference will be empty for status 9006 and 9012 i.e., request for all the cards failed or if there were no order replacement requested in the input. | getOrderReplacementReference(): ?int | setOrderReplacementReference(?int orderReplacementReference): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId0",
  "Status": "Status6",
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
    }
  ],
  "MainReference": 164,
  "OrderReplacementReference": 210
}
```

