
# Audit Response

## Structure

`AuditResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `audits` | [`?(AuditResponseAuditsItems[])`](../../doc/models/audit-response-audits-items.md) | Optional | - | getAudits(): ?array | setAudits(?array audits): void |
| `currentPage` | `?int` | Optional | Current Page | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `rowCount` | `?int` | Optional | Total row count matched for the given input criteria | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `totalPages` | `?int` | Optional | Calculated page count based on page size from the incoming API request and total number of rows matched for the given input criteria | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API RequestId | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "RequestId": "14915cff-5d37-4ee9-cb32-bd77b9d271cf",
  "Audits": [
    {
      "AccountId": 178,
      "AccountNumber": "AccountNumber2",
      "AdditionalInformation1": "AdditionalInformation16",
      "AdditionalInformation2": "AdditionalInformation26",
      "AdditionalInformation3": "AdditionalInformation30"
    },
    {
      "AccountId": 178,
      "AccountNumber": "AccountNumber2",
      "AdditionalInformation1": "AdditionalInformation16",
      "AdditionalInformation2": "AdditionalInformation26",
      "AdditionalInformation3": "AdditionalInformation30"
    },
    {
      "AccountId": 178,
      "AccountNumber": "AccountNumber2",
      "AdditionalInformation1": "AdditionalInformation16",
      "AdditionalInformation2": "AdditionalInformation26",
      "AdditionalInformation3": "AdditionalInformation30"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

