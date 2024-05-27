
# Location Restrictions Shell Site Restrictions Items

## Structure

`LocationRestrictionsShellSiteRestrictionsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `country` | `?string` | Optional | ISO 3166-1 Numeric-3 code of the country where the site restriction is applied.<br>Example: 826 for United Kingdom. | getCountry(): ?string | setCountry(?string country): void |
| `sites` | `?(string[])` | Optional | A list of Site IDs in this country, in the format “AA1111” where “AA” is a 2-character country code and “1111” is a 4-digit site number in that country, which needs to be either restricted or allowed.<br>A list of values must be passed for either Sites or SiteGroups or both.<br>Max 10 sites are allowed for the Shell site Restriction.<br>For example, “GB1234”. | getSites(): ?array | setSites(?array sites): void |
| `siteGroups` | `?(string[])` | Optional | A list of site group ids in this country which needs to be either restricted or allowed.<br>A list of values must be passed for either Sites or SiteGroups or both.<br>Max 10 sites groups are allowed for the Shell site Restriction. | getSiteGroups(): ?array | setSiteGroups(?array siteGroups): void |
| `exclusive` | `?bool` | Optional | Flag indicates whether the profile is inclusive or exclusive.<br>Mandatory<br>Example: False - (inclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites & site groups where the transaction will be allowed.<br>True - (exclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites and site groups where the transactions will be declined. | getExclusive(): ?bool | setExclusive(?bool exclusive): void |

## Example (as JSON)

```json
{
  "Country": "Country0",
  "Sites": [
    "Sites3",
    "Sites2",
    "Sites1"
  ],
  "SiteGroups": [
    "SiteGroups3",
    "SiteGroups4"
  ],
  "Exclusive": false
}
```

