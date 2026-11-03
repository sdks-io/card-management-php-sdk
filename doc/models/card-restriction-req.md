
# Card Restriction Req

## Structure

`CardRestrictionReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `cards` | [`?RestrictionCardsList`](../../doc/models/restriction-cards-list.md) | Optional | - | getCards(): ?RestrictionCardsList | setCards(?RestrictionCardsList cards): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardRestrictionReqBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictionCardsListBuilder;

$cardRestrictionReq = CardRestrictionReqBuilder::init()
    ->colCoId(210)
    ->colCoCode(224)
    ->payerId(2)
    ->payerNumber('PayerNumber0')
    ->cards(
        RestrictionCardsListBuilder::init()
            ->accountId(184)
            ->cardId(90)
            ->pAN('PAN0')
            ->resetUsageRestrictions(false)
            ->resetDayTimeRestrictions(false)
            ->build()
    )
    ->build();
```

