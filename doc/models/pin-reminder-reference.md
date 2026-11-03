
# PIN Reminder Reference

This class holds the PIN Reminder References

## Structure

`PINReminderReference`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `pANID` | `?int` | Optional | PAN ID | getPANID(): ?int | setPANID(?int pANID): void |
| `pAN` | `?int` | Optional | PAN | getPAN(): ?int | setPAN(?int pAN): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br>Mandatory if Either PAN or PANID is passed, else optional.<br>Format: yyyyMMdd | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `referenceId` | `?int` | Optional | Individual card pin reminder reference number for the Pin Reminder request. | getReferenceId(): ?int | setReferenceId(?int referenceId): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\PINReminderReferenceBuilder;

$pINReminderReference = PINReminderReferenceBuilder::init()
    ->cardId(226)
    ->pANID(2)
    ->pAN(156)
    ->cardExpiryDate('CardExpiryDate6')
    ->referenceId(106)
    ->build();
```

