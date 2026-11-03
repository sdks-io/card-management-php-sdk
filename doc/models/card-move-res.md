
# Card Move Res

## Structure

`CardMoveRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request ID | getRequestId(): ?string | setRequestId(?string requestId): void |
| `mainReference` | `?int` | Optional | Move-Card reference number for tracking the execution of the request. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `status` | `?string` | Optional | API Request Overall status | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SubmittedMoveCard[])`](../../doc/models/submitted-move-card.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardMoveResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\SubmittedMoveCardBuilder;

$cardMoveRes = CardMoveResBuilder::init()
    ->requestId('RequestId0')
    ->mainReference(240)
    ->status('Status6')
    ->data(
        [
            SubmittedMoveCardBuilder::init()
                ->accountId('AccountId4')
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->moveCardReference('MoveCardReference0')
                ->build(),
            SubmittedMoveCardBuilder::init()
                ->accountId('AccountId4')
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->moveCardReference('MoveCardReference0')
                ->build(),
            SubmittedMoveCardBuilder::init()
                ->accountId('AccountId4')
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->moveCardReference('MoveCardReference0')
                ->build()
        ]
    )
    ->build();
```

