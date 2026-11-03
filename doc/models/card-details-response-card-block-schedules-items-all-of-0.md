
# Card Details Response Card Block Schedules Items All of 0

## Structure

`CardDetailsResponseCardBlockSchedulesItemsAllOf0`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fromDate` | `?string` | Optional | Effective start date of Block / Unblock | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Effective end date of Block / Unblock | getToDate(): ?string | setToDate(?string toDate): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardDetailsResponseCardBlockSchedulesItemsAllOf0Builder;

$cardDetailsResponseCardBlockSchedulesItemsAllOf0 = CardDetailsResponseCardBlockSchedulesItemsAllOf0Builder::init()
    ->fromDate('20210212')
    ->toDate('20210212')
    ->build();
```

