
# Auto Renew Card Request Auto Renew Cards Items

## Structure

`AutoRenewCardRequestAutoRenewCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed, else Mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Optional if AccountNumber is passed, else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory. | getPAN(): ?string | setPAN(?string pAN): void |
| `pANID` | `?float` | Optional | Card PAN ID.<br>Optional if CardId is given, else mandatory.<br>Note: PANID is ignored if CardId is given. | getPANID(): ?float | setPANID(?float pANID): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `reissueSetting` | `bool` | Required | Reissue setting of the card.<br>Values:<br>True – Card will be Reissued when nearing its expiry date<br>False – Card will not be Reissued<br>Mandatory | getReissueSetting(): bool | setReissueSetting(bool reissueSetting): void |

## Example (as JSON)

```json
{
  "AccountNumber": "AccountNumber4",
  "AccountId": 178,
  "PAN": "PAN6",
  "PANID": 75.4,
  "CardId": 84,
  "ReissueSetting": false
}
```

