
# PIN Advice Types

## Structure

`PINAdviceTypes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pINAdviceTypeID` | `?int` | Optional | Id of of PIN advice type.<br>Possible Values:<br><br>1. Paper<br>2. Email<br>3. SMS<br>4. None | getPINAdviceTypeID(): ?int | setPINAdviceTypeID(?int pINAdviceTypeID): void |
| `isCardOrderOption` | `?bool` | Optional | Whether the PIN advice type is available for card ordering | getIsCardOrderOption(): ?bool | setIsCardOrderOption(?bool isCardOrderOption): void |
| `isPINReminderOption` | `?bool` | Optional | Whether the PIN advice type is available for PIN Reminder | getIsPINReminderOption(): ?bool | setIsPINReminderOption(?bool isPINReminderOption): void |

## Example (as JSON)

```json
{
  "PINAdviceTypeID": 1,
  "IsCardOrderOption": false,
  "IsPINReminderOption": false
}
```

