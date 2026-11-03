
# Card Move Request Cards Items

## Structure

`CardMoveRequestCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | - | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountId` | `?int` | Optional | - | getAccountId(): ?int | setAccountId(?int accountId): void |
| `pAN` | `?string` | Optional | - | getPAN(): ?string | setPAN(?string pAN): void |
| `cardId` | `?int` | Optional | - | getCardId(): ?int | setCardId(?int cardId): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardMoveRequestCardsItemsBuilder;

$cardMoveRequestCardsItems = CardMoveRequestCardsItemsBuilder::init()
    ->accountNumber('AccountNumber2')
    ->accountId(62)
    ->pAN('PAN4')
    ->cardId(224)
    ->build();
```

