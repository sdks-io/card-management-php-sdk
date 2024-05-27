
# Search Card Response Restrictions

## Structure

`SearchCardResponseRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dayTimeRestrictions` | [`?DayTimeRestrictions`](../../doc/models/day-time-restrictions.md) | Optional | Day/time restrictions such as weekdays and time range to be applied on the bundle.<br>Mandatory if respective action is set as “Add”.<br>The details of DayTimeRestriction entity is given below. | getDayTimeRestrictions(): ?DayTimeRestrictions | setDayTimeRestrictions(?DayTimeRestrictions dayTimeRestrictions): void |
| `locationRestrictions` | [`?LocationRestrictions`](../../doc/models/location-restrictions.md) | Optional | Location restrictions to be applied on the bundle which either allows or restricts using the cards, which are under the bundle, in the specified locations.<br>Mandatory if respective action is set as “Add”.<br>Details of location restrictions are given below. | getLocationRestrictions(): ?LocationRestrictions | setLocationRestrictions(?LocationRestrictions locationRestrictions): void |
| `productRestrictions` | [`?SearchProductRestriction`](../../doc/models/search-product-restriction.md) | Optional | - | getProductRestrictions(): ?SearchProductRestriction | setProductRestrictions(?SearchProductRestriction productRestrictions): void |
| `usageRestrictions` | [`?UsageRestrictions`](../../doc/models/usage-restrictions.md) | Optional | - | getUsageRestrictions(): ?UsageRestrictions | setUsageRestrictions(?UsageRestrictions usageRestrictions): void |

## Example (as JSON)

```json
{
  "DayTimeRestrictions": {
    "Friday": false,
    "Monday": false,
    "Saturday": false,
    "Sunday": false,
    "Thursday": false
  },
  "LocationRestrictions": {
    "CountryRestrictions": {
      "Exclusive": false,
      "Countries": [
        "Countries7"
      ]
    },
    "NetworkRestrictions": [
      {
        "Country": "Country6",
        "Exclusive": false,
        "Networks": [
          "Networks3",
          "Networks4",
          "Networks5"
        ]
      },
      {
        "Country": "Country6",
        "Exclusive": false,
        "Networks": [
          "Networks3",
          "Networks4",
          "Networks5"
        ]
      }
    ],
    "ShellSiteRestrictions": [
      {
        "Country": "Country4",
        "Sites": [
          "Sites3",
          "Sites4"
        ],
        "SiteGroups": [
          "SiteGroups9",
          "SiteGroups8",
          "SiteGroups7"
        ],
        "Exclusive": false
      },
      {
        "Country": "Country4",
        "Sites": [
          "Sites3",
          "Sites4"
        ],
        "SiteGroups": [
          "SiteGroups9",
          "SiteGroups8",
          "SiteGroups7"
        ],
        "Exclusive": false
      }
    ],
    "PartnerSiteRestrictions": [
      {
        "NetworkCode": "NetworkCode2",
        "Sites": [
          "Sites3"
        ],
        "SiteGroups": [
          "SiteGroups1",
          "SiteGroups2"
        ],
        "Exclusive": false
      }
    ]
  },
  "ProductRestrictions": {
    "Products": [
      {
        "GlobalProductCode": "GlobalProductCode6",
        "Description": "Description8"
      }
    ],
    "ProductGroups": [
      {
        "ReferenceId": 82,
        "ProductGroupId": "ProductGroupId6",
        "Name": "Name0",
        "IsDefault": false,
        "IsFuelType": false
      },
      {
        "ReferenceId": 82,
        "ProductGroupId": "ProductGroupId6",
        "Name": "Name0",
        "IsDefault": false,
        "IsFuelType": false
      }
    ]
  },
  "UsageRestrictions": {
    "DailySpend": 7.72,
    "WeeklySpend": 10.22,
    "MonthlySpend": 48.66,
    "PerTransactionSpend": 17.28,
    "DailyVolume": 122
  }
}
```

