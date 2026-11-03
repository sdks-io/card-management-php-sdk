
# Account Access

## Structure

`AccountAccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colcoId` | `?int` | Optional | Collecting company id. | getColcoId(): ?int | setColcoId(?int colcoId): void |
| `colcoCode` | `?int` | Optional | Collecting company code. | getColcoCode(): ?int | setColcoCode(?int colcoCode): void |
| `payerId` | `?int` | Optional | Payer Id to which the user has access | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number to which the user has access | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerName` | `?string` | Optional | Name of the Payer to which the user has access | getPayerName(): ?string | setPayerName(?string payerName): void |
| `accountId` | `?int` | Optional | Account Id to which the user has access | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number to which the user has access | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountName` | `?string` | Optional | Name of the Account to which the user has access | getAccountName(): ?string | setAccountName(?string accountName): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\AccountAccessBuilder;

$accountAccess = AccountAccessBuilder::init()
    ->colcoId(14)
    ->colcoCode(14)
    ->payerId(854)
    ->payerNumber('DE26688504')
    ->payerName('TK MobilPlus')
    ->accountId(435)
    ->accountNumber('DE26688504')
    ->accountName('TK Sub Account')
    ->build();
```

