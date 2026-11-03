
# Account Req

## Structure

`AccountReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?AccountRequest`](../../doc/models/account-request.md) | Optional | - | getFilters(): ?AccountRequest | setFilters(?AccountRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AccountReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\AccountRequestBuilder;

$accountReq = AccountReqBuilder::init()
    ->filters(
        AccountRequestBuilder::init()
            ->status('Status6')
            ->includeCardSummary(false)
            ->payerId(48)
            ->payerNumber('PayerNumber0')
            ->pageSize(56)
            ->build()
    )
    ->page(1)
    ->pageSize(100)
    ->build();
```

