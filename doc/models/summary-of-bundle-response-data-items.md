
# Summary of Bundle Response Data Items

## Structure

`SummaryOfBundleResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id of the bundles and cards.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the bundles and cards.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the bundle.<br>Example: 123456 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the bundle.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `countOfCardsNotInBundle` | `?int` | Optional | Count of cards that are not part of the bundle in a given account. | getCountOfCardsNotInBundle(): ?int | setCountOfCardsNotInBundle(?int countOfCardsNotInBundle): void |
| `cardBundles` | [`?(SummaryOfBundleResponseDataItemsCardBundlesItems[])`](../../doc/models/summary-of-bundle-response-data-items-card-bundles-items.md) | Optional | List of Card Bundles | getCardBundles(): ?array | setCardBundles(?array cardBundles): void |

## Example (as JSON)

```json
{
  "PayerId": 102,
  "PayerNumber": "PayerNumber6",
  "AccountId": 162,
  "AccountNumber": "AccountNumber8",
  "CountOfCardsNotInBundle": 222
}
```

