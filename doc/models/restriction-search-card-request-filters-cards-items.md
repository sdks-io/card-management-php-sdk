
# Restriction Search Card Request Filters Cards Items

## Structure

`RestrictionSearchCardRequestFiltersCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pAN` | `?string` | Optional | Card PAN.<br>Optional if CardId is given, else mandatory.<br>Note: PAN is ignored if CardId is given. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardId` | `?int` | Optional | Unique Card Id in GFN.<br>Optional if PAN is given, else mandatory. | getCardId(): ?int | setCardId(?int cardId): void |

## Example (as JSON)

```json
{
  "PAN": "PAN0",
  "CardId": 72
}
```

