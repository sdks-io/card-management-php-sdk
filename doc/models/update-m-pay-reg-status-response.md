
# Update M Pay Reg Status Response

## Structure

`UpdateMPayRegStatusResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | API Response Status | getStatus(): ?string | setStatus(?string status): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateMPayRegStatusResponseBuilder;

$updateMPayRegStatusResponse = UpdateMPayRegStatusResponseBuilder::init()
    ->requestId('RequestId2')
    ->status('Status8')
    ->build();
```

