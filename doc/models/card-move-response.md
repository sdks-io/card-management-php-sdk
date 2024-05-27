
# Card Move Response

## Structure

`CardMoveResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `moveCardRequestReference` | `?int` | Optional | - | getMoveCardRequestReference(): ?int | setMoveCardRequestReference(?int moveCardRequestReference): void |
| `successfulRequests` | [`?(CardMoveResponseSuccessfulRequestsItems[])`](../../doc/models/card-move-response-successful-requests-items.md) | Optional | - | getSuccessfulRequests(): ?array | setSuccessfulRequests(?array successfulRequests): void |
| `errorCards` | [`?(CardMoveResponseErrorCardsItems[])`](../../doc/models/card-move-response-error-cards-items.md) | Optional | - | getErrorCards(): ?array | setErrorCards(?array errorCards): void |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "MoveCardRequestReference": 70,
  "SuccessfulRequests": [
    {
      "AccountNumber": "AccountNumber8",
      "AccountId": 112,
      "PAN": "PAN0",
      "CardId": 18,
      "MoveCardReference": 248
    }
  ],
  "ErrorCards": [
    {
      "AccountNumber": "AccountNumber4",
      "AccountId": 230,
      "PAN": "PAN6",
      "CardId": 136,
      "ValidationErrorCode": "ValidationErrorCode6"
    },
    {
      "AccountNumber": "AccountNumber4",
      "AccountId": 230,
      "PAN": "PAN6",
      "CardId": 136,
      "ValidationErrorCode": "ValidationErrorCode6"
    }
  ],
  "RequestId": "RequestId2",
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

