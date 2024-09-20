
# Submitted Card

Response entity object for SubmittedCard list <br/>Note: This list will be empty for status 9006 and 9012 i.e., request for all the cards failed.

## Structure

`SubmittedCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `replacementCardReference` | `?int` | Optional | Reference number for tracking of replacement card order request of the specific card,<br /><br>This is applicable for requests with target status as Block and OrderReplacement passed as True. | getReplacementCardReference(): ?int | setReplacementCardReference(?int replacementCardReference): void |
| `updateCardReference` | `?int` | Optional | Reference number for tracking of update status request of the specific card, | getUpdateCardReference(): ?int | setUpdateCardReference(?int updateCardReference): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br /><br>Optional if AccountNumber is passed, else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br /><br>Optional if AccountId is passed, else Mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br /><br>Mandatory if PAN is passed, else optional.<br /><br>Format: yyyyMMdd | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br /><br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `colCoCode` | `?int` | Optional | Collecting company code of the customer. <br /><br>Optional if ColCoId is passed, else Mandatory.<br /> | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting company id of the customer. <br /><br>Optional if ColCoCode is passed, else Mandatory.<br /> | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br /><br>Optional if CardId is passed, else Mandatory.<br /> | getPAN(): ?string | setPAN(?string pAN): void |
| `pANID` | `?float` | Optional | PANID of the card | getPANID(): ?float | setPANID(?float pANID): void |
| `maskedPAN` | `?string` | Optional | Card PAN | getMaskedPAN(): ?string | setMaskedPAN(?string maskedPAN): void |
| `payerId` | `?int` | Optional | Payer id of the customer.<br /><br>Optional if PayerNumber is passed, else Mandatory. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | PayerNumber of the customer.<br /><br>Optional if PayerId is passed, else Mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |

## Example (as JSON)

```json
{
  "ReplacementCardReference": 234,
  "UpdateCardReference": 140,
  "AccountId": 124,
  "AccountNumber": "AccountNumber8",
  "CardExpiryDate": "CardExpiryDate6"
}
```

