
# Card Search Response

## Structure

`CardSearchResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCES | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(Card[])`](../../doc/models/card.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Specifies the returned page of the results | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Specifies the number of records to be returned which could be less than the PageSize in the request | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `totalPages` | `?int` | Optional | Specifies the total pages available in the result | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `totalRecords` | `?int` | Optional | Specifies the total pages available in the result | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status2",
  "Data": [
    {
      "AccountId": 62,
      "AccountName": "AccountName4",
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "BundleId": "BundleId6"
    },
    {
      "AccountId": 62,
      "AccountName": "AccountName4",
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "BundleId": "BundleId6"
    }
  ],
  "Page": 130,
  "PageSize": 110
}
```

