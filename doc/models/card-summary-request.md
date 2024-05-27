
# Card Summary Request

## Structure

`CardSummaryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SummaryRequest`](../../doc/models/summary-request.md) | Optional | Encapsulates the details of a Summary Request.<br>Summary Request fields are same as the Search Request base class and no new fields are required. | getFilters(): ?SummaryRequest | setFilters(?SummaryRequest filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "AccountId": 108,
    "AccountNumber": "AccountNumber2",
    "ColCoCode": 14,
    "ColCoCountryCode": "ColCoCountryCode8",
    "ColCoId": 0,
    "CardStatus": [
      "CardStatus7",
      "CardStatus8"
    ],
    "RequestId": "RequestId0"
  }
}
```

