
# Response Delivery Address Update

## Structure

`ResponseDeliveryAddressUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the requests. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(DeliveryAddressUpdateStatusEnum)`](../../doc/models/delivery-address-update-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `mainReference` | `?int` | Optional | Main reference number for tracking. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `data` | [`?(Datum[])`](../../doc/models/datum.md) | Optional | List of Delivery address update entity. The fields of this entity are described below. | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\ResponseDeliveryAddressUpdateBuilder;
use ShellCardManagementAPIsLib\Models\DeliveryAddressUpdateStatusEnum;
use ShellCardManagementAPIsLib\Models\Builders\DatumBuilder;

$responseDeliveryAddressUpdate = ResponseDeliveryAddressUpdateBuilder::init(
    '00002098-0000-0000-0000-000000000000',
    DeliveryAddressUpdateStatusEnum::FAILED
)
    ->mainReference(123455)
    ->data(
        [
            DatumBuilder::init()
                ->cardId(224)
                ->cardPAN('CardPAN2')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->referenceId(108)
                ->build(),
            DatumBuilder::init()
                ->cardId(224)
                ->cardPAN('CardPAN2')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->referenceId(108)
                ->build(),
            DatumBuilder::init()
                ->cardId(224)
                ->cardPAN('CardPAN2')
                ->accountId(62)
                ->accountNumber('AccountNumber8')
                ->referenceId(108)
                ->build()
        ]
    )
    ->build();
```

