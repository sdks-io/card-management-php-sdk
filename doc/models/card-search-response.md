
# Card Search Response

## Structure

`CardSearchResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCES | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(Card[])`](../../doc/models/card.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Specifies the returned page of the results | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Specifies the number of records to be returned which could be less than the PageSize in the request | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `totalPages` | `?int` | Optional | Specifies the total pages available in the result | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `totalRecords` | `?int` | Optional | Specifies the total pages available in the result | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardSearchResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CardBuilder;

$cardSearchResponse = CardSearchResponseBuilder::init()
    ->requestId('RequestId2')
    ->status('Status8')
    ->data(
        [
            CardBuilder::init()
                ->accountId(62)
                ->accountName('AccountName4')
                ->accountNumber('AccountNumber8')
                ->accountShortName('AccountShortName0')
                ->bundleId('BundleId6')
                ->build(),
            CardBuilder::init()
                ->accountId(62)
                ->accountName('AccountName4')
                ->accountNumber('AccountNumber8')
                ->accountShortName('AccountShortName0')
                ->bundleId('BundleId6')
                ->build(),
            CardBuilder::init()
                ->accountId(62)
                ->accountName('AccountName4')
                ->accountNumber('AccountNumber8')
                ->accountShortName('AccountShortName0')
                ->bundleId('BundleId6')
                ->build()
        ]
    )
    ->page(148)
    ->pageSize(128)
    ->build();
```

