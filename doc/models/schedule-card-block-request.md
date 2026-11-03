
# Schedule Card Block Request

## Structure

`ScheduleCardBlockRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isTimeSupported` | `?bool` | Optional | Default: False<br>True – It supports both date & time.<br>False – It supports only date. Time will be ignored if it is provided in the request. | getIsTimeSupported(): ?bool | setIsTimeSupported(?bool isTimeSupported): void |
| `scheduleCardBlockCards` | [`?(ScheduleCardBlockCardsItems[])`](../../doc/models/schedule-card-block-cards-items.md) | Optional | List of ScheduleCardBlockCard entity. Each card in the list will be scheduled for Block or Unblock. The details of the entity are given below. | getScheduleCardBlockCards(): ?array | setScheduleCardBlockCards(?array scheduleCardBlockCards): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ScheduleCardBlockRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ScheduleCardBlockCardsItemsBuilder;

$scheduleCardBlockRequest = ScheduleCardBlockRequestBuilder::init()
    ->isTimeSupported(false)
    ->scheduleCardBlockCards(
        [
            ScheduleCardBlockCardsItemsBuilder::init(
                'Action2'
            )
                ->colCoCode(184)
                ->colCoId(170)
                ->accountId(22)
                ->accountNumber('AccountNumber6')
                ->payerId(218)
                ->build()
        ]
    )
    ->build();
```

