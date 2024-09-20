
# Bundle Restriction

## Structure

`BundleRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dayTimeRestrictionAction` | `?string` | Optional | The value indicates what actions to be performed with respect to day time restriction.<br>Mandatory<br>Allowed values –<br>•    Add: Apply the given restriction on the bundle.<br>•    Default: No Day/Time restriction will be applied on the bundle in Gateway. | getDayTimeRestrictionAction(): ?string | setDayTimeRestrictionAction(?string dayTimeRestrictionAction): void |
| `locationRestrictionAction` | `?string` | Optional | The value indicates what actions to be performed with respect to location restriction.<br>Mandatory<br>Allowed values –<br>•    Add: Apply the given restriction on the bundle.<br>•    Default: No location restriction will be applied on the bundle in Gateway. | getLocationRestrictionAction(): ?string | setLocationRestrictionAction(?string locationRestrictionAction): void |
| `usageRestrictions` | `?array` | Optional | - | getUsageRestrictions(): ?array | setUsageRestrictions(?array usageRestrictions): void |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `productRestrictions` | `?array` | Optional | - | getProductRestrictions(): ?array | setProductRestrictions(?array productRestrictions): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |

## Example (as JSON)

```json
{
  "DayTimeRestrictionAction": "DayTimeRestrictionAction8",
  "LocationRestrictionAction": "LocationRestrictionAction6",
  "UsageRestrictions": {
    "key1": "val1",
    "key2": "val2"
  },
  "DayTimeRestrictions": {
    "Monday": false,
    "Tuesday": false,
    "Wednesday": false,
    "Thursday": false,
    "Friday": false
  },
  "ProductRestrictions": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

