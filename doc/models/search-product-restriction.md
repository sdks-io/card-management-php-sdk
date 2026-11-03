
# Search Product Restriction

## Structure

`SearchProductRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `products` | [`?(RestrictionProduct[])`](../../doc/models/restriction-product.md) | Optional | - | getProducts(): ?array | setProducts(?array products): void |
| `productGroups` | [`?(ProductGroup[])`](../../doc/models/product-group.md) | Optional | - | getProductGroups(): ?array | setProductGroups(?array productGroups): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SearchProductRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictionProductBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ProductGroupBuilder;

$searchProductRestriction = SearchProductRestrictionBuilder::init()
    ->products(
        [
            RestrictionProductBuilder::init()
                ->globalProductCode('GlobalProductCode6')
                ->description('Description8')
                ->build(),
            RestrictionProductBuilder::init()
                ->globalProductCode('GlobalProductCode6')
                ->description('Description8')
                ->build(),
            RestrictionProductBuilder::init()
                ->globalProductCode('GlobalProductCode6')
                ->description('Description8')
                ->build()
        ]
    )
    ->productGroups(
        [
            ProductGroupBuilder::init()
                ->referenceId(82)
                ->productGroupId('ProductGroupId6')
                ->name('Name0')
                ->isDefault(false)
                ->isFuelType(false)
                ->build(),
            ProductGroupBuilder::init()
                ->referenceId(82)
                ->productGroupId('ProductGroupId6')
                ->name('Name0')
                ->isDefault(false)
                ->isFuelType(false)
                ->build(),
            ProductGroupBuilder::init()
                ->referenceId(82)
                ->productGroupId('ProductGroupId6')
                ->name('Name0')
                ->isDefault(false)
                ->isFuelType(false)
                ->build()
        ]
    )
    ->build();
```

