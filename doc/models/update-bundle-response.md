
# Update Bundle Response

## Structure

`UpdateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestActionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getRequestActionStatus(): ?ErrorStatus | setRequestActionStatus(?ErrorStatus requestActionStatus): void |
| `dayTimeRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getDayTimeRestrictionStatus(): ?ErrorStatus | setDayTimeRestrictionStatus(?ErrorStatus dayTimeRestrictionStatus): void |
| `locationRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getLocationRestrictionStatus(): ?ErrorStatus | setLocationRestrictionStatus(?ErrorStatus locationRestrictionStatus): void |
| `productRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getProductRestrictionStatus(): ?ErrorStatus | setProductRestrictionStatus(?ErrorStatus productRestrictionStatus): void |
| `usageRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getUsageRestrictionStatus(): ?ErrorStatus | setUsageRestrictionStatus(?ErrorStatus usageRestrictionStatus): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateBundleResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$updateBundleResponse = UpdateBundleResponseBuilder::init()
    ->requestActionStatus(
        ErrorStatusBuilder::init()
            ->code('Code6')
            ->description('Description0')
            ->build()
    )
    ->dayTimeRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code4')
            ->description('Description2')
            ->build()
    )
    ->locationRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code6')
            ->description('Description0')
            ->build()
    )
    ->productRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code8')
            ->description('Description8')
            ->build()
    )
    ->usageRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code4')
            ->description('Description8')
            ->build()
    )
    ->build();
```

