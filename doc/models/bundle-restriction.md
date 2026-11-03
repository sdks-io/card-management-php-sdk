
# Bundle Restriction

## Structure

`BundleRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dayTimeRestrictionAction` | `?string` | Optional | The value indicates what actions to be performed with respect to day time restriction.<br>Mandatory<br>Allowed values –<br>•    Add: Apply the given restriction on the bundle.<br>•    Default: No Day/Time restriction will be applied on the bundle in Gateway. | getDayTimeRestrictionAction(): ?string | setDayTimeRestrictionAction(?string dayTimeRestrictionAction): void |
| `locationRestrictionAction` | `?string` | Optional | The value indicates what actions to be performed with respect to location restriction.<br>Mandatory<br>Allowed values –<br>•    Add: Apply the given restriction on the bundle.<br>•    Default: No location restriction will be applied on the bundle in Gateway. | getLocationRestrictionAction(): ?string | setLocationRestrictionAction(?string locationRestrictionAction): void |
| `productRestrictionAction` | `?string` | Optional | The value indicates what actions to be performed with respect to Product restriction.<br>Mandatory<br>Allowed values –<br>•    Add: Apply the given restriction on the bundle.<br>•    Default: No Product restriction will be applied on the bundle in Gateway. | getProductRestrictionAction(): ?string | setProductRestrictionAction(?string productRestrictionAction): void |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `productRestrictions` | [`?ProductRestrictionCard`](../../doc/models/product-restriction-card.md) | Optional | - | getProductRestrictions(): ?ProductRestrictionCard | setProductRestrictions(?ProductRestrictionCard productRestrictions): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |
| `usageRestrictions` | [`?UsageRestrictionsCard`](../../doc/models/usage-restrictions-card.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictionsCard | setUsageRestrictions(?UsageRestrictionsCard usageRestrictions): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\BundleRestrictionBuilder;
use ShellCardManagementAPIsLib\Models\Builders\DayTimeRestrictionsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ProductRestrictionCardBuilder;

$bundleRestriction = BundleRestrictionBuilder::init()
    ->dayTimeRestrictionAction('DayTimeRestrictionAction8')
    ->locationRestrictionAction('LocationRestrictionAction2')
    ->productRestrictionAction('ProductRestrictionAction2')
    ->dayTimeRestrictions(
        DayTimeRestrictionsBuilder::init()
            ->monday(false)
            ->tuesday(false)
            ->wednesday(false)
            ->thursday(false)
            ->friday(false)
            ->build()
    )
    ->productRestrictions(
        ProductRestrictionCardBuilder::init()
            ->products(
                [
                    'Products4'
                ]
            )
            ->productGroups(
                [
                    'ProductGroups3',
                    'ProductGroups4'
                ]
            )
            ->build()
    )
    ->build();
```

