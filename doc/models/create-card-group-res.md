
# Create Card Group Res

## Structure

`CreateCardGroupRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CreateCardGroupResponse[])`](../../doc/models/create-card-group-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseSuccessfulRequestsItemsBuilder;
use ShellCardManagementAPIsLib\Models\Builders\CreateCardGroupResponseErrorCardsItemsBuilder;

$createCardGroupRes = CreateCardGroupResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            CreateCardGroupResponseBuilder::init()
                ->mainReference(166)
                ->newCardGroupReference(112)
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
                ->build(),
            CreateCardGroupResponseBuilder::init()
                ->mainReference(166)
                ->newCardGroupReference(112)
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
                ->build()
        ]
    )
    ->build();
```

