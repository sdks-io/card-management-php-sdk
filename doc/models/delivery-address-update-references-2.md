
# Delivery Address Update References 2

## Structure

`DeliveryAddressUpdateReferences2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | CardId | getCardId(): ?int | setCardId(?int cardId): void |
| `cardPAN` | `?string` | Optional | PAN of the card. | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `accountId` | `?int` | Optional | AccountId | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `referenceId` | `?int` | Optional | Individual delivery address update reference number for the delivery address update request. | getReferenceId(): ?int | setReferenceId(?int referenceId): void |
| `errorInfo` | `?string` | Optional | Individual error information for the delivery address update request. | getErrorInfo(): ?string | setErrorInfo(?string errorInfo): void |

## Example (as JSON)

```json
{
  "CardId": 12345,
  "CardPAN": "7002051006629889654",
  "AccountId": 12356,
  "AccountNumber": "GB000000124",
  "ReferenceId": 573567,
  "ErrorInfo": "null"
}
```

