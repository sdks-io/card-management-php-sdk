
# PIN Reminder Request

This entity models the data that is received in the https request body of the PINReminder operation.

## Structure

`PINReminderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the customer.<br /><br>Optional if AccountNumber is passed, else Mandatory.<br /><br>This input is a search criterion, if given. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br /><br>Optional if AccountId is passed, else Mandatory.<br /><br>This input is a search criterion, if given. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer. <br /><br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. <br /><br>It is optional for other countries if ColCoID is provided. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer<br /><br>Optional if ColCoCode is passed else Mandatory. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer of the selected payer.<br /><br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number (Ex: GB000000123) of the selected payer.<br /><br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `pINReminderCardDetails` | [`?(PINReminderCardDetails[])`](../../doc/models/pin-reminder-card-details.md) | Optional | List of PINReminderCardDetails entity. The fields of this entity are described below. | getPINReminderCardDetails(): ?array | setPINReminderCardDetails(?array pINReminderCardDetails): void |

## Example (as JSON)

```json
{
  "AccountId": 178,
  "AccountNumber": "AccountNumber6",
  "ColCoCode": 84,
  "ColCoId": 70,
  "PayerId": 118
}
```

