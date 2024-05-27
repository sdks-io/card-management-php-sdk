
# Account Velocity Limit

## Structure

`AccountVelocityLimit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Type of velocity (COUNT type is not present for limits of PERTRX period<br>Possible Values: VALUE, VOLUME, COUNT | getType(): ?string | setType(?string type): void |
| `period` | `?string` | Optional | Duration of the velocity or threshold alert.<br>Possible Values: DAILY, WEEKLY, MONTHLY, ANNUAL, LIFETIME, PERTRX | getPeriod(): ?string | setPeriod(?string period): void |
| `limit` | `?float` | Optional | The limit associated with this velocity with the correct number of digits after the decimal point according to the minor denomination of the currency of the card issuer (except for COUNT type velocity). | getLimit(): ?float | setLimit(?float limit): void |
| `accumulation` | `?float` | Optional | The transaction accumulation during the current period with the correct number of digits after the decimal point according to the minor denomination of the currency of the card issuer (except for COUNT type velocity). Not present for PERTRX period. | getAccumulation(): ?float | setAccumulation(?float accumulation): void |
| `balance` | `?float` | Optional | The remaining/available balance at this point in time with the correct number of digits after the decimal point according to the minor denomination of the currency of the card issuer (except for COUNT type velocity). Not present for PERTRX period. | getBalance(): ?float | setBalance(?float balance): void |
| `override` | `?bool` | Optional | Indicate if the limit is overridden or default. (false for default). | getOverride(): ?bool | setOverride(?bool override): void |
| `productGroup` | `?string` | Optional | The reference group name for product differentiated velocities. This field cannot be used with Volume type velocity.<br>Example: RoadSvc<br>This is an optional output field. | getProductGroup(): ?string | setProductGroup(?string productGroup): void |
| `threshold` | `?float` | Optional | The limit to trigger an alert if the balance after a transaction reaches it or below. 0 indicates no alerts will be sent. Not present if not set (issuer value threshold limit applies if available). Not present for COUNT type velocity. | getThreshold(): ?float | setThreshold(?float threshold): void |

## Example (as JSON)

```json
{
  "Type": "VALUE",
  "Period": "DAILY",
  "Limit": 1500.55,
  "Accumulation": 1100.55,
  "Balance": 400.55,
  "ProductGroup": "RoadSvc",
  "Threshold": 50.55
}
```

