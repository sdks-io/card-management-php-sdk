
# Summaryofbundle Res

## Structure

`SummaryofbundleRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SummaryofbundleResponse[])`](../../doc/models/summaryofbundle-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SummaryofbundleResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SummaryofbundleResponseBuilder;

$summaryofbundleRes = SummaryofbundleResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            SummaryofbundleResponseBuilder::init()
                ->payerId(2)
                ->payerNumber('PayerNumber6')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->countOfCardsNotInBundle(122)
                ->build(),
            SummaryofbundleResponseBuilder::init()
                ->payerId(2)
                ->payerNumber('PayerNumber6')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->countOfCardsNotInBundle(122)
                ->build(),
            SummaryofbundleResponseBuilder::init()
                ->payerId(2)
                ->payerNumber('PayerNumber6')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->countOfCardsNotInBundle(122)
                ->build()
        ]
    )
    ->build();
```

