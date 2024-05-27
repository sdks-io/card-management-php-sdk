
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

## Example (as JSON)

```json
{
  "CardId": 122,
  "PANID": 154,
  "PAN": 52,
  "CardExpiryDate": "CardExpiryDate4",
  "ReferenceId": 46
}
```

