
# Finance Currency 2

## Structure

`FinanceCurrency2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyCode` | `?string` | Optional | Currency ISO Code used for the Finance Widget. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Currency Symbol | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `invoiceExchangeRate` | `?float` | Optional | Factor to be used for converting the amounts in invoice currency to finance widget currency. (If finance currency is same as invoice currency, then the value of this field will be “1” so that the value does not change) | getInvoiceExchangeRate(): ?float | setInvoiceExchangeRate(?float invoiceExchangeRate): void |
| `creditLimitExchangeRate` | `?float` | Optional | Factor to be used for converting the amounts in credit limit currency to finance widget currency. (If finance currency is same as credit limit currency, then the value of this field will be “1” so that the value does not change) | getCreditLimitExchangeRate(): ?float | setCreditLimitExchangeRate(?float creditLimitExchangeRate): void |

## Example (as JSON)

```json
{
  "CurrencyCode": "EUR",
  "CurrencySymbol": "€",
  "Invoice_ExchangeRate": 1.0,
  "CreditLimit_ExchangeRate": 1.0
}
```

