
# Card Type Response

## Structure

`CardTypeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerCardTypes` | [`?(CardTypeResponseCustomerCardTypesItems[])`](../../doc/models/card-type-response-customer-card-types-items.md) | Optional | - | getCustomerCardTypes(): ?array | setCustomerCardTypes(?array customerCardTypes): void |
| `error` | [`?CardTypeResponseError`](../../doc/models/card-type-response-error.md) | Optional | - | getError(): ?CardTypeResponseError | setError(?CardTypeResponseError error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "RequestId": "a0a7ceb0-5b32-4ec8-88e1-ad868967e43f",
  "CustomerCardTypes": [
    {
      "CanHavePIN": false,
      "CardTypeId": 2,
      "CardTypeName": "CardTypeName2",
      "ColCoCurrencyCode": "ColCoCurrencyCode4",
      "CustomerCardTypeId": 32
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

