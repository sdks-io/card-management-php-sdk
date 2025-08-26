
# Search Card Restriction Req 1

## Structure

`SearchCardRestrictionReq1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SearchCardRestrictionReq`](../../doc/models/search-card-restriction-req.md) | Optional | - | getFilters(): ?SearchCardRestrictionReq | setFilters(?SearchCardRestrictionReq filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoId": 0,
    "ColCoCode": 14,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "Accounts": {
      "AccountId": 28,
      "AccountNumber": "AccountNumber0"
    }
  }
}
```

