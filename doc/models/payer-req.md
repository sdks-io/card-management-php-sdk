
# Payer Req

## Structure

`PayerReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?PayerRequest`](../../doc/models/payer-request.md) | Optional | - | getFilters(): ?PayerRequest | setFilters(?PayerRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Page": 1,
  "PageSize": 100,
  "Filters": {
    "Payers": [
      {
        "ColCoId": 78,
        "ColCoCode": 92,
        "PayerId": 126,
        "PayerNumber": "PayerNumber0",
        "PayerName": "PayerName0"
      }
    ],
    "ReturnBasicDetailsOnly": false,
    "IncludeAddresses": false,
    "IncludeBonusParameters": false
  }
}
```

