
# Search Card

SearchCard

## Structure

`SearchCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Unique Card Id<br>Optional if PAN is given, else mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Card PAN.<br>Optional if CardId is given, else mandatory.<br>Note: PAN is ignored if CardId is given. | getPAN(): ?string | setPAN(?string pAN): void |
| `pANID` | `?float` | Optional | Card PANID<br>optional id cardid given, else mandatory<br>Note: PANID is ignored if CardId is given. | getPANID(): ?float | setPANID(?float pANID): void |

## Example (as JSON)

```json
{
  "CardId": 32,
  "PAN": "PAN2",
  "PANID": 236.16
}
```

