
# Card Group Response Card Groups Items

## Structure

`CardGroupResponseCardGroupsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id for the associated card group | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account number for the associated card group | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account short name for the associated card group | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `activeCards` | `?int` | Optional | Total number of active cards for the given search criteria | getActiveCards(): ?int | setActiveCards(?int activeCards): void |
| `blockedCards` | `?int` | Optional | Total number of cards for the given search criteria that are permanently blocked | getBlockedCards(): ?int | setBlockedCards(?int blockedCards): void |
| `cancelledCards` | `?int` | Optional | Total number of cards for the given search criteria that are cancelled | getCancelledCards(): ?int | setCancelledCards(?int cancelledCards): void |
| `cardDeliveryPoint` | `?bool` | Optional | card delivery point enabled or not | getCardDeliveryPoint(): ?bool | setCardDeliveryPoint(?bool cardDeliveryPoint): void |
| `cardGroupId` | `?int` | Optional | Id of the card group matching the search criteria. | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Name of the card group matching the search criteria. | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `cardTypeCode` | `?string` | Optional | Card Type Code | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeId` | `?int` | Optional | Card Type Id | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `expiredCards` | `?int` | Optional | Total number of expired cards for the given search criteria | getExpiredCards(): ?int | setExpiredCards(?int expiredCards): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card.<br>Format: yyyyMMdd<br>Note: Clients to convert this to appropriate DateTime type. | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `printOnCard` | `?bool` | Optional | PrintOnCard true/false | getPrintOnCard(): ?bool | setPrintOnCard(?bool printOnCard): void |
| `renewalPendingCards` | `?int` | Optional | Total number of Renewal Pending Cards for the given search criteria | getRenewalPendingCards(): ?int | setRenewalPendingCards(?int renewalPendingCards): void |
| `replacedCards` | `?int` | Optional | - | getReplacedCards(): ?int | setReplacedCards(?int replacedCards): void |
| `status` | `?string` | Optional | Status of the card group. | getStatus(): ?string | setStatus(?string status): void |
| `temporaryBlockByCustomer` | `?int` | Optional | Total number of cards for the given search criteria that are temporarily blocked by customer | getTemporaryBlockByCustomer(): ?int | setTemporaryBlockByCustomer(?int temporaryBlockByCustomer): void |
| `temporaryBlockByShell` | `?int` | Optional | Total number of cards for the given search criteria that are temporarily blocked by Shell | getTemporaryBlockByShell(): ?int | setTemporaryBlockByShell(?int temporaryBlockByShell): void |
| `terminatedDate` | `?string` | Optional | Terminated Date.<br>Format: yyyyMMdd<br>Note: Clients to convert this to appropriate Date Time type. | getTerminatedDate(): ?string | setTerminatedDate(?string terminatedDate): void |
| `totalCards` | `?int` | Optional | Total number of cards for the given search criteria | getTotalCards(): ?int | setTotalCards(?int totalCards): void |

## Example (as JSON)

```json
{
  "AccountId": 1229,
  "AccountNumber": "CZ00000929",
  "AccountShortName": "Dominica South1",
  "ActiveCards": 0,
  "BlockedCards": 1,
  "CancelledCards": 0,
  "CardGroupId": 1234,
  "CardGroupName": "1234T",
  "CardTypeCode": "0123",
  "CardTypeId": 123,
  "CardTypeName": "test",
  "ExpiredCards": 0,
  "ExpiryDate": "20231231",
  "RenewalPendingCards": 5,
  "ReplacedCards": 0,
  "Status": "TERMINATED",
  "TemporaryBlockByCustomer": 0,
  "TemporaryBlockByShell": 0,
  "TerminatedDate": "20210712",
  "TotalCards": 10
}
```

