
# Bundle Details Response

## Structure

`BundleDetailsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id of the bundles and cards.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the bundles and cards.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the bundle.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the bundle.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `bundleId` | `?string` | Optional | unique identifier for the Card Bundle | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `externalBundleId` | `?string` | Optional | External system allocated Card Bundle identifier for Card Bundle. | getExternalBundleId(): ?string | setExternalBundleId(?string externalBundleId): void |
| `description` | `?string` | Optional | Card Bundle Description. | getDescription(): ?string | setDescription(?string description): void |
| `pans` | `?(string[])` | Optional | List of Card Pans added to the card bundle. | getPans(): ?array | setPans(?array pans): void |
| `restrictionCurrencyCode` | `?string` | Optional | ISO currency code of the country.<br>Example: GBP | getRestrictionCurrencyCode(): ?string | setRestrictionCurrencyCode(?string restrictionCurrencyCode): void |
| `restrictionCurrencySymbol` | `?string` | Optional | Currency symbol of the country.<br>Example: £, $ | getRestrictionCurrencySymbol(): ?string | setRestrictionCurrencySymbol(?string restrictionCurrencySymbol): void |
| `restrictions` | [`?BundledRestrictionsList`](../../doc/models/bundled-restrictions-list.md) | Optional | - | getRestrictions(): ?BundledRestrictionsList | setRestrictions(?BundledRestrictionsList restrictions): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "PayerId": 172,
  "PayerNumber": "PayerNumber4",
  "AccountId": 232,
  "AccountNumber": "AccountNumber6",
  "BundleId": "BundleId4"
}
```

