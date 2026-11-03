
# Card Restriction Res

## Structure

`CardRestrictionRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(RestrictioncardsRes[])`](../../doc/models/restrictioncards-res.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `errors` | [`?ErrorObject`](../../doc/models/error-object.md) | Optional | - | getErrors(): ?ErrorObject | setErrors(?ErrorObject errors): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\CardRestrictionResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\RestrictioncardsResBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorObjectBuilder;
use ShellCardManagementAPIsLib\Models\Builders\ErrorDetailsBuilder;

$cardRestrictionRes = CardRestrictionResBuilder::init()
    ->requestId('0e6fb42a-51b0-43b2-f010-92f822657f6a')
    ->status('SUCCESS')
    ->data(
        [
            RestrictioncardsResBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->build(),
            RestrictioncardsResBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->build(),
            RestrictioncardsResBuilder::init()
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->cardId('CardId8')
                ->pAN('PAN0')
                ->usageRestrictionStatus('UsageRestrictionStatus8')
                ->build()
        ]
    )
    ->errors(
        ErrorObjectBuilder::init()
            ->requestId('RequestId4')
            ->status('Status2')
            ->errors(
                [
                    ErrorDetailsBuilder::init()
                        ->code('Code4')
                        ->title('Title6')
                        ->detail('Detail6')
                        ->additionalInfo(
                            [
                                'key0' => 'AdditionalInfo0',
                                'key1' => 'AdditionalInfo1',
                                'key2' => 'AdditionalInfo2'
                            ]
                        )
                        ->build()
                ]
            )
            ->build()
    )
    ->build();
```

