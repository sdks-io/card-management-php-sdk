
# Order Card Enquiry Request

## Structure

`OrderCardEnquiryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?Filters2`](../../doc/models/filters-2.md) | Optional | - | getFilters(): ?Filters2 | setFilters(?Filters2 filters): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\OrderCardEnquiryRequestBuilder;
use ShellCardManagementAPIsLib\Models\Builders\Filters2Builder;

$orderCardEnquiryRequest = OrderCardEnquiryRequestBuilder::init()
    ->filters(
        Filters2Builder::init()
            ->accountId(108)
            ->accountNumber('AccountNumber2')
            ->colCoCode(14)
            ->colCoId(0)
            ->colCoCountryCode('ColCoCountryCode8')
            ->build()
    )
    ->build();
```

