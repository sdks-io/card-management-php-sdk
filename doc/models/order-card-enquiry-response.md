
# Order Card Enquiry Response

## Structure

`OrderCardEnquiryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(OrderCardEnquiry[])`](../../doc/models/order-card-enquiry.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\OrderCardEnquiryResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\OrderCardEnquiryBuilder;

$orderCardEnquiryResponse = OrderCardEnquiryResponseBuilder::init()
    ->requestId('RequestId2')
    ->status('Status8')
    ->data(
        [
            OrderCardEnquiryBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->bCOReference(10)
                ->bCORowNumber(192)
                ->cardGroupId(108)
                ->build()
        ]
    )
    ->build();
```

