
# PIN Reminder Response

## Structure

`PINReminderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Service reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PINReminderReference[])`](../../doc/models/pin-reminder-reference.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId8",
  "MainReference": 42,
  "Status": "Status4",
  "Data": [
    {
      "CardId": 224,
      "PANID": 0,
      "PAN": 154,
      "CardExpiryDate": "CardExpiryDate6",
      "ReferenceId": 108
    },
    {
      "CardId": 224,
      "PANID": 0,
      "PAN": 154,
      "CardExpiryDate": "CardExpiryDate6",
      "ReferenceId": 108
    }
  ]
}
```

