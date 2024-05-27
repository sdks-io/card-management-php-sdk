
# Delivery Address Update Response

## Structure

`DeliveryAddressUpdateResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request ID to which was passed on the API request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `serviceReference` | `?int` | Optional | Service reference number for tracking. | getServiceReference(): ?int | setServiceReference(?int serviceReference): void |
| `deliveryAddressUpdateReferences` | [`?(DeliveryAddressUpdateReferences[])`](../../doc/models/delivery-address-update-references.md) | Optional | - | getDeliveryAddressUpdateReferences(): ?array | setDeliveryAddressUpdateReferences(?array deliveryAddressUpdateReferences): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "eb621f45-a543-4d9a-a934-2f223b263c42",
  "ServiceReference": 123456,
  "DeliveryAddressUpdateReferences": [
    {
      "CardId": 66,
      "CardPAN": "CardPAN8",
      "AccountId": 160,
      "AccountNumber": "AccountNumber8",
      "ReferenceId": 10
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

