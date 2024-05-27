
# Card Type Request

## Structure

`CardTypeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Optional if AccountNumber is passed else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed else Mandatory<br>Example: GB000000124 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `includeUsageRestrictions` | `?bool` | Optional | Include usage restrictions in the response.<br>Optional field– default value is False.<br>Possible values: True/False | getIncludeUsageRestrictions(): ?bool | setIncludeUsageRestrictions(?bool includeUsageRestrictions): void |
| `includePurchaseCategories` | `?bool` | Optional | Include purchase categories in the response.<br>Optional field– default value is False.<br>Possible values: True/False | getIncludePurchaseCategories(): ?bool | setIncludePurchaseCategories(?bool includePurchaseCategories): void |

## Example (as JSON)

```json
{
  "ColCoId": 14,
  "ColCoCode": 14,
  "PayerId": 2343,
  "PayerNumber": "GB000000124",
  "AccountId": 343,
  "AccountNumber": "GB000000124"
}
```

