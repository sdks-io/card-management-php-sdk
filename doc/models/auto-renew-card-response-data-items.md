
# Auto Renew Card Response Data Items

## Structure

`AutoRenewCardResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoRenewReferenceId` | `?int` | Optional | CardId and PAN of the card. ;( Semicolon is used as delimiter. | getAutoRenewReferenceId(): ?int | setAutoRenewReferenceId(?int autoRenewReferenceId): void |
| `cardIdAndPAN` | `?string` | Optional | Reference number for each individual auto renew card in the order. | getCardIdAndPAN(): ?string | setCardIdAndPAN(?string cardIdAndPAN): void |

## Example (as JSON)

```json
{
  "AutoRenewReferenceId": 84,
  "CardIdAndPAN": "CardIdAndPAN6"
}
```

