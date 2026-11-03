
# Budle Details Req

## Structure

`BudleDetailsReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?BudleDetailsRequest`](../../doc/models/budle-details-request.md) | Optional | - | getFilters(): ?BudleDetailsRequest | setFilters(?BudleDetailsRequest filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\BudleDetailsReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\BudleDetailsRequestBuilder;

$budleDetailsReq = BudleDetailsReqBuilder::init()
    ->filters(
        BudleDetailsRequestBuilder::init()
            ->colCoId(0)
            ->colCoCode(14)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->accountId(108)
            ->build()
    )
    ->build();
```

