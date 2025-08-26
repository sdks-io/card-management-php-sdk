
# Card Move Res

## Structure

`CardMoveRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request ID | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Move-Card reference number for tracking the execution of the request. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `status` | `?string` | Optional | API Request Overall status | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SubmittedMoveCard[])`](../../doc/models/submitted-move-card.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId4",
  "MainReference": 114,
  "Status": "Status0",
  "Data": [
    {
      "AccountId": "AccountId4",
      "AccountNumber": "AccountNumber8",
      "CardId": "CardId8",
      "PAN": "PAN0",
      "MoveCardReference": "MoveCardReference0"
    },
    {
      "AccountId": "AccountId4",
      "AccountNumber": "AccountNumber8",
      "CardId": "CardId8",
      "PAN": "PAN0",
      "MoveCardReference": "MoveCardReference0"
    },
    {
      "AccountId": "AccountId4",
      "AccountNumber": "AccountNumber8",
      "CardId": "CardId8",
      "PAN": "PAN0",
      "MoveCardReference": "MoveCardReference0"
    }
  ]
}
```

