
# Purchase Category Response

## Structure

`PurchaseCategoryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `purchaseCategories` | [`?(PurchaseCategory1AllOf0[])`](../../doc/models/purchase-category-1-all-of-0.md) | Optional | - | getPurchaseCategories(): ?array | setPurchaseCategories(?array purchaseCategories): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategoryResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategory1AllOf0Builder;
use ShellCardManagementAPIsLib\Models\Builders\ProductGroupBuilder;

$purchaseCategoryResponse = PurchaseCategoryResponseBuilder::init()
    ->purchaseCategories(
        [
            PurchaseCategory1AllOf0Builder::init(
                false,
                [
                    ProductGroupBuilder::init()
                        ->referenceId(82)
                        ->productGroupId('ProductGroupId6')
                        ->name('Name0')
                        ->isDefault(false)
                        ->isFuelType(false)
                        ->build()
                ]
            )
                ->id(166)
                ->code('Code6')
                ->name('Name4')
                ->title('Title4')
                ->description('Description0')
                ->build(),
            PurchaseCategory1AllOf0Builder::init(
                false,
                [
                    ProductGroupBuilder::init()
                        ->referenceId(82)
                        ->productGroupId('ProductGroupId6')
                        ->name('Name0')
                        ->isDefault(false)
                        ->isFuelType(false)
                        ->build()
                ]
            )
                ->id(166)
                ->code('Code6')
                ->name('Name4')
                ->title('Title4')
                ->description('Description0')
                ->build()
        ]
    )
    ->build();
```

