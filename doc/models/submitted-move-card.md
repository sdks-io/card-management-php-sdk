
# Submitted Move Card

## Structure

`SubmittedMoveCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?string` | Optional | - | getAccountId(): ?string | setAccountId(?string accountId): void |
| `accountNumber` | `?string` | Optional | - | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardId` | `?string` | Optional | Card Id of the card. | getCardId(): ?string | setCardId(?string cardId): void |
| `pAN` | `?string` | Optional | PAN of the card | getPAN(): ?string | setPAN(?string pAN): void |
| `moveCardReference` | `?string` | Optional | Reference number for tracking of update status request of the specific card, | getMoveCardReference(): ?string | setMoveCardReference(?string moveCardReference): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SubmittedMoveCardBuilder;

$submittedMoveCard = SubmittedMoveCardBuilder::init()
    ->accountId('AccountId0')
    ->accountNumber('AccountNumber4')
    ->cardId('CardId4')
    ->pAN('PAN6')
    ->moveCardReference('MoveCardReference6')
    ->build();
```

