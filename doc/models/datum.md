
# Datum

## Structure

`Datum`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id. | getCardId(): ?int | setCardId(?int cardId): void |
| `cardPAN` | `?string` | Optional | PAN of the card. | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `accountId` | `?int` | Optional | Account id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `referenceId` | `?int` | Optional | Individual delivery address update reference number for the delivery address update request. | getReferenceId(): ?int | setReferenceId(?int referenceId): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\DatumBuilder;

$datum = DatumBuilder::init()
    ->cardId(12345)
    ->cardPAN('7002051006629889654')
    ->accountId(12356)
    ->accountNumber('GB000000124')
    ->referenceId(573567)
    ->build();
```

