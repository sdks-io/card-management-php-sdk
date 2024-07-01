
# Summaryofbundle Response

## Structure

`SummaryofbundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Request Id of the API call | getRequestId(): ?string | setRequestId(?string requestId): void |
| `payerId` | `?int` | Optional | Payer Id of the bundles and cards.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the bundles and cards.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | - | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the bundle.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `countOfCardsNotInBundle` | `?int` | Optional | Count of cards that are not part of the bundle in a given account. | getCountOfCardsNotInBundle(): ?int | setCountOfCardsNotInBundle(?int countOfCardsNotInBundle): void |
| `cardBundles` | [`?CardBundle`](../../doc/models/card-bundle.md) | Optional | - | getCardBundles(): ?CardBundle | setCardBundles(?CardBundle cardBundles): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "PayerId": 70,
  "PayerNumber": "PayerNumber2",
  "AccountId": 130,
  "AccountNumber": "AccountNumber4"
}
```

