
# Card Summary Request

## Structure

`CardSummaryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?Filters1`](../../doc/models/filters-1.md) | Optional | - | getFilters(): ?Filters1 | setFilters(?Filters1 filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardSummaryRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\Filters1Builder;

$cardSummaryRequest = CardSummaryRequestBuilder::init()
    ->filters(
        Filters1Builder::init()
            ->accountId(108)
            ->accountNumber('AccountNumber2')
            ->colCoCode(14)
            ->colCoCountryCode('ColCoCountryCode8')
            ->colCoId(0)
            ->cardStatus(
                [
                    'CardStatus7',
                    'CardStatus8'
                ]
            )
            ->requestId('RequestId0')
            ->build()
    )
    ->build();
```

