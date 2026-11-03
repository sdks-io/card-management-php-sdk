
# Error Details

## Structure

`ErrorDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error code representing the error encountered | getCode(): ?string | setCode(?string code): void |
| `title` | `?string` | Optional | Error type description | getTitle(): ?string | setTitle(?string title): void |
| `detail` | `?string` | Optional | Detailed inforamtion about the error | getDetail(): ?string | setDetail(?string detail): void |
| `additionalInfo` | `?array<string,?string>` | Optional | Applicable when more details related to error to be returned | getAdditionalInfo(): ?array | setAdditionalInfo(?array additionalInfo): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ErrorDetailsBuilder;

$errorDetails = ErrorDetailsBuilder::init()
    ->code('Code6')
    ->title('Title4')
    ->detail('Detail8')
    ->additionalInfo(
        [
            'key0' => 'AdditionalInfo8'
        ]
    )
    ->build();
```

