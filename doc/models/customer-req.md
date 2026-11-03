
# Customer Req

## Structure

`CustomerReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?CustomerDetailRequest`](../../doc/models/customer-detail-request.md) | Optional | - | getFilters(): ?CustomerDetailRequest | setFilters(?CustomerDetailRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CustomerReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CustomerDetailRequestBuilder;

$customerReq = CustomerReqBuilder::init()
    ->filters(
        CustomerDetailRequestBuilder::init()
            ->colCoId(0)
            ->colCoCode(14)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->accountId(108)
            ->build()
    )
    ->build();
```

