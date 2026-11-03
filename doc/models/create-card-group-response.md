
# Create Card Group Response

## Structure

`CreateCardGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainReference` | `?int` | Optional | Reference number for tracking the execution of the requests – new Card Group creation and to move the cards to the new card group.<br>Reference number will be null when the validations of new card group parameters fail. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `newCardGroupReference` | `?int` | Optional | Reference number for tracking the execution of card group creation.<br>Reference number will be null when the validations of new card group parameters fail. | getNewCardGroupReference(): ?int | setNewCardGroupReference(?int newCardGroupReference): void |
| `successfulRequests` | [`?(CreateCardGroupResponseSuccessfulRequestsItems[])`](../../doc/models/create-card-group-response-successful-requests-items.md) | Optional | List of cards validated and submitted successfully for processing. | getSuccessfulRequests(): ?array | setSuccessfulRequests(?array successfulRequests): void |
| `errorCards` | [`?(CreateCardGroupResponseErrorCardsItems[])`](../../doc/models/create-card-group-response-error-cards-items.md) | Optional | List of cards that failed validation and not submitted for processing.<br>Entity: FailedCardReference<br>This list will be empty when the validations of new card group parameters fail. | getErrorCards(): ?array | setErrorCards(?array errorCards): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseSuccessfulRequestsItemsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseErrorCardsItemsBuilder;

$createCardGroupResponse = CreateCardGroupResponseBuilder::init()
    ->mainReference(12345)
    ->newCardGroupReference(1234)
    ->successfulRequests(
        [
            CreateCardGroupResponseSuccessfulRequestsItemsBuilder::init()
                ->cardId(18)
                ->pAN('PAN0')
                ->reference(228)
                ->build()
        ]
    )
    ->errorCards(
        [
            CreateCardGroupResponseErrorCardsItemsBuilder::init()
                ->cardId(136)
                ->pAN('PAN6')
                ->errorCode('ErrorCode0')
                ->errorDescription('ErrorDescription6')
                ->build(),
            CreateCardGroupResponseErrorCardsItemsBuilder::init()
                ->cardId(136)
                ->pAN('PAN6')
                ->errorCode('ErrorCode0')
                ->errorDescription('ErrorDescription6')
                ->build()
        ]
    )
    ->build();
```

