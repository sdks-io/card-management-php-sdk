
# Card Details Req

## Structure

`CardDetailsReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?CardDetailsRequest`](../../doc/models/card-details-request.md) | Optional | - | getFilters(): ?CardDetailsRequest | setFilters(?CardDetailsRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardDetailsReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardDetailsRequestBuilder;

$cardDetailsReq = CardDetailsReqBuilder::init()
    ->filters(
        CardDetailsRequestBuilder::init()
            ->colCoCode(14)
            ->colCoId(0)
            ->colCoCountryCode('ColCoCountryCode8')
            ->clientReferenceId('ClientReferenceId0')
            ->payerNumber('PayerNumber0')
            ->build()
    )
    ->build();
```

