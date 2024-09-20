
# Account Restriction Request

## Structure

`AccountRestrictionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer on which the restrictions will be applied.<br>Optional if AccountNumber is passed, else Mandatory.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer on which the restrictions will be applied.<br>Optional if AccountId is passed, else Mandatory.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `resetUsageRestrictions` | `?bool` | Optional | True/False.<br>If true, the usage restrictions applied on the account will be removed.<br>Optional<br>Default: False | getResetUsageRestrictions(): ?bool | setResetUsageRestrictions(?bool resetUsageRestrictions): void |
| `usageRestrictions` | `?array` | Optional | - | getUsageRestrictions(): ?array | setUsageRestrictions(?array usageRestrictions): void |

## Example (as JSON)

```json
{
  "ColCoId": 138,
  "ColCoCode": 152,
  "PayerId": 186,
  "PayerNumber": "PayerNumber8",
  "AccountId": 246
}
```

