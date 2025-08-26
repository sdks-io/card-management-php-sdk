
# Account Req

## Structure

`AccountReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?AccountRequest`](../../doc/models/account-request.md) | Optional | - | getFilters(): ?AccountRequest | setFilters(?AccountRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Page": 1,
  "PageSize": 100,
  "Filters": {
    "Status": "Status6",
    "IncludeCardSummary": false,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "PageSize": 56
  }
}
```

