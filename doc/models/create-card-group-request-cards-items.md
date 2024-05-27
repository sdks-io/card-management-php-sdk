
# Create Card Group Request Cards Items

## Structure

`CreateCardGroupRequestCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the account of the card.<br>Optional if AccountNumber is passed, else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the account of the card.<br>Optional if AccountId is passed, else Mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory. | getPAN(): ?string | setPAN(?string pAN): void |

## Example (as JSON)

```json
{
  "AccountId": 164,
  "AccountNumber": "AccountNumber4",
  "CardId": 70,
  "PAN": "PAN6"
}
```

