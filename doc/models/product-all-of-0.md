
# Product All of 0

## Structure

`ProductAllOf0`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `globalProductCode` | `?string` | Required | The productCode returned by the Gateway API.<br>Example: 021 | getGlobalProductCode(): ?string | setGlobalProductCode(?string globalProductCode): void |
| `description` | `?string` | Required | The description returned by the Gateway API. | getDescription(): ?string | setDescription(?string description): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ProductAllOf0Builder;

$productAllOf0 = ProductAllOf0Builder::init()
    ->globalProductCode('021')
    ->description('High Performance Diesel')
    ->build();
```

