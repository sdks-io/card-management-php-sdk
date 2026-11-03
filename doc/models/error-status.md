
# Error Status

## Structure

`ErrorStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error Code | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | Error Description | getDescription(): ?string | setDescription(?string description): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ErrorStatusBuilder;

$errorStatus = ErrorStatusBuilder::init()
    ->code('0000')
    ->description('Success')
    ->build();
```

