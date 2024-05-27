
# Day Time Restrictions

Day/time restrictions such as weekdays and time range to be applied on the bundle.
Mandatory if respective action is set as “Add”.
The details of DayTimeRestriction entity is given below.

## Structure

`DayTimeRestrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `friday` | `?bool` | Optional | True/False.<br>True if card could be used on a Friday, else false.<br>Default value: false.<br>**Default**: `false` | getFriday(): ?bool | setFriday(?bool friday): void |
| `monday` | `?bool` | Optional | True/False.<br>True if card could be used on a Monday, else false.<br>Default value: false.<br>**Default**: `false` | getMonday(): ?bool | setMonday(?bool monday): void |
| `saturday` | `?bool` | Optional | True/False.<br>True if card could be used on a Saturday, else false.<br>Default value: false.<br>**Default**: `false` | getSaturday(): ?bool | setSaturday(?bool saturday): void |
| `sunday` | `?bool` | Optional | True/False.<br>True if card could be used on a Sunday, else false.<br>Default value: false.<br>**Default**: `false` | getSunday(): ?bool | setSunday(?bool sunday): void |
| `thursday` | `?bool` | Optional | True/False.<br>True if card could be used on a Thursday, else false.<br>Default value: false.<br>**Default**: `false` | getThursday(): ?bool | setThursday(?bool thursday): void |
| `timeFrom` | `?string` | Optional | Card could be used from this time in a day.<br>Mandatory if TimeTo is passed, else optional.<br>Format: HH:mm (24-hour format)<br>Note:<br>2.	“00:00” is the lowest time value and “23:59” is the highest time value.<br>To allow card to be used throughout the day pass null in TimeFrom and TimeTo. | getTimeFrom(): ?string | setTimeFrom(?string timeFrom): void |
| `timeTo` | `?string` | Optional | Card could be used up to this time in a day.<br>Mandatory if TimeFrom is passed, else optional.<br>Format: HH:mm (24-hour format)<br>Note:<br>2.	“00:00” is the lowest time value and “23:59” is the highest time value.<br>To allow card to be used throughout the day pass null in TimeFrom and TimeTo. | getTimeTo(): ?string | setTimeTo(?string timeTo): void |
| `tuesday` | `?bool` | Optional | True/False.<br>True if card could be used on a Tuesday, else false.<br>Default value: false.<br>**Default**: `false` | getTuesday(): ?bool | setTuesday(?bool tuesday): void |
| `wednesday` | `?bool` | Optional | True/False.<br>True if card could be used on a Wednesday, else false.<br>Default value: false.<br>**Default**: `false` | getWednesday(): ?bool | setWednesday(?bool wednesday): void |

## Example (as JSON)

```json
{
  "Friday": false,
  "Monday": false,
  "Saturday": false,
  "Sunday": false,
  "Thursday": false,
  "Tuesday": false,
  "Wednesday": false
}
```

