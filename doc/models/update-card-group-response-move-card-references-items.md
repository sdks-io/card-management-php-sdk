
# Update Card Group Response Move Card References Items

## Structure

`UpdateCardGroupResponseMoveCardReferencesItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Example: 123 | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Example: 7002051123456789145 | getPAN(): ?string | setPAN(?string pAN): void |
| `reference` | `?int` | Optional | Reference number for tracking of update status request of the specific card. | getReference(): ?int | setReference(?int reference): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateCardGroupResponseMoveCardReferencesItemsBuilder;

$updateCardGroupResponseMoveCardReferencesItems = UpdateCardGroupResponseMoveCardReferencesItemsBuilder::init()
    ->cardId(123456)
    ->pAN('7002097550439850717')
    ->reference(123456)
    ->build();
```

