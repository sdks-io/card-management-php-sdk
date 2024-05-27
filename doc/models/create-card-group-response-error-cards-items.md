
# Create Card Group Response Error Cards Items

## Structure

`CreateCardGroupResponseErrorCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id of the card. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card. | getPAN(): ?string | setPAN(?string pAN): void |
| `errorCode` | `?string` | Optional | Error code for validation failure. | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorDescription` | `?string` | Optional | Description of validation failure. | getErrorDescription(): ?string | setErrorDescription(?string errorDescription): void |

## Example (as JSON)

```json
{
  "CardId": 66,
  "PAN": "PAN2",
  "ErrorCode": "ErrorCode6",
  "ErrorDescription": "ErrorDescription2"
}
```

