
# Restriction Card Response

## Structure

`RestrictionCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainReference` | `?int` | Optional | Main reference number for tracking.<br>Example: 123455 | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | API Response Status | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(RestrictionCardResponseDataItems[])`](../../doc/models/restriction-card-response-data-items.md) | Optional | List of card restriction requests validated and submitted successfully for processing. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "MainReference": 104,
  "RequestId": "RequestId0",
  "Status": "Status6",
  "Data": [
    {
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardId": 224,
      "DayTimeRestrictionDescription": "DayTimeRestrictionDescription8",
      "DayTimeRestrictionStatus": "DayTimeRestrictionStatus8"
    },
    {
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "CardId": 224,
      "DayTimeRestrictionDescription": "DayTimeRestrictionDescription8",
      "DayTimeRestrictionStatus": "DayTimeRestrictionStatus8"
    }
  ]
}
```

