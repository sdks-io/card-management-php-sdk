
# Update Bundle Res

## Structure

`UpdateBundleRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(UpdateBundleResponse[])`](../../doc/models/update-bundle-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateBundleResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UpdateBundleResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$updateBundleRes = UpdateBundleResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            UpdateBundleResponseBuilder::init()
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
                ->build(),
            UpdateBundleResponseBuilder::init()
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
                ->build()
        ]
    )
    ->build();
```

