
# Location Restrictions Country Restrictions

An entity that encapsulate the country restrictions.
Optional.

## Structure

`LocationRestrictionsCountryRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `exclusive` | `bool` | Required | Boolean	Flag indicates whether the profile is inclusive or exclusive.<br>Mandatory<br>Example: False - (inclusive), i.e. the “Countries” property lists the countries where the transactions will be allowed.<br>True - (exclusive), i.e. the “Countries” property lists the countries where the transactions will be declined. | getExclusive(): bool | setExclusive(bool exclusive): void |
| `countries` | `string[]` | Required | ISO 3166-1 Numeric-3 code of the country where the network restriction is applied.<br>Example: 826 for United Kingdom.<br>Mandatory | getCountries(): array | setCountries(array countries): void |

## Example (as JSON)

```json
{
  "Exclusive": false,
  "Countries": [
    "Countries3",
    "Countries4"
  ]
}
```

