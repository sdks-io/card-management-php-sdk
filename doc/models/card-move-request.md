
# Card Move Request

## Structure

`CardMoveRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | - | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | - | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCountryCode` | `?string` | Optional | - | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `payerNumber` | `?string` | Optional | - | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerId` | `?int` | Optional | - | getPayerId(): ?int | setPayerId(?int payerId): void |
| `cards` | [`?(CardMoveRequestCardsItems[])`](../../doc/models/card-move-request-cards-items.md) | Optional | - | getCards(): ?array | setCards(?array cards): void |
| `targetAccountId` | `?int` | Optional | - | getTargetAccountId(): ?int | setTargetAccountId(?int targetAccountId): void |
| `targetAccountNumber` | `?string` | Optional | - | getTargetAccountNumber(): ?string | setTargetAccountNumber(?string targetAccountNumber): void |
| `targetCardGroupId` | `?int` | Optional | - | getTargetCardGroupId(): ?int | setTargetCardGroupId(?int targetCardGroupId): void |
| `targetNewCardGroupName` | `?string` | Optional | - | getTargetNewCardGroupName(): ?string | setTargetNewCardGroupName(?string targetNewCardGroupName): void |

## Example (as JSON)

```json
{
  "ColCoCode": 166,
  "ColCoId": 152,
  "ColCoCountryCode": "ColCoCountryCode0",
  "PayerNumber": "PayerNumber2",
  "PayerId": 200
}
```

