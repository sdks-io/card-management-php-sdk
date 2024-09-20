
# Create Bundle Request

## Structure

`CreateBundleRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Either PayerId or PayerNumber or both must be passed.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Either PayerId or PayerNumber or both must be passed.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Either AccountId or AccountNumber or both must be passed.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Either AccountId or AccountNumber or both must be passed.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `externalBundleId` | `?string` | Optional | Identifier of the bundle in external system.<br>Optional. | getExternalBundleId(): ?string | setExternalBundleId(?string externalBundleId): void |
| `description` | `?string` | Optional | A bundle description.<br>Optional. | getDescription(): ?string | setDescription(?string description): void |
| `cards` | `?(string[])` | Optional | List of Card PANs to be added in the bundle.<br>Mandatory.<br>Example: 7002051006629890645<br>When PAN matches with multiple cards, the restriction will be applied on the latest issued card. | getCards(): ?array | setCards(?array cards): void |
| `restrictions` | `?array` | Optional | - | getRestrictions(): ?array | setRestrictions(?array restrictions): void |

## Example (as JSON)

```json
{
  "ColCoId": 246,
  "ColCoCode": 4,
  "PayerId": 38,
  "PayerNumber": "PayerNumber2",
  "AccountId": 98
}
```

