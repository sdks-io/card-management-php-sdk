
# Day Time Restriction

Details of the day/time restrictions such as weekdays and time range in which transactions should be allowed on the card.

## Structure

`DayTimeRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `monday` | `?bool` | Optional | True if card could be used on a Monday, else false | getMonday(): ?bool | setMonday(?bool monday): void |
| `tuesday` | `?bool` | Optional | True if card could be used on a Tuesday, else false. | getTuesday(): ?bool | setTuesday(?bool tuesday): void |
| `wednesday` | `?bool` | Optional | True if card could be used on a Wednesday, else false. | getWednesday(): ?bool | setWednesday(?bool wednesday): void |
| `thursday` | `?bool` | Optional | True if card could be used on a Thursday, else false | getThursday(): ?bool | setThursday(?bool thursday): void |
| `friday` | `?bool` | Optional | True if card could be used on a Friday, else false | getFriday(): ?bool | setFriday(?bool friday): void |
| `saturday` | `?bool` | Optional | True if card could be used on a Saturday, else false | getSaturday(): ?bool | setSaturday(?bool saturday): void |
| `sunday` | `?bool` | Optional | True if card could be used on a Sunday, else false. | getSunday(): ?bool | setSunday(?bool sunday): void |
| `timeFrom` | `?string` | Optional | Card could be used from this time in a day.<br>Format: HH:mm (24-hour format)<br>Note:<br><br>1. Clients to convert this to appropriate DateTime or TimeSpan type.<br>   “00:00” is the lowest time value and “23:59” is the highest time value. | getTimeFrom(): ?string | setTimeFrom(?string timeFrom): void |
| `timeTo` | `?string` | Optional | Card could be used up to this time in a day.<br>Format: HH:mm (24-hour format)<br>Note:<br><br>1. Clients to convert this to appropriate DateTime or TimeSpan type.<br>   “00:00” is the lowest time value and “23:59” is the highest time value. | getTimeTo(): ?string | setTimeTo(?string timeTo): void |

## Example (as JSON)

```json
{
  "Monday": false,
  "Tuesday": false,
  "Wednesday": false,
  "Thursday": false,
  "Friday": false
}
```

