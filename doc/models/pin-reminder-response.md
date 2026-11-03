
# PIN Reminder Response

## Structure

`PINReminderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Service reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PINReminderReference[])`](../../doc/models/pin-reminder-reference.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PINReminderResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PINReminderReferenceBuilder;

$pINReminderResponse = PINReminderResponseBuilder::init()
    ->requestId('RequestId8')
    ->mainReference(140)
    ->status('Status4')
    ->data(
        [
            PINReminderReferenceBuilder::init()
                ->cardId(224)
                ->pANID(0)
                ->pAN(154)
                ->cardExpiryDate('CardExpiryDate6')
                ->referenceId(108)
                ->build(),
            PINReminderReferenceBuilder::init()
                ->cardId(224)
                ->pANID(0)
                ->pAN(154)
                ->cardExpiryDate('CardExpiryDate6')
                ->referenceId(108)
                ->build(),
            PINReminderReferenceBuilder::init()
                ->cardId(224)
                ->pANID(0)
                ->pAN(154)
                ->cardExpiryDate('CardExpiryDate6')
                ->referenceId(108)
                ->build()
        ]
    )
    ->build();
```

