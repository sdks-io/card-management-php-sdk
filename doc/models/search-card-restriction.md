
# Search Card Restriction

## Structure

`SearchCardRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Unique Card Id<br>Optional if PAN is given, else mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Card PAN.<br>Optional if CardId is given, else mandatory.<br>Note: PAN is ignored if CardId is given.<br>Example: 7002051006629890645 | getPAN(): ?string | setPAN(?string pAN): void |

## Example (as JSON)

```json
{
  "CardId": 186,
  "PAN": "PAN4"
}
```

