
# Card Group Response

## Structure

`CardGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardGroups` | [`?(CardGroupResponseCardGroupsItems[])`](../../doc/models/card-group-response-card-groups-items.md) | Optional | - | getCardGroups(): ?array | setCardGroups(?array cardGroups): void |
| `currentPage` | `?int` | Optional | current page | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `rowCount` | `?int` | Optional | number of records in current response | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `totalPages` | `?int` | Optional | Total pages available | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "RequestId": "3cc14d61-8f2a-4d88-cc3c-c53110646a85",
  "CardGroups": [
    {
      "AccountId": 114,
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "ActiveCards": 200,
      "BlockedCards": 104
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

