
# Purchase Category Res

## Structure

`PurchaseCategoryRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PurchaseCategoryResponse[])`](../../doc/models/purchase-category-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategoryResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategoryResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PurchaseCategory1AllOf0Builder;
use ShellCardManagementAPIsLib\Models\Builders\ProductGroupBuilder;

$purchaseCategoryRes = PurchaseCategoryResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            PurchaseCategoryResponseBuilder::init()
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
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->build();
```

