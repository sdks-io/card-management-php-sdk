
# Payer Req

## Structure

`PayerReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?PayerRequest`](../../doc/models/payer-request.md) | Optional | - | getFilters(): ?PayerRequest | setFilters(?PayerRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PayerReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PayerRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\PayersBuilder;

$payerReq = PayerReqBuilder::init()
    ->filters(
        PayerRequestBuilder::init()
            ->payers(
                [
                    PayersBuilder::init()
                        ->colCoId(78)
                        ->colCoCode(92)
                        ->payerId(126)
                        ->payerNumber('PayerNumber0')
                        ->payerName('PayerName0')
                        ->build()
                ]
            )
            ->returnBasicDetailsOnly(false)
            ->includeAddresses(false)
            ->includeBonusParameters(false)
            ->build()
    )
    ->page(1)
    ->pageSize(100)
    ->build();
```

