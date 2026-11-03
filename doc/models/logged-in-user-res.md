
# Logged in User Res

## Structure

`LoggedInUserRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(LoggedInUserResponse[])`](../../doc/models/logged-in-user-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\LoggedInUserResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\LoggedInUserResponseBuilder;

$loggedInUserRes = LoggedInUserResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            LoggedInUserResponseBuilder::init()
                ->userName('UserName0')
                ->displayName('DisplayName2')
                ->idMSSOID('IdMSSOID8')
                ->preferredLanguage('PreferredLanguage0')
                ->isSuperAdmin(false)
                ->build()
        ]
    )
    ->build();
```

