
# Audit Req

## Structure

`AuditReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?AuditRequest`](../../doc/models/audit-request.md) | Optional | - | getFilters(): ?AuditRequest | setFilters(?AuditRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Page": 1,
  "PageSize": 100,
  "Filters": {
    "Status": "Status6",
    "PayerNumber": "PayerNumber0",
    "PayerId": 48,
    "AccountNumber": "AccountNumber2",
    "ColCoCode": 14
  }
}
```

