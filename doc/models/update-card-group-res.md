
# Update Card Group Res

## Structure

`UpdateCardGroupRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(UpdateCardGroupResponse[])`](../../doc/models/update-card-group-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\UpdateCardGroupResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UpdateCardGroupResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UpdateCardGroupResponseMoveCardReferencesItemsBuilder;

$updateCardGroupRes = UpdateCardGroupResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            UpdateCardGroupResponseBuilder::init()
                ->mainReference(166)
                ->updateCardGroupReference(110)
                ->newCardGroupReference(112)
                ->moveCardReferences(
                    [
                        UpdateCardGroupResponseMoveCardReferencesItemsBuilder::init()
                            ->cardId(234)
                            ->pAN('PAN6')
                            ->reference(188)
                            ->build()
                    ]
                )
                ->build(),
            UpdateCardGroupResponseBuilder::init()
                ->mainReference(166)
                ->updateCardGroupReference(110)
                ->newCardGroupReference(112)
                ->moveCardReferences(
                    [
                        UpdateCardGroupResponseMoveCardReferencesItemsBuilder::init()
                            ->cardId(234)
                            ->pAN('PAN6')
                            ->reference(188)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->build();
```

