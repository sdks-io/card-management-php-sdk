
# Accounts

## Structure

`Accounts`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Optional, if AccountNumber is passed, else mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional, if AccountId is passed, else mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |

## Example (as JSON)

```json
{
  "AccountId": 3453,
  "AccountNumber": "GB000000124"
}
```

