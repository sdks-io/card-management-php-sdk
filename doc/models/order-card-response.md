
# Order Card Response

## Structure

`OrderCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateCardResponse[])`](../../doc/models/create-card-response.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `mainReference` | `?int` | Optional | Main order reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "Status": "Status8",
  "Data": [
    {
      "DriverAndVRN": "DriverAndVRN6",
      "OrderCardReference": 86
    }
  ],
  "MainReference": 110
}
```

