
# Col Co Access

## Structure

`ColCoAccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?string` | Optional | Collecting company ID. | getColCoId(): ?string | setColCoId(?string colCoId): void |
| `colCoCode` | `?string` | Optional | Collecting company code. | getColCoCode(): ?string | setColCoCode(?string colCoCode): void |
| `colCoCountryName` | `?string` | Optional | Collecting company’s Country name. ex: United Kingdom | getColCoCountryName(): ?string | setColCoCountryName(?string colCoCountryName): void |
| `issuingCountryNumber` | `?string` | Optional | Issuing Country Number.<br><br>ex: 032 - Czech Republic | getIssuingCountryNumber(): ?string | setIssuingCountryNumber(?string issuingCountryNumber): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ColCoAccessBuilder;

$colCoAccess = ColCoAccessBuilder::init()
    ->colCoId('14')
    ->colCoCode('14')
    ->colCoCountryName('DE')
    ->issuingCountryNumber('DE')
    ->build();
```

