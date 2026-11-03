
# Summaryofbundle Response

## Structure

`SummaryofbundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id of the bundles and cards.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the bundles and cards.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | - | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the bundle.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `countOfCardsNotInBundle` | `?int` | Optional | Count of cards that are not part of the bundle in a given account. | getCountOfCardsNotInBundle(): ?int | setCountOfCardsNotInBundle(?int countOfCardsNotInBundle): void |
| `cardBundles` | [`?CardBundle`](../../doc/models/card-bundle.md) | Optional | - | getCardBundles(): ?CardBundle | setCardBundles(?CardBundle cardBundles): void |

## Example

```php
use ShellCardManagementAPIsLib\Models\Builders\SummaryofbundleResponseBuilder;

$summaryofbundleResponse = SummaryofbundleResponseBuilder::init()
    ->payerId(138)
    ->payerNumber('PayerNumber0')
    ->accountId(198)
    ->accountNumber('AccountNumber2')
    ->countOfCardsNotInBundle(2)
    ->build();
```

