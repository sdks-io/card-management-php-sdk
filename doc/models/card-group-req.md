
# Card Group Req

## Structure

`CardGroupReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?CardGroupRequest`](../../doc/models/card-group-request.md) | Optional | - | getFilters(): ?CardGroupRequest | setFilters(?CardGroupRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardGroupReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardGroupRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AccountsBuilder;

$cardGroupReq = CardGroupReqBuilder::init()
    ->filters(
        CardGroupRequestBuilder::init()
            ->colCoId(0)
            ->colCoCode(14)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->account(
                [
                    AccountsBuilder::init()
                        ->accountId(66)
                        ->accountNumber('AccountNumber2')
                        ->build(),
                    AccountsBuilder::init()
                        ->accountId(66)
                        ->accountNumber('AccountNumber2')
                        ->build()
                ]
            )
            ->build()
    )
    ->page(1)
    ->pageSize(100)
    ->build();
```

