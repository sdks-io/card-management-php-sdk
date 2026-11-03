
# Restriction Product

## Structure

`RestrictionProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `globalProductCode` | `?string` | Optional | The productCode returned by the Gateway API.<br>Example: 021 | getGlobalProductCode(): ?string | setGlobalProductCode(?string globalProductCode): void |
| `description` | `?string` | Optional | The description returned by the Gateway API.<br>Example: High Performance Diesel | getDescription(): ?string | setDescription(?string description): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\RestrictionProductBuilder;

$restrictionProduct = RestrictionProductBuilder::init()
    ->globalProductCode('GlobalProductCode6')
    ->description('Description2')
    ->build();
```

