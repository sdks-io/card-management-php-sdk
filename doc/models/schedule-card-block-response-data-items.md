
# Schedule Card Block Response Data Items

## Structure

`ScheduleCardBlockResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Unique Id of the card. | getCardId(): ?int | setCardId(?int cardId): void |
| `fromDate` | `?string` | Optional | Effective start date & time of Block / Unblock as updated in the intermediate queue table.<br><br>Format: yyyyMMdd HH:mm<br>Eg: 20230512 12:30 | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Effective end date & time of Block / Unblock as updated in the intermediate queue table.<br><br>Format: yyyyMMdd HH:mm<br>Eg: 20230512 14:30 | getToDate(): ?string | setToDate(?string toDate): void |
| `referenceId` | `?int` | Optional | Effective end date & time of Block / Unblock as updated in the intermediate queue table.<br><br>Format: yyyyMMdd HH:mm<br>Eg: 20230512 14:30 | getReferenceId(): ?int | setReferenceId(?int referenceId): void |

## Example (as JSON)

```json
{
  "CardId": 86,
  "FromDate": "FromDate8",
  "ToDate": "ToDate8",
  "ReferenceId": 10
}
```

