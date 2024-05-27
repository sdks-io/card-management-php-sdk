
# Create Card Group Response Successful Requests Items

## Structure

`CreateCardGroupResponseSuccessfulRequestsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id of the card. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card. | getPAN(): ?string | setPAN(?string pAN): void |
| `reference` | `?int` | Optional | Reference number for tracking of update status request of the specific card, | getReference(): ?int | setReference(?int reference): void |

## Example (as JSON)

```json
{
  "CardId": 250,
  "PAN": "PAN0",
  "Reference": 204
}
```

