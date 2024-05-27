
# Summary Response

Encapsulates the details of a Summary response.

## Structure

`SummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `activeCards` | `?int` | Optional | Total number of active cards for the given search criteria | getActiveCards(): ?int | setActiveCards(?int activeCards): void |
| `blockedCards` | `?int` | Optional | Total number of cards for the given search criteria that are permanently blocked (Blocked) | getBlockedCards(): ?int | setBlockedCards(?int blockedCards): void |
| `cancelledCards` | `?int` | Optional | Total number of cards for the given search criteria that are cancelled (at cancelled status) blocked by customer | getCancelledCards(): ?int | setCancelledCards(?int cancelledCards): void |
| `expiredCards` | `?int` | Optional | Total number of expired cards for the given search criteria | getExpiredCards(): ?int | setExpiredCards(?int expiredCards): void |
| `expiringCards` | `?int` | Optional | Cards that are active and expiring in X days, X should be configurable | getExpiringCards(): ?int | setExpiringCards(?int expiringCards): void |
| `fraudCards` | `?int` | Optional | Totalnumber of Cards in Fraud status for the given search criteria. | getFraudCards(): ?int | setFraudCards(?int fraudCards): void |
| `newCards` | `?int` | Optional | Total number of cards in New status for the given search criteria. | getNewCards(): ?int | setNewCards(?int newCards): void |
| `renewalPendingCards` | `?int` | Optional | Total number of Renewal Pending cards for the given search criteria | getRenewalPendingCards(): ?int | setRenewalPendingCards(?int renewalPendingCards): void |
| `replacedCards` | `?int` | Optional | Cards with status Replaced | getReplacedCards(): ?int | setReplacedCards(?int replacedCards): void |
| `temporaryBlockByCustomer` | `?int` | Optional | Total number of cards for the given search criteria that are temporarily blocked by customer | getTemporaryBlockByCustomer(): ?int | setTemporaryBlockByCustomer(?int temporaryBlockByCustomer): void |
| `temporaryBlockByShell` | `?int` | Optional | Total number of cards for the given search criteria that are temporarily blocked by Shell | getTemporaryBlockByShell(): ?int | setTemporaryBlockByShell(?int temporaryBlockByShell): void |
| `totalCards` | `?int` | Optional | Total number of cards for the given search criteria | getTotalCards(): ?int | setTotalCards(?int totalCards): void |

## Example (as JSON)

```json
{
  "ActiveCards": 142,
  "BlockedCards": 238,
  "CancelledCards": 240,
  "ExpiredCards": 238,
  "ExpiringCards": 4
}
```

