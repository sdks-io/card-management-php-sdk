
# Search Card Restriction Req 1

## Structure

`SearchCardRestrictionReq1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SearchCardRestrictionReq`](../../doc/models/search-card-restriction-req.md) | Optional | - | getFilters(): ?SearchCardRestrictionReq | setFilters(?SearchCardRestrictionReq filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SearchCardRestrictionReq1Builder;
use ShellCardManagementAPIsLib\Models\Builders\SearchCardRestrictionReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AccountsBuilder;

$searchCardRestrictionReq1 = SearchCardRestrictionReq1Builder::init()
    ->filters(
        SearchCardRestrictionReqBuilder::init()
            ->colCoId(0)
            ->colCoCode(14)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->accounts(
                AccountsBuilder::init()
                    ->accountId(28)
                    ->accountNumber('AccountNumber0')
                    ->build()
            )
            ->build()
    )
    ->build();
```

