
# Card Day Time Restrictions

## Structure

`CardDayTimeRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `level` | `?string` | Optional | Describes at which level the restriction is set at.<br>Possible values:<br>OU = Restriction set at ColCo card type<br>Customer = Restriction set at customer card type | getLevel(): ?string | setLevel(?string level): void |
| `monday` | `?bool` | Optional | Whether the transaction is allowed on Mondays or not. | getMonday(): ?bool | setMonday(?bool monday): void |
| `tuesday` | `?bool` | Optional | Whether the transaction is allowed on Tuesdays or not. | getTuesday(): ?bool | setTuesday(?bool tuesday): void |
| `wednesday` | `?bool` | Optional | Whether the transaction is allowed on Wednesdays or not. | getWednesday(): ?bool | setWednesday(?bool wednesday): void |
| `thursday` | `?bool` | Optional | Whether the transaction is allowed on Thursdays or not. | getThursday(): ?bool | setThursday(?bool thursday): void |
| `friday` | `?bool` | Optional | Whether the transaction is allowed on Fridays or not. | getFriday(): ?bool | setFriday(?bool friday): void |
| `saturday` | `?bool` | Optional | Whether the transaction is allowed on Saturdays or not. | getSaturday(): ?bool | setSaturday(?bool saturday): void |
| `sunday` | `?bool` | Optional | Whether the transaction is allowed on Sundays or not. | getSunday(): ?bool | setSunday(?bool sunday): void |
| `timeFrom` | `?string` | Optional | The time in the day from when the transaction is allowed.<br>Format: HH:mm: ss<br>E.g., 21:00:00<br><br>Note:<br><br>1) The client application has to convert the value to the required date-time data type.<br>2) The value will be 00:00:00 when no restriction set for this field. | getTimeFrom(): ?string | setTimeFrom(?string timeFrom): void |
| `timeTo` | `?string` | Optional | allowed.<br>Format: HH:mm: ss<br>E.g., 21:00:00<br><br>Note:<br><br>1) The client application has to convert the value to the required date-time data type.<br>2) The value will be 00:00:00 when no restriction set for this field. | getTimeTo(): ?string | setTimeTo(?string timeTo): void |

## Example (as JSON)

```json
{
  "Level": "OU= 24537",
  "TimeFrom": "07:56:00",
  "TimeTo": "08:19:09",
  "Monday": false,
  "Tuesday": false,
  "Wednesday": false,
  "Thursday": false
}
```

