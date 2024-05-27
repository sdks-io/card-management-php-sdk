
# Order Card Enquiry Response

## Structure

`OrderCardEnquiryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(OrderCardEnquiry[])`](../../doc/models/order-card-enquiry.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId8",
  "Status": "Status4",
  "Data": [
    {
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "BCOReference": 10,
      "BCORowNumber": 192,
      "CardGroupId": 108
    }
  ]
}
```

