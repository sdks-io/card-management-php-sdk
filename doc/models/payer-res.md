
# Payer Res

## Structure

`PayerRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PayerDetails[])`](../../doc/models/payer-details.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Current Page | getPage(): ?int | setPage(?int page): void |
| `totalRecords` | `?int` | Optional | Total row count matched for the given input criteria | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |
| `totalPages` | `?int` | Optional | Calculated page count based on page size from the incoming API request and total number of rows matched for the given input criteria. Return 1 if the page size is -1 as all records are returned. | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on current page. | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `warnings` | [`?(Warning[])`](../../doc/models/warning.md) | Optional | A list of Warning entity.<br>This entity will hold the details of the scheduled System Outages of any dependent applications of this service.<br>Note: If there is no scheduled outage information available, in the configuration in AMS, for this service, this parameter won’t be present in output. | getWarnings(): ?array | setWarnings(?array warnings): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Page": 1,
  "TotalRecords": 100,
  "TotalPages": 100,
  "PageSize": 100,
  "Data": [
    {
      "ColCoId": 210,
      "ColCoCode": 224,
      "CountryCode": "CountryCode6",
      "Country": "Country8",
      "PayerId": 2
    },
    {
      "ColCoId": 210,
      "ColCoCode": 224,
      "CountryCode": "CountryCode6",
      "Country": "Country8",
      "PayerId": 2
    },
    {
      "ColCoId": 210,
      "ColCoCode": 224,
      "CountryCode": "CountryCode6",
      "Country": "Country8",
      "PayerId": 2
    }
  ]
}
```

