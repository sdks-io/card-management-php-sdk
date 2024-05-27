
# Account Response

## Structure

`AccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accounts` | [`?(AccountResponseAccountsItems[])`](../../doc/models/account-response-accounts-items.md) | Optional | - | getAccounts(): ?array | setAccounts(?array accounts): void |
| `currentPage` | `?int` | Optional | current page | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `rowCount` | `?int` | Optional | Total row count matched for the given input criteria | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `totalPages` | `?int` | Optional | Calculated page count based on page size from the incoming API request and total number of rows matched for the given input criteria. | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request ID | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "RequestId": "e5165f29-7e6f-45b4-96fe-f303df9ca180",
  "Accounts": [
    {
      "AccountFullName": "AccountFullName8",
      "AccountId": 28,
      "AccountNumber": "AccountNumber0",
      "AccountShortName": "AccountShortName2",
      "BestOfIndicator": false
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

