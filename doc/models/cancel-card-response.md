
# Cancel Card Response

## Structure

`CancelCardResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Cancel card reference number for tracking the execution of the request. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `orderReplacementReference` | `?int` | Optional | Order replacement reference number for tracking the execution of the order replacement cards request. | getOrderReplacementReference(): ?int | setOrderReplacementReference(?int orderReplacementReference): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SubmittedCard[])`](../../doc/models/submitted-card.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CancelCardResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SubmittedCardBuilder;

$cancelCardResponse = CancelCardResponseBuilder::init()
    ->requestId('RequestId6')
    ->mainReference(144)
    ->orderReplacementReference(98)
    ->status('Status0')
    ->data(
        [
            SubmittedCardBuilder::init()
                ->replacementCardReference(84)
                ->updateCardReference(178)
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->cardExpiryDate('CardExpiryDate6')
                ->build(),
            SubmittedCardBuilder::init()
                ->replacementCardReference(84)
                ->updateCardReference(178)
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->cardExpiryDate('CardExpiryDate6')
                ->build()
        ]
    )
    ->build();
```

