
# Create Bundle Res

## Structure

`CreateBundleRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateBundleResponse[])`](../../doc/models/create-bundle-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CreateBundleResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateBundleResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$createBundleRes = CreateBundleResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            CreateBundleResponseBuilder::init()
                ->bundleCreationStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code8')
                        ->description('Description8')
                        ->build()
                )
                ->bundleId('BundleId6')
                ->dayTimeRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code4')
                        ->description('Description2')
                        ->build()
                )
                ->dayTimeRestrictionProfileId('DayTimeRestrictionProfileId4')
                ->locationRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code6')
                        ->description('Description0')
                        ->build()
                )
                ->build(),
            CreateBundleResponseBuilder::init()
                ->bundleCreationStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code8')
                        ->description('Description8')
                        ->build()
                )
                ->bundleId('BundleId6')
                ->dayTimeRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code4')
                        ->description('Description2')
                        ->build()
                )
                ->dayTimeRestrictionProfileId('DayTimeRestrictionProfileId4')
                ->locationRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code6')
                        ->description('Description0')
                        ->build()
                )
                ->build(),
            CreateBundleResponseBuilder::init()
                ->bundleCreationStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code8')
                        ->description('Description8')
                        ->build()
                )
                ->bundleId('BundleId6')
                ->dayTimeRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code4')
                        ->description('Description2')
                        ->build()
                )
                ->dayTimeRestrictionProfileId('DayTimeRestrictionProfileId4')
                ->locationRestrictionStatus(
                    ErrorStatusBuilder::init()
                        ->code('Code6')
                        ->description('Description0')
                        ->build()
                )
                ->build()
        ]
    )
    ->build();
```

