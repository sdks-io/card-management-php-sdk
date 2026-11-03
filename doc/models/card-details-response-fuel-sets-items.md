
# Card Details Response Fuel Sets Items

Product restriction

## Structure

`CardDetailsResponseFuelSetsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productRestrictionId` | `int` | Required | product restriction identifier | getProductRestrictionId(): int | setProductRestrictionId(int productRestrictionId): void |
| `description` | `string` | Required | product set description. | getDescription(): string | setDescription(string description): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardDetailsResponseFuelSetsItemsBuilder;

$cardDetailsResponseFuelSetsItems = CardDetailsResponseFuelSetsItemsBuilder::init(
    120,
    'FS02: Diesel'
)->build();
```

