
# Account Restriction Res

## Structure

`AccountRestrictionRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(AccountRestrictionResponse[])`](../../doc/models/account-restriction-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AccountRestrictionResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AccountRestrictionResponseBuilder;

$accountRestrictionRes = AccountRestrictionResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            AccountRestrictionResponseBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->usageRestrictionDescription('UsageRestrictionDescription2')
                ->build(),
            AccountRestrictionResponseBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->usageRestrictionDescription('UsageRestrictionDescription2')
                ->build(),
            AccountRestrictionResponseBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->usageRestrictionDescription('UsageRestrictionDescription2')
                ->build()
        ]
    )
    ->build();
```

