
# Error Object

## Structure

`ErrorObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ErrorObjectBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorDetailsBuilder;

$errorObject = ErrorObjectBuilder::init()
    ->requestId('RequestId4')
    ->status('Status0')
    ->errors(
        [
            ErrorDetailsBuilder::init()
                ->code('Code4')
                ->title('Title6')
                ->detail('Detail6')
                ->additionalInfo(
                    [
                        'key0' => 'AdditionalInfo0',
                        'key1' => 'AdditionalInfo1',
                        'key2' => 'AdditionalInfo2'
                    ]
                )
                ->build(),
            ErrorDetailsBuilder::init()
                ->code('Code4')
                ->title('Title6')
                ->detail('Detail6')
                ->additionalInfo(
                    [
                        'key0' => 'AdditionalInfo0',
                        'key1' => 'AdditionalInfo1',
                        'key2' => 'AdditionalInfo2'
                    ]
                )
                ->build()
        ]
    )
    ->build();
```

