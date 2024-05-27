
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

## Example (as JSON)

```json
{
  "AccountNumber": "45346346443",
  "BankName": "swiss",
  "AccountName": "ARIM SERVIS",
  "DateEffective": "20200808",
  "IBAN": "CZ6508000000192000145399",
  "CurrencyCode": "EUR",
  "CurrencySymbol": "€",
  "CountryISOCode": "DE",
  "Country": "Germany",
  "SortCode": "0100",
  "SwiftCode": "KOMBCZPPXXX",
  "BankType": "1-Test",
  "DateTerminated": "DateTerminated0"
}
```

