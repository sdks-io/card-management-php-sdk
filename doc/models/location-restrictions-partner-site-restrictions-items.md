
# Location Restrictions Partner Site Restrictions Items

## Structure

`LocationRestrictionsPartnerSiteRestrictionsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `networkCode` | `string` | Required | Gateway network codes, typically 7 or 10 digits, where sites and site groups belong to.<br>Example: 0002003250<br>Mandatory | getNetworkCode(): string | setNetworkCode(string networkCode): void |
| `sites` | `?(string[])` | Optional | A list of Site IDs in this network which needs to be either restricted or allowed.<br>For example, 97123, 97155<br>A list of values must be passed for either Sites or SiteGroups or both.<br>Max 10 sites are allowed for the Partner site Restriction. | getSites(): ?array | setSites(?array sites): void |
| `siteGroups` | `?(string[])` | Optional | A list of site group ids in this network which needs to be either restricted or allowed.<br>For example, 83649200<br>A list of values must be passed for either Sites or SiteGroups or both.<br>Max 10 sites groups are allowed for the Partner site Restriction. | getSiteGroups(): ?array | setSiteGroups(?array siteGroups): void |
| `exclusive` | `?bool` | Optional | Flag indicates whether the profile is inclusive or exclusive.<br>Mandatory<br>Example: False - (inclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites & site groups where the transaction will be allowed.<br>True - (exclusive), i.e. the “Sites” & “SiteGroups” properties lists the sites and site groups where the transactions will be declined. | getExclusive(): ?bool | setExclusive(?bool exclusive): void |

## Example (as JSON)

```json
{
  "NetworkCode": "NetworkCode4",
  "Sites": [
    "Sites5",
    "Sites6"
  ],
  "SiteGroups": [
    "SiteGroups3",
    "SiteGroups4",
    "SiteGroups5"
  ],
  "Exclusive": false
}
```

