
# Response Delivery Address Update

## Structure

`ResponseDeliveryAddressUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the requests. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(DeliveryAddressUpdateStatusEnum)`](../../doc/models/delivery-address-update-status-enum.md) | Required | Indicates overall status of the request | getStatus(): string | setStatus(string status): void |
| `mainReference` | `?int` | Optional | Main reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `data` | [`?(Datum[])`](../../doc/models/datum.md) | Optional | List of Delivery address update entity. The fields of this entity are described below. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "00001b3c-0000-0000-0000-000000000000",
  "Status": "PARTIAL_SUCCESS",
  "MainReference": 123455,
  "Data": [
    {
      "CardId": 224,
      "CardPAN": "CardPAN2",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "ReferenceId": 108
    }
  ]
}
```

