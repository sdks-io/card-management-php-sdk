
# Card Management V1 Updatestatus Request

## Structure

`CardManagementV1UpdatestatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cards` | [`UpdateCard[]`](../../doc/models/update-card.md) | Required | List of UpdateCardRequest entity. Each card in the list will be updated to the given target status. The details of the entity are given below. | getCards(): array | setCards(array cards): void |
| `reasonId` | `?int` | Optional | Reason id for updating the card status.<br /><br>Optional<br /><br>Either Reason ID or Text is madatory when TargetStatus is ‘Block’ or ‘Damaged’. Else ignored.<br /><br>Possible values:<br /><br>-Lost <br /><br>-Stolen <br /><br>-Card no longer required<br /><br>When passed, the reason Id will be validated with the allowed reason ids configured for the card type of the card.<br /><br>. If the given reason Id is not allowed for certain card types, then the request will be rejected as invalid ResonId. | getReasonId(): ?int | setReasonId(?int reasonId): void |
| `reasonText` | `?string` | Optional | Reason text for updating the card status.<br /><br>Optional Either Reason ID or Text is madatory when TargetStatus is ‘Block’ or ‘Damaged’. Else ignored.<br /><br>Possible values:<br /><br>-Lost <br /><br>-Stolen <br /><br>-Card no longer required <br /><br><br>Optional – However, either Reason ID or Text is madatory when TargetStatus is ‘Block’ or ‘Damaged’.<br /><br><br>When Reason Text is passed and the Target Status is either Block or Damaged, the text will be validated with the allowed list of values configured for the card type of the card.<br /><br><br>If the text is not allowed, request will be rejected as invaid ResonText.<br /><br><br>Note:<br /><br><br>Customer blocked’ will be used as the reason for ‘Temporary Block’. | getReasonText(): ?string | setReasonText(?string reasonText): void |
| `targetStatus` | `string` | Required | The list of cards passed in Cards parameter will be updated to this status.<br /><br>Mandatory<br /><br>Allowed values:<br /><br>-TemporaryBlock<br /><br>-Unblock<br /><br>-Block<br /><br>-Damaged<br /> | getTargetStatus(): string | setTargetStatus(string targetStatus): void |

## Example (as JSON)

```json
{
  "Cards": [
    {
      "Caller": "Caller4",
      "IsReplacementChargeable": false,
      "NotifyCaller": false,
      "NotifyCallerOnSync": false,
      "OrderCardReplacement": false
    }
  ],
  "TargetStatus": "TargetStatus2",
  "ReasonId": 22,
  "ReasonText": "ReasonText6"
}
```

