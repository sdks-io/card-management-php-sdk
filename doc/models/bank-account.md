
# Bank Account

## Structure

`BankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `bankName` | `?string` | Optional | Bank Name | getBankName(): ?string | setBankName(?string bankName): void |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `dateEffective` | `?string` | Optional | Bank Account effective date for the payer | getDateEffective(): ?string | setDateEffective(?string dateEffective): void |
| `dateTerminated` | `?string` | Optional | Bank Account terminated date. Default is null | getDateTerminated(): ?string | setDateTerminated(?string dateTerminated): void |
| `iBAN` | `?string` | Optional | Bank Account IBAN for Payer | getIBAN(): ?string | setIBAN(?string iBAN): void |
| `currencyCode` | `?string` | Optional | Bank Account currency ISO code. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Bank Account currency Symbol. | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `countryISOCode` | `?string` | Optional | Bank Account Country ISO Code | getCountryISOCode(): ?string | setCountryISOCode(?string countryISOCode): void |
| `country` | `?string` | Optional | Bank Account Country Name<br>1-Austria<br>2-Belgium<br>3-Bulgaria<br>4-Croatia<br>5-Czech Republic | getCountry(): ?string | setCountry(?string country): void |
| `sortCode` | `?string` | Optional | Payer bank Sort Code | getSortCode(): ?string | setSortCode(?string sortCode): void |
| `swiftCode` | `?string` | Optional | Payer Bank Swift Code | getSwiftCode(): ?string | setSwiftCode(?string swiftCode): void |
| `bankType` | `?string` | Optional | Bank Type Id and Description | getBankType(): ?string | setBankType(?string bankType): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\BankAccountBuilder;

$bankAccount = BankAccountBuilder::init()
    ->accountNumber('45346346443')
    ->bankName('swiss')
    ->accountName('ARIM SERVIS')
    ->dateEffective('20200808')
    ->dateTerminated('DateTerminated4')
    ->iBAN('CZ6508000000192000145399')
    ->currencyCode('EUR')
    ->currencySymbol('€')
    ->countryISOCode('DE')
    ->country('Germany')
    ->sortCode('0100')
    ->swiftCode('KOMBCZPPXXX')
    ->bankType('1-Test')
    ->build();
```

