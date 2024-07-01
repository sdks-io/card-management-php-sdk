
# Bundle Restriction Update

## Structure

`BundleRestrictionUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resetDayTimeRestriction` | `?bool` | Optional | True/False<br>A value indicates if the day/time restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetDayTimeRestriction(): ?bool | setResetDayTimeRestriction(?bool resetDayTimeRestriction): void |
| `resetLocationRestriction` | `?bool` | Optional | True/False<br>A value indicates if the location restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetLocationRestriction(): ?bool | setResetLocationRestriction(?bool resetLocationRestriction): void |
| `resetProductRestriction` | `?bool` | Optional | True/False<br>A value indicates if the product restriction is to be reset for card bundle.<br>Optional<br>Default value is False. | getResetProductRestriction(): ?bool | setResetProductRestriction(?bool resetProductRestriction): void |
| `usageRestrictions` | [`?UsageRestrictionsCard`](../../doc/models/usage-restrictions-card.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictionsCard | setUsageRestrictions(?UsageRestrictionsCard usageRestrictions): void |
| `dayTimeRestrictionProfileId` | `?string` | Optional | Identifier of the day/time restriction profile to be updated for the bundle in Gateway.<br>Optional | getDayTimeRestrictionProfileId(): ?string | setDayTimeRestrictionProfileId(?string dayTimeRestrictionProfileId): void |
| `dayTimeRestrictions` | [`?CardDayTimeRestrictions`](../../doc/models/card-day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?CardDayTimeRestrictions | setDayTimeRestrictions(?CardDayTimeRestrictions dayTimeRestrictions): void |
| `productRestrictions` | [`?ProductRestrictionCard`](../../doc/models/product-restriction-card.md) | Optional | - | getProductRestrictions(): ?ProductRestrictionCard | setProductRestrictions(?ProductRestrictionCard productRestrictions): void |
| `locationRestrictionProfileId` | `?string` | Optional | Identifier of the location restriction profile to be updated for the bundle in Gateway.<br>Optional | getLocationRestrictionProfileId(): ?string | setLocationRestrictionProfileId(?string locationRestrictionProfileId): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |

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
    "AnnualSpend": 223.08
  },
  "DayTimeRestrictionProfileId": "DayTimeRestrictionProfileId2"
}
```

