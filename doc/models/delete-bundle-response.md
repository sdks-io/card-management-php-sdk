
# Delete Bundle Response

## Structure

`DeleteBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\DeleteBundleResponseBuilder;

$deleteBundleResponse = DeleteBundleResponseBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->build();
```

