
# Order Card Response

## Structure

`OrderCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateCardResponse[])`](../../doc/models/create-card-response.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `mainReference` | `?int` | Optional | Main order reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\OrderCardResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardResponseBuilder;

$orderCardResponse = OrderCardResponseBuilder::init()
    ->requestId('RequestId8')
    ->status('Status8')
    ->data(
        [
            CreateCardResponseBuilder::init()
                ->driverAndVRN('DriverAndVRN6')
                ->orderCardReference(86)
                ->build(),
            CreateCardResponseBuilder::init()
                ->driverAndVRN('DriverAndVRN6')
                ->orderCardReference(86)
                ->build(),
            CreateCardResponseBuilder::init()
                ->driverAndVRN('DriverAndVRN6')
                ->orderCardReference(86)
                ->build()
        ]
    )
    ->mainReference(150)
    ->build();
```

