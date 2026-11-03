
# Card Type Res

## Structure

`CardTypeRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CardTypeResponseCustomerCardTypesItems[])`](../../doc/models/card-type-response-customer-card-types-items.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardTypeResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardTypeResponseCustomerCardTypesItemsBuilder;

$cardTypeRes = CardTypeResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            CardTypeResponseCustomerCardTypesItemsBuilder::init()
                ->cardTypeId(236)
                ->tokenTypeId(168)
                ->cardTypeName('CardTypeName6')
                ->tokenTypeName('TokenTypeName8')
                ->pANLength(32)
                ->build(),
            CardTypeResponseCustomerCardTypesItemsBuilder::init()
                ->cardTypeId(236)
                ->tokenTypeId(168)
                ->cardTypeName('CardTypeName6')
                ->tokenTypeName('TokenTypeName8')
                ->pANLength(32)
                ->build(),
            CardTypeResponseCustomerCardTypesItemsBuilder::init()
                ->cardTypeId(236)
                ->tokenTypeId(168)
                ->cardTypeName('CardTypeName6')
                ->tokenTypeName('TokenTypeName8')
                ->pANLength(32)
                ->build()
        ]
    )
    ->build();
```

