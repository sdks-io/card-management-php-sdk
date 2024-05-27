
# EID Access

## Structure

`EIDAccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?string` | Optional | Collecting company id. | getColCoId(): ?string | setColCoId(?string colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting company Code | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `accountGroupId` | `?string` | Optional | Identifier for the EID account group configured for the user. | getAccountGroupId(): ?string | setAccountGroupId(?string accountGroupId): void |

## Example (as JSON)

```json
{
  "ColCoId": "14",
  "ColCoCode": 14,
  "AccountGroupId": "345"
}
```

