
# Card Management V1 Ordercard Request

## Structure

`CardManagementV1OrdercardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardDetails` | [`?(CardDetail[])`](../../doc/models/card-detail.md) | Optional | List of CardOrder entity. The fields in this entity are described below. | getCardDetails(): ?array | setCardDetails(?array cardDetails): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardManagementV1OrdercardRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardDetailBuilder;

$cardManagementV1OrdercardRequest = CardManagementV1OrdercardRequestBuilder::init()
    ->cardDetails(
        [
            CardDetailBuilder::init()
                ->payerId(232)
                ->payerNumber('PayerNumber2')
                ->accountId(36)
                ->accountNumber('AccountNumber4')
                ->colCoCode(198)
                ->cardDeliveryType(2)
                ->pINAdviceType(4)
                ->build(),
            CardDetailBuilder::init()
                ->payerId(232)
                ->payerNumber('PayerNumber2')
                ->accountId(36)
                ->accountNumber('AccountNumber4')
                ->colCoCode(198)
                ->cardDeliveryType(2)
                ->pINAdviceType(4)
                ->build()
        ]
    )
    ->build();
```

