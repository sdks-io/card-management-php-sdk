
# Location Restriction

## Structure

`LocationRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryRestrictions` | [`?CountryRestriction`](../../doc/models/country-restriction.md) | Optional | - | getCountryRestrictions(): ?CountryRestriction | setCountryRestrictions(?CountryRestriction countryRestrictions): void |
| `networkRestrictions` | [`?(NetworkRestriction[])`](../../doc/models/network-restriction.md) | Optional | - | getNetworkRestrictions(): ?array | setNetworkRestrictions(?array networkRestrictions): void |
| `shellSiteRestrictions` | [`?(ShellSiteRestriction[])`](../../doc/models/shell-site-restriction.md) | Optional | - | getShellSiteRestrictions(): ?array | setShellSiteRestrictions(?array shellSiteRestrictions): void |
| `partnerSiteRestrictions` | [`?(PartnerSiteRestriction[])`](../../doc/models/partner-site-restriction.md) | Optional | - | getPartnerSiteRestrictions(): ?array | setPartnerSiteRestrictions(?array partnerSiteRestrictions): void |

## Example (as JSON)

```json
{
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
```

