
# Auto Renew Card Response

## Structure

`AutoRenewCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainReference` | `?int` | Optional | Main reference number for tracking.<br>Example: 123455 | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `requestId` | `?string` | Optional | API | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(AutoRenewCardResponseDataItems[])`](../../doc/models/auto-renew-card-response-data-items.md) | Optional | List of Auto Renew reference entity. The fields of this entity are described below. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "MainReference": 14,
  "RequestId": "RequestId6",
  "Status": "Status2",
  "Data": [
    {
      "AutoRenewReferenceId": 102,
      "CardIdAndPAN": "CardIdAndPAN4",
      "PANID": 176.64
    }
  ]
}
```

