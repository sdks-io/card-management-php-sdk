
# Delivery Address Update

List of cards for delivery address update. Maximum number of cards that can be provided in the list is 50

## Structure

`DeliveryAddressUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if  PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory.<br><br>Note: -<br>PAN & ExpiryDate parameters will be considered only if CardId & PANID are not provided. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br>Mandatory if PAN is passed, else optional.<br>Format: yyyyMMdd | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `useCustomerDefaultAddress` | `bool` | Required | Whether to use the default delivery address configured at customer (or card group) level as the delivery address for this card.<br>Mandatory<br>Note: If value is false then ‘UpdateCardRenewalAddress’ is mandatory. If value set to ‘True’ then<br>‘UpdateCardRenewalAddress’ may be null/empty. It will be ignored if provided. | getUseCustomerDefaultAddress(): bool | setUseCustomerDefaultAddress(bool useCustomerDefaultAddress): void |
| `updateCardRenewalAddress` | [`?UpdateCardRenewalAddress2`](../../doc/models/update-card-renewal-address-2.md) | Optional | - | getUpdateCardRenewalAddress(): ?UpdateCardRenewalAddress2 | setUpdateCardRenewalAddress(?UpdateCardRenewalAddress2 updateCardRenewalAddress): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\DeliveryAddressUpdateBuilder;
use ShellCardManagementAPIsLib\Models\Builders\UpdateCardRenewalAddress2Builder;

$deliveryAddressUpdate = DeliveryAddressUpdateBuilder::init(
    false
)
    ->cardId(123)
    ->pAN('7002051006629889654')
    ->cardExpiryDate('20170930')
    ->updateCardRenewalAddress(
        UpdateCardRenewalAddress2Builder::init(
            'ContactName2',
            'CompanyName4',
            'AddressLine8',
            'ZipCode6',
            186
        )
            ->contactTitle('ContactTitle8')
            ->city('City2')
            ->regionID(56)
            ->emailAddress('EmailAddress0')
            ->phoneNumber('PhoneNumber6')
            ->build()
    )
    ->build();
```

