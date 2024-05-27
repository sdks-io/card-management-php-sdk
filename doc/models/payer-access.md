
# Payer Access

## Structure

`PayerAccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isDefault` | `?bool` | Optional | Whether this payer is the default payer of the user.<br>**Default**: `false` | getIsDefault(): ?bool | setIsDefault(?bool isDefault): void |
| `colcoId` | `?int` | Optional | Collecting company id. | getColcoId(): ?int | setColcoId(?int colcoId): void |
| `colcoCode` | `?int` | Optional | Collecting company code.<br>Example:<br>86-Philippines<br>5-UK | getColcoCode(): ?int | setColcoCode(?int colcoCode): void |
| `colCoCountryCode` | `?string` | Optional | The 2-character ISO Code for the customer and card owning country | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `payerGroupId` | `?int` | Optional | Payer Group Id of the payer. | getPayerGroupId(): ?int | setPayerGroupId(?int payerGroupId): void |
| `payerGroup` | `?string` | Optional | Payer group of the payer.<br>The value of this parameter will always be null when the input parameter “IncludePayerGroup” is false. | getPayerGroup(): ?string | setPayerGroup(?string payerGroup): void |
| `payerId` | `?int` | Optional | Payer Id to which the user has access<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number to which the user has access<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerName` | `?string` | Optional | Name of the Payer to which the user has access | getPayerName(): ?string | setPayerName(?string payerName): void |

## Example (as JSON)

```json
{
  "IsDefault": false,
  "ColcoId": 14,
  "ColcoCode": 14,
  "ColCoCountryCode": "DE",
  "PayerGroupId": 123,
  "PayerGroup": "null",
  "PayerId": 854,
  "PayerNumber": "DE26688504",
  "PayerName": "TK MobilPlus"
}
```

