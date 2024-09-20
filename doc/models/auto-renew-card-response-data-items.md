
# Auto Renew Card Response Data Items

## Structure

`AutoRenewCardResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoRenewReferenceId` | `?int` | Optional | CardId and PAN of the card. ;( Semicolon is used as delimiter. | getAutoRenewReferenceId(): ?int | setAutoRenewReferenceId(?int autoRenewReferenceId): void |
| `cardIdAndPAN` | `?string` | Optional | Reference number for each individual auto renew card in the order. | getCardIdAndPAN(): ?string | setCardIdAndPAN(?string cardIdAndPAN): void |
| `pANID` | `?float` | Optional | PANID of the card | getPANID(): ?float | setPANID(?float pANID): void |

## Example (as JSON)

```json
{
  "AutoRenewReferenceId": 84,
  "CardIdAndPAN": "CardIdAndPAN6",
  "PANID": 48.46
}
```

