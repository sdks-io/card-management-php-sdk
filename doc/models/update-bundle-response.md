
# Update Bundle Response

## Structure

`UpdateBundleResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestActionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getRequestActionStatus(): ?ErrorStatus | setRequestActionStatus(?ErrorStatus requestActionStatus): void |
| `dayTimeRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getDayTimeRestrictionStatus(): ?ErrorStatus | setDayTimeRestrictionStatus(?ErrorStatus dayTimeRestrictionStatus): void |
| `locationRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getLocationRestrictionStatus(): ?ErrorStatus | setLocationRestrictionStatus(?ErrorStatus locationRestrictionStatus): void |
| `productRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getProductRestrictionStatus(): ?ErrorStatus | setProductRestrictionStatus(?ErrorStatus productRestrictionStatus): void |
| `usageRestrictionStatus` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getUsageRestrictionStatus(): ?ErrorStatus | setUsageRestrictionStatus(?ErrorStatus usageRestrictionStatus): void |

## Example (as JSON)

```json
{
  "RequestActionStatus": {
    "Code": "Code6",
    "Description": "Description0"
  },
  "DayTimeRestrictionStatus": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "LocationRestrictionStatus": {
    "Code": "Code6",
    "Description": "Description0"
  },
  "ProductRestrictionStatus": {
    "Code": "Code8",
    "Description": "Description8"
  },
  "UsageRestrictionStatus": {
    "Code": "Code4",
    "Description": "Description8"
  }
}
```

