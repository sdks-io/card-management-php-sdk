
# Create Card Group Response

## Structure

`CreateCardGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainReference` | `?int` | Optional | Reference number for tracking the execution of the requests – new Card Group creation and to move the cards to the new card group.<br>Reference number will be null when the validations of new card group parameters fail. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `newCardGroupReference` | `?int` | Optional | Reference number for tracking the execution of card group creation.<br>Reference number will be null when the validations of new card group parameters fail. | getNewCardGroupReference(): ?int | setNewCardGroupReference(?int newCardGroupReference): void |
| `successfulRequests` | [`?(CreateCardGroupResponseSuccessfulRequestsItems[])`](../../doc/models/create-card-group-response-successful-requests-items.md) | Optional | List of cards validated and submitted successfully for processing. | getSuccessfulRequests(): ?array | setSuccessfulRequests(?array successfulRequests): void |
| `errorCards` | [`?(CreateCardGroupResponseErrorCardsItems[])`](../../doc/models/create-card-group-response-error-cards-items.md) | Optional | List of cards that failed validation and not submitted for processing.<br>Entity: FailedCardReference<br>This list will be empty when the validations of new card group parameters fail. | getErrorCards(): ?array | setErrorCards(?array errorCards): void |

## Example (as JSON)

```json
{
  "MainReference": 12345,
  "NewCardGroupReference": 1234,
  "SuccessfulRequests": [
    {
      "CardId": 18,
      "PAN": "PAN0",
      "Reference": 228
    }
  ],
  "ErrorCards": [
    {
      "CardId": 136,
      "PAN": "PAN6",
      "ErrorCode": "ErrorCode0",
      "ErrorDescription": "ErrorDescription6"
    },
    {
      "CardId": 136,
      "PAN": "PAN6",
      "ErrorCode": "ErrorCode0",
      "ErrorDescription": "ErrorDescription6"
    }
  ]
}
```

