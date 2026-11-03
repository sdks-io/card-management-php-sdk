
# Warning

## Structure

`Warning`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | A custom message giving the detailed outage information. The message will contain the duration and the reason for the outage. | getMessage(): string | setMessage(string message): void |
| `type` | `string` | Required | Type of warning | getType(): string | setType(string type): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\WarningBuilder;

$warning = WarningBuilder::init(
    'System is down for upgradation.',
    'System Outage'
)->build();
```

