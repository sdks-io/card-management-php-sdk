
# Shell Site Restriction

## Structure

`ShellSiteRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `country` | `?string` | Optional | ISO 3166-1 Numeric-3 code of the country where the site restriction is applied.<br>Example: 826 for United Kingdom. | getCountry(): ?string | setCountry(?string country): void |
| `sites` | `?(string[])` | Optional | A list of Site IDs in this country, in the format “AA1111” where “AA” is a 2-character country code and “1111” is a 4-digit site number in that country, which is either restricted or allowed.<br>For example, “GB1234”. | getSites(): ?array | setSites(?array sites): void |
| `siteGroups` | `?(string[])` | Optional | A list of site group ids in this country which is either restricted or allowed. | getSiteGroups(): ?array | setSiteGroups(?array siteGroups): void |
| `exclusive` | `?bool` | Optional | Flag indicates whether the profile is inclusive or exclusive.<br>Example: False - (inclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites & site groups where the transaction will be allowed.<br>True - (exclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites and site groups where the transactions will be declined. | getExclusive(): ?bool | setExclusive(?bool exclusive): void |

## Example (as JSON)

```json
{
  "Country": "Country2",
  "Sites": [
    "Sites5"
  ],
  "SiteGroups": [
    "SiteGroups5",
    "SiteGroups6",
    "SiteGroups7"
  ],
  "Exclusive": false
}
```

