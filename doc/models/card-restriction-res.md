
# Card Restriction Res

## Structure

`CardRestrictionRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(RestrictioncardsRes[])`](../../doc/models/restrictioncards-res.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `errors` | [`?ErrorObject`](../../doc/models/error-object.md) | Optional | - | getErrors(): ?ErrorObject | setErrors(?ErrorObject errors): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardId": "CardId8",
      "PAN": "PAN0",
      "UsageRestrictionStatus": "UsageRestrictionStatus8"
    }
  ],
  "Errors": {
    "RequestId": "RequestId4",
    "Status": "Status2",
    "Errors": [
      {
        "Code": "Code4",
        "Title": "Title6",
        "Detail": "Detail6",
        "AdditionalInfo": {
          "key0": "AdditionalInfo0",
          "key1": "AdditionalInfo1",
          "key2": "AdditionalInfo2"
        }
      }
    ]
  }
}
```

