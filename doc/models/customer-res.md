
# Customer Res

## Structure

`CustomerRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CustomerDetailResponse[])`](../../doc/models/customer-detail-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CustomerResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CustomerDetailResponseBuilder;

$customerRes = CustomerResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            CustomerDetailResponseBuilder::init()
                ->accountId(62)
                ->accountName('AccountName4')
                ->accountNumber('AccountNumber8')
                ->accountShortName('AccountShortName0')
                ->accountTradingName('AccountTradingName0')
                ->build(),
            CustomerDetailResponseBuilder::init()
                ->accountId(62)
                ->accountName('AccountName4')
                ->accountNumber('AccountNumber8')
                ->accountShortName('AccountShortName0')
                ->accountTradingName('AccountTradingName0')
                ->build()
        ]
    )
    ->build();
```

