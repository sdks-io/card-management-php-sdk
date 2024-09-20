
# Bundle Restriction Update

## Structure

`BundleRestrictionUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resetDayTimeRestriction` | `?bool` | Optional | True/False<br>A value indicates if the day/time restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetDayTimeRestriction(): ?bool | setResetDayTimeRestriction(?bool resetDayTimeRestriction): void |
| `resetLocationRestriction` | `?bool` | Optional | True/False<br>A value indicates if the location restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetLocationRestriction(): ?bool | setResetLocationRestriction(?bool resetLocationRestriction): void |
| `resetProductRestriction` | `?bool` | Optional | True/False<br>A value indicates if the product restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetProductRestriction(): ?bool | setResetProductRestriction(?bool resetProductRestriction): void |
| `usageRestrictions` | `?array` | Optional | - | getUsageRestrictions(): ?array | setUsageRestrictions(?array usageRestrictions): void |
| `dayTimeRestrictionProfileId` | `?string` | Optional | Identifier of the day/time restriction profile to be updated for the bundle in Gateway.<br>Optional | getDayTimeRestrictionProfileId(): ?string | setDayTimeRestrictionProfileId(?string dayTimeRestrictionProfileId): void |
| `dayTimeRestrictions` | [`?CardDayTimeRestrictions`](../../doc/models/card-day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?CardDayTimeRestrictions | setDayTimeRestrictions(?CardDayTimeRestrictions dayTimeRestrictions): void |
| `productRestrictions` | `?array` | Optional | - | getProductRestrictions(): ?array | setProductRestrictions(?array productRestrictions): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile to be updated for the bundle in Gateway.<br>Optional | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |

## Example (as JSON)

```json
{
  "ResetDayTimeRestriction": false,
  "ResetLocationRestriction": false,
  "ResetProductRestriction": false,
  "UsageRestrictions": {
    "key1": "val1",
    "key2": "val2"
  },
  "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId2"
}
```

