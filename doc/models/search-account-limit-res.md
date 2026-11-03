
# Search Account Limit Res

## Structure

`SearchAccountLimitRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SearchAccountLimitResponse[])`](../../doc/models/search-account-limit-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SearchAccountLimitResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SearchAccountLimitResponseBuilder;

$searchAccountLimitRes = SearchAccountLimitResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            SearchAccountLimitResponseBuilder::init()
                ->requestId('RequestId4')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->referenceProduct('ReferenceProduct8')
                ->restrictionCondition('RestrictionCondition4')
                ->build(),
            SearchAccountLimitResponseBuilder::init()
                ->requestId('RequestId4')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->referenceProduct('ReferenceProduct8')
                ->restrictionCondition('RestrictionCondition4')
                ->build()
        ]
    )
    ->build();
```

