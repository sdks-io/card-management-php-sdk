
# Location Restrictions Network Restrictions Items

## Structure

`LocationRestrictionsNetworkRestrictionsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `country` | `string` | Required | ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.<br>Example: 826 for United Kingdom.<br>Mandatory | getCountry(): string | setCountry(string country): void |
| `exclusive` | `bool` | Required | Flag indicates whether the profile is inclusive or exclusive.<br>Mandatory<br>Example: False - (inclusive), i.e. the “Networks” property lists the networks in which the transaction will be allowed.<br>True - (exclusive), i.e. the “Networks” property lists the networks in which the transactions will be declined. | getExclusive(): bool | setExclusive(bool exclusive): void |
| `networks` | `?(string[])` | Optional | A list of Gateway network codes, typically 7 or 10 digits.<br>Example: 0002003250 | getNetworks(): ?array | setNetworks(?array networks): void |

## Example (as JSON)

```json
{
  "Country": "Country0",
  "Exclusive": false,
  "Networks": [
    "Networks7",
    "Networks8",
    "Networks9"
  ]
}
```

