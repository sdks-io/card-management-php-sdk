
# Search Card Request

## Structure

`SearchCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?Filters`](../../doc/models/filters.md) | Optional | - | getFilters(): ?Filters | setFilters(?Filters filters): void |
| `pageSize` | `?string` | Optional | Page Size – Number of records to show on a page<br>Optional<br>Default value 50 | getPageSize(): ?string | setPageSize(?string pageSize): void |
| `page` | `?string` | Optional | Page Number | getPage(): ?string | setPage(?string page): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SearchCardRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\FiltersBuilder;

$searchCardRequest = SearchCardRequestBuilder::init()
    ->filters(
        FiltersBuilder::init(
            [
                'CardStatus7',
                'CardStatus8'
            ]
        )
            ->accountId(108)
            ->accountNumber('AccountNumber2')
            ->cardGroupId(154)
            ->cardGroupName('CardGroupName4')
            ->cardSegment('CardSegment4')
            ->build()
    )
    ->pageSize('1')
    ->page('1')
    ->build();
```

