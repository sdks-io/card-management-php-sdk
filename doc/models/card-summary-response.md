
# Card Summary Response

## Structure

`CardSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SummaryResponse[])`](../../doc/models/summary-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardSummaryResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SummaryResponseBuilder;

$cardSummaryResponse = CardSummaryResponseBuilder::init()
    ->requestId('RequestId4')
    ->status('Status0')
    ->data(
        [
            SummaryResponseBuilder::init()
                ->activeCards(252)
                ->blockedCards(156)
                ->cancelledCards(102)
                ->expiredCards(156)
                ->expiringCards(122)
                ->build(),
            SummaryResponseBuilder::init()
                ->activeCards(252)
                ->blockedCards(156)
                ->cancelledCards(102)
                ->expiredCards(156)
                ->expiringCards(122)
                ->build(),
            SummaryResponseBuilder::init()
                ->activeCards(252)
                ->blockedCards(156)
                ->cancelledCards(102)
                ->expiredCards(156)
                ->expiringCards(122)
                ->build()
        ]
    )
    ->build();
```

