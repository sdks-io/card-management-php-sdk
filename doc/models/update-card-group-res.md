
# Update Card Group Res

## Structure

`UpdateCardGroupRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(UpdateCardGroupResponse[])`](../../doc/models/update-card-group-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "MainReference": 166,
      "UpdateCardGroupReference": 110,
      "NewCardGroupReference": 112,
      "MoveCardReferences": [
        {
          "CardId": 234,
          "PAN": "PAN6",
          "Reference": 188
        }
      ]
    }
  ]
}
```

