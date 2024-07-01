
# Update Card

Request entity object for UpdateCardRequest  list

## Structure

`UpdateCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `caller` | `?string` | Optional | The caller to be notified with the status of the update card status request. <br /><br>The caller will also be notified with the status of the replacement card order request, if any.<br /><br>Mandatory, if NotifyCaller is true. <br /><br>Maximum field length: 20<br /><br>Allowed values:<br /><br><br>- NextGenUI: This value to be used by next gen UI application.<br /><br>- Motix: This value to be used by MOTiX application.<br /><br>- FleetHubUILifeTime: This value to be used by Fleet Hub UI application for life time restriction cards.<br /><br>  Note: The values passed in this field are case insensitive. | getCaller(): ?string | setCaller(?string caller): void |
| `isReplacementChargeable` | `?bool` | Optional | True/False<br /><br>Optional<br /><br>When not provided will considered as default value as True.<br /><br>If passed True, the replacement card will be chargeable, else replacement card will not be charged. | getIsReplacementChargeable(): ?bool | setIsReplacementChargeable(?bool isReplacementChargeable): void |
| `notifyCaller` | `?bool` | Optional | True/False.<br /><br>Optional.<br /><br>Default: False<br /><br>If true, the caller would be notified back with the status as success or failure after the update card status request is processed.<br>Notification API subscription required to use this feature , please refer API documetation for more details | getNotifyCaller(): ?bool | setNotifyCaller(?bool notifyCaller): void |
| `notifyCallerOnSync` | `?bool` | Optional | True/False.<br /><br>Optional.<br /><br>Default: False<br /><br>If true, the caller would be notified back with the status as success or failed after the replacement card is synced with Gateway, if a replacement card was requested. | getNotifyCallerOnSync(): ?bool | setNotifyCallerOnSync(?bool notifyCallerOnSync): void |
| `orderCardReplacement` | `?bool` | Optional | True/False.<br /><br>Pass True if a replacement order card request is to be placed, else False.<br /><br>Optional.Default value False.<br /><br>Replacement of a card is only applicable when the target status requested is either permanently Block or Damaged for the existing card.<br /><br>Request for Replacement card will be placed only when the Block card or Block damaged card request is successfully placed.<br /><br>The Replacement card request will be processed only when the permanent Block card request is successfully processed. <br /><br>In case of damaged card request, the replacement card request will be processed immediately. | getOrderCardReplacement(): ?bool | setOrderCardReplacement(?bool orderCardReplacement): void |
| `cardSettings` | [`?CardSettings`](../../doc/models/card-settings.md) | Optional | - | getCardSettings(): ?CardSettings | setCardSettings(?CardSettings cardSettings): void |
| `reasonId` | `?int` | Optional | Reason id for updating the card status.<br>Either Reason ID or Text is madatory when TargetStatus is ‘Block’ or ‘Damaged’. Else ignored.<br>Possible values:<br>1 (Lost)<br>2 (Stolen)<br>3 (Card no longer required)<br><br><br>When passed, the reason Id will be mapped to allowed reason IDs configured for the card type of the card. If the given reason Id is not allowed for certain card types, then the request will be rejected as invalid ResonId | getReasonId(): ?int | setReasonId(?int reasonId): void |
| `reasonText` | `?string` | Optional | Reason text for updating the card status.<br>Possible Values:<br><br>1) Lost<br>2) Stolen<br>3) Card no longer required<br><br>Optional – However, either Reason ID or Text is madatory when TargetStatus is ‘Block’ or ‘Damaged’. Else, Ignored.<br>When Reason Text is passed and the Target Status is either Block or Damaged, the text will be validated with the allowed list of values configured for the card type of the card. If the text is not allowed, request will be rejected as invaid ResonText.<br>Note:<br>‘Customer blocked’ will be used as the reason for ‘Temporary Block’. | getReasonText(): ?string | setReasonText(?string reasonText): void |
| `targetStatus` | `?int` | Optional | The list of cards passed in ‘Cards’ parameter will be updated to this status.<br /><br>Mandatory.<br /><br>Allowed values –<br /><br><br>- TemporaryBlock<br /><br>- Unblock<br /><br>- Block<br /><br>- Damaged<br /> | getTargetStatus(): ?int | setTargetStatus(?int targetStatus): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br /><br>Optional if AccountNumber is passed, else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br /><br>Optional if AccountId is passed, else Mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br /><br>Mandatory if PAN is passed, else optional.<br /><br>Format: yyyyMMdd | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br /><br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `colCoCode` | `?int` | Optional | Collecting company code of the customer. <br /><br>Optional if ColCoId is passed, else Mandatory.<br /> | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting company id of the customer. <br /><br>Optional if ColCoCode is passed, else Mandatory.<br /> | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br /><br>Optional if CardId is passed, else Mandatory.<br /> | getPAN(): ?string | setPAN(?string pAN): void |
| `payerId` | `?int` | Optional | Payer id of the customer.<br /><br>Optional if PayerNumber is passed, else Mandatory. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | PayerNumber of the customer.<br /><br>Optional if PayerId is passed, else Mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |

## Example (as JSON)

```json
{
  "Caller": "Caller6",
  "IsReplacementChargeable": false,
  "NotifyCaller": false,
  "NotifyCallerOnSync": false,
  "OrderCardReplacement": false
}
```

