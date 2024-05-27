
# Bundle Restriction

## Structure

`BundleRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resetDayTimeRestriction` | `?bool` | Optional | True/False<br>A value indicates if the day/time restriction is to be reset for card bundle.<br>Optional<br>Default value is False.<br>**Default**: `false` | getResetDayTimeRestriction(): ?bool | setResetDayTimeRestriction(?bool resetDayTimeRestriction): void |
| `resetLocationRestriction` | `?bool` | Optional | True/False<br>A value indicates if the location restriction is to be reset for card bundle.<br>Optional<br>Default value is False.<br>**Default**: `false` | getResetLocationRestriction(): ?bool | setResetLocationRestriction(?bool resetLocationRestriction): void |
| `resetProductRestriction` | `?bool` | Optional | True/False<br>A value indicates if the product restriction is to be reset for card bundle.<br>Optional<br>Default value is False.<br>**Default**: `false` | getResetProductRestriction(): ?bool | setResetProductRestriction(?bool resetProductRestriction): void |
| `usageRestrictions` | [`?UsageRestrictions`](../../doc/models/usage-restrictions.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictions | setUsageRestrictions(?UsageRestrictions usageRestrictions): void |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | Day/time restrictions such as weekdays and time range to be applied on the bundle.<br>Mandatory if respective action is set as “Add”.<br>The details of DayTimeRestriction entity is given below. | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `productRestriction` | [`?ProductRestrictions`](../../doc/models/product-restrictions.md) | Optional | - | getProductRestriction(): ?ProductRestrictions | setProductRestriction(?ProductRestrictions productRestriction): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile to be updated for the bundle in Gateway.<br>Optional | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `locationRestrictions` | [`?LocationRestrictions`](../../doc/models/location-restrictions.md) | Optional | Location restrictions to be applied on the bundle which either allows or restricts using the cards, which are under the bundle, in the specified locations.<br>Mandatory if respective action is set as “Add”.<br>Details of location restrictions are given below. | getLocationRestrictions(): ?LocationRestrictions | setLocationRestrictions(?LocationRestrictions locationRestrictions): void |

## Example (as JSON)

```json
{
  "ResetDayTimeRestriction": false,
  "ResetLocationRestriction": false,
  "ResetProductRestriction": false,
  "UsageRestrictions": {
    "DailySpend": 7.72,
    "WeeklySpend": 10.22,
    "MonthlySpend": 48.66,
    "PerTransactionSpend": 17.28,
    "DailyVolume": 122
  },
  "DayTimeRestrictions": {
    "Friday": false,
    "Monday": false,
    "Saturday": false,
    "Sunday": false,
    "Thursday": false
  }
}
```

