
# Auto Renew Card Request

## Structure

`AutoRenewCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerNumber` | `?string` | Optional | Payer Number (Ex: GB000000123) of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerId` | `?int` | Optional | Payer Id  of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `autoRenewCards` | [`?(AutoRenewCardRequestAutoRenewCardsItems[])`](../../doc/models/auto-renew-card-request-auto-renew-cards-items.md) | Optional | - | getAutoRenewCards(): ?array | setAutoRenewCards(?array autoRenewCards): void |

## Example (as JSON)

```json
{
  "ColCoId": 138,
  "ColCoCode": 152,
  "PayerNumber": "PayerNumber2",
  "PayerId": 186,
  "AutoRenewCards": [
    {
      "AccountNumber": "AccountNumber6",
      "AccountId": 112,
      "PAN": "PAN8",
      "CardId": 18,
      "ReissueSetting": false
    }
  ]
}
```

