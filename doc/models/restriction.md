
# Restriction

## Structure

`Restriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usageRestrictions` | [`?UsageRestriction`](../../doc/models/usage-restriction.md) | Optional | Details of the usage restrictions such as day/week/month value and volume restrictions applied on the card. | getUsageRestrictions(): ?UsageRestriction | setUsageRestrictions(?UsageRestriction usageRestrictions): void |
| `dayTimeRestrictions` | [`?DayTimeRestriction`](../../doc/models/day-time-restriction.md) | Optional | Details of the day/time restrictions such as weekdays and time range in which transactions should be allowed on the card. | getDayTimeRestrictions(): ?DayTimeRestriction | setDayTimeRestrictions(?DayTimeRestriction dayTimeRestrictions): void |
| `productRestrictions` | [`?SearchProductRestriction`](../../doc/models/search-product-restriction.md) | Optional | - | getProductRestrictions(): ?SearchProductRestriction | setProductRestrictions(?SearchProductRestriction productRestrictions): void |
| `locationRestrictions` | [`?LocationRestriction`](../../doc/models/location-restriction.md) | Optional | - | getLocationRestrictions(): ?LocationRestriction | setLocationRestrictions(?LocationRestriction locationRestrictions): void |

## Example (as JSON)

```json
{
  "UsageRestrictions": {
    "Level": "Level0",
    "DailySpend": 7.72,
    "DailySpendAccumulated": 127.2,
    "DailySpendBalance": 5.36,
    "DailySpendOverride": false
  },
  "DayTimeRestrictions": {
    "Monday": false,
    "Tuesday": false,
    "Wednesday": false,
    "Thursday": false,
    "Friday": false
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
  "LocationRestrictions": {
    "CountryRestrictions": {
      "Countries": [
        "Countries7"
      ],
      "Exclusive": false
    },
    "NetworkRestrictions": [
      {
        "Country": "Country6",
        "Networks": [
          "Networks3",
          "Networks4",
          "Networks5"
        ],
        "Exclusive": false
      },
      {
        "Country": "Country6",
        "Networks": [
          "Networks3",
          "Networks4",
          "Networks5"
        ],
        "Exclusive": false
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
  }
}
```

