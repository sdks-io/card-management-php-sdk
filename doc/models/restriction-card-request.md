
# Restriction Card Request

## Structure

`RestrictionCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123<br>List of restrictions to be applied on the card. The details of CardRestriction entity is given below. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `cards` | [`?(RestrictionCardRequestCardsItems[])`](../../doc/models/restriction-card-request-cards-items.md) | Optional | List of restrictions to be applied on the card. The details of CardRestriction entity is given below. | getCards(): ?array | setCards(?array cards): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |

## Example (as JSON)

```json
{
  "ColCoId": 110,
  "PayerNumber": "PayerNumber6",
  "PayerId": 158,
  "Cards": [
    {
      "AccountNumber": "AccountNumber8",
      "AccountId": 184,
      "PAN": "PAN0",
      "CardId": 90,
      "ResetUsageRestrictions": false
    }
  ],
  "ColCoCode": 124
}
```

