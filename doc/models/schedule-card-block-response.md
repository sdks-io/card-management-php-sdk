
# Schedule Card Block Response

## Structure

`ScheduleCardBlockResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainReference` | `?int` | Optional | Reference number for tracking the execution of the request.<br>Note: Reference will be empty for status 9006 and 9012 i.e., request for all the cards failed. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `requestId` | `?string` | Optional | API Request ID | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Overall Status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(ScheduleCardBlockResponseDataItems[])`](../../doc/models/schedule-card-block-response-data-items.md) | Optional | List of SubmittedScheduleCardBlockCard entity. | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ScheduleCardBlockResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ScheduleCardBlockResponseDataItemsBuilder;

$scheduleCardBlockResponse = ScheduleCardBlockResponseBuilder::init()
    ->mainReference(96)
    ->requestId('RequestId2')
    ->status('Status8')
    ->data(
        [
            ScheduleCardBlockResponseDataItemsBuilder::init()
                ->cardId(224)
                ->fromDate('FromDate2')
                ->toDate('ToDate8')
                ->referenceId(108)
                ->build()
        ]
    )
    ->build();
```

