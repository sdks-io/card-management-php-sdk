
# Purchase Category Req

## Structure

`PurchaseCategoryReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?PurchaseCategoryRequest`](../../doc/models/purchase-category-request.md) | Optional | - | getFilters(): ?PurchaseCategoryRequest | setFilters(?PurchaseCategoryRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategoryReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategoryRequestBuilder;

$purchaseCategoryReq = PurchaseCategoryReqBuilder::init()
    ->filters(
        PurchaseCategoryRequestBuilder::init()
            ->requestId('RequestId0')
            ->colCoCode(14)
            ->colCoId(0)
            ->cardTypeId(190)
            ->purchaseCategoryId(140)
            ->build()
    )
    ->build();
```

