
# Create Bundle Response

## Structure

`CreateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bundleCreationStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getBundleCreationStatus(): ?ErrorStatus | setBundleCreationStatus(?ErrorStatus bundleCreationStatus): void |
| `bundleId` | `?string` | Optional | Identifier of the newly created bundle | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `dayTimeRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getDayTimeRestrictionStatus(): ?ErrorStatus | setDayTimeRestrictionStatus(?ErrorStatus dayTimeRestrictionStatus): void |
| `dayTimeRestrictionProfileId` | `?string` | Optional | Identifier of the day/time restriction profile created | getDayTimeRestrictionProfileId(): ?string | setDayTimeRestrictionProfileId(?string dayTimeRestrictionProfileId): void |
| `locationRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getLocationRestrictionStatus(): ?ErrorStatus | setLocationRestrictionStatus(?ErrorStatus locationRestrictionStatus): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile created | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `usageRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getUsageRestrictionStatus(): ?ErrorStatus | setUsageRestrictionStatus(?ErrorStatus usageRestrictionStatus): void |
| `productRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getProductRestrictionStatus(): ?ErrorStatus | setProductRestrictionStatus(?ErrorStatus productRestrictionStatus): void |
| `productRestrictionProfileId` | `?string` | Optional | Identifier of the product restriction profile created | getProductRestrictionProfileId(): ?string | setProductRestrictionProfileId(?string productRestrictionProfileId): void |
| `cards` | [`?(BundleCardRestrictionStatus[])`](../../doc/models/bundle-card-restriction-status.md) | Optional | - | getCards(): ?array | setCards(?array cards): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CreateBundleResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$createBundleResponse = CreateBundleResponseBuilder::init()
    ->bundleCreationStatus(
        ErrorStatusBuilder::init()
            ->code('Code8')
            ->description('Description8')
            ->build()
    )
    ->bundleId('1')
    ->dayTimeRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code4')
            ->description('Description2')
            ->build()
    )
    ->dayTimeRestrictionProfileId('2')
    ->locationRestrictionStatus(
        ErrorStatusBuilder::init()
            ->code('Code6')
            ->description('Description0')
            ->build()
    )
    ->locationRestrictionProfileId('3')
    ->productRestrictionProfileId('4')
    ->build();
```

