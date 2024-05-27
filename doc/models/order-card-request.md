
# Order Card Request

This entity models the data that is sent in the http request body for this operation.

## Structure

`OrderCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardDetails` | [`?(CardDetail[])`](../../doc/models/card-detail.md) | Optional | List of CardOrder entity. The fields in this entity are described below. | getCardDetails(): ?array | setCardDetails(?array cardDetails): void |

## Example (as JSON)

```json
{
  "CardDetails": [
    {
      "PayerId": 232,
      "PayerNumber": "PayerNumber2",
      "AccountId": 36,
      "AccountNumber": "AccountNumber4",
      "ColCoCode": 198,
      "CardDeliveryType": 222,
      "PINAdviceType": 70
    },
    {
      "PayerId": 232,
      "PayerNumber": "PayerNumber2",
      "AccountId": 36,
      "AccountNumber": "AccountNumber4",
      "ColCoCode": 198,
      "CardDeliveryType": 222,
      "PINAdviceType": 70
    }
  ]
}
```

