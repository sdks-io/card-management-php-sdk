
# Card Type Req

## Structure

`CardTypeReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?CardTypeRequest`](../../doc/models/card-type-request.md) | Optional | - | getFilters(): ?CardTypeRequest | setFilters(?CardTypeRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardTypeReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardTypeRequestBuilder;

$cardTypeReq = CardTypeReqBuilder::init()
    ->filters(
        CardTypeRequestBuilder::init()
            ->colCoId(0)
            ->colCoCode(14)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->accountId(108)
            ->build()
    )
    ->build();
```

