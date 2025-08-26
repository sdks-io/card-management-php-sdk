
# Create Card Group Res

## Structure

`CreateCardGroupRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateCardGroupResponse[])`](../../doc/models/create-card-group-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "MainReference": 166,
      "NewCardGroupReference": 112,
      "SuccessfulRequests": [
        {
          "CardId": 18,
          "PAN": "PAN0",
          "Reference": 228
        }
      ],
      "ErrorCards": [
        {
          "CardId": 136,
          "PAN": "PAN6",
          "ErrorCode": "ErrorCode0",
          "ErrorDescription": "ErrorDescription6"
        },
        {
          "CardId": 136,
          "PAN": "PAN6",
          "ErrorCode": "ErrorCode0",
          "ErrorDescription": "ErrorDescription6"
        }
      ]
    },
    {
      "MainReference": 166,
      "NewCardGroupReference": 112,
      "SuccessfulRequests": [
        {
          "CardId": 18,
          "PAN": "PAN0",
          "Reference": 228
        }
      ],
      "ErrorCards": [
        {
          "CardId": 136,
          "PAN": "PAN6",
          "ErrorCode": "ErrorCode0",
          "ErrorDescription": "ErrorDescription6"
        },
        {
          "CardId": 136,
          "PAN": "PAN6",
          "ErrorCode": "ErrorCode0",
          "ErrorDescription": "ErrorDescription6"
        }
      ]
    }
  ]
}
```

