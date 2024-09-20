
# Schedule Card Block Cards Items

## Structure

`ScheduleCardBlockCardsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Optional if AccountNumber is passed, else Mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed, else Mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `payerId` | `?int` | Optional | Payer id of the customer.<br>Optional if PayerNumber is passed, else Mandatory.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | PayerNumber of the customer.<br>Optional if PayerId is passed, else Mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `cardId` | `?int` | Optional | Unique Id of the card.<br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory. | getPAN(): ?string | setPAN(?string pAN): void |
| `pANID` | `?string` | Optional | Card PAN ID.<br>Optional if CardId is given, else mandatory.<br>Note: PANID is ignored if CardId is given. | getPANID(): ?string | setPANID(?string pANID): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br>Optional if CardId is passed, else Mandatory.<br>Format: yyyyMMdd<br>Example: 20170930 | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `action` | `string` | Required | Action<br>Mandatory<br>Possible values are:<br>•    AddOrUpdate – adds a new request or updates any existing requests, with overlapping dates, for the card<br>•    AddAndOverwriteAll - all the existing requests of the given card will be removed and a new request with the specified FromDate and ToDate will be added.<br>•    Delete – deletes any existing request with the same start date and end date for the card<br>•    DeleteAll – deletes all saved future dated requests (all block and unblock requests) of the card. | getAction(): string | setAction(string action): void |
| `fromDate` | `?string` | Optional | Effective start date of Block / Unblock<br>Allowed Formats: –<br>•    yyyyMMdd<br>•    yyyyMMdd HH:mm<br>Eg: 20230512 14:30, 20230512<br>Optional<br>Default value:<br>•     If the card status is “Active” then Current date & Time<br>•    If the card status is “TemporaryBlock (Customer)” then null.<br>Note:<br>•    Time is considered only when “IsTimeSupported” is true else it will be treated as a date.<br>•    Time will be passed in UTC time-zone.<br>•    If the Card Status is “Temporary Block (Customer)” and FromDate is provided – The fromdate & time is considered as starting period of unblock request. | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Effective end date of Block / Unblock<br>Allowed Formats: –<br>•    yyyyMMdd<br>•    yyyyMMdd HH:mm<br>Eg: 20230512 14:30, 20230512<br>Optional – When the Card status is Active else mandatory.<br>When not provided, the card will remain blocked until manually unblocked.<br>Note:<br>•    Time is considered only when the “IsTimeSupported” flag is set as true, else it will be considered as only date.<br>•    Date & Time passed in the request will be considered in UTC time-zone.<br>•    If the card is currently in ‘Temporary Block (Customer)’ status, then this date is treated as the unblock date and is mandatory.<br>•    If the Card Status is “Temporary Block (Customer)” and FromDate & ToDate is provided - The request will be considered as a scheduled specific period unblock request. | getToDate(): ?string | setToDate(?string toDate): void |
| `caller` | `?string` | Optional | The caller to be notified with the status of the scheduled card block / unblock request.<br>Mandatory, if NotifyCaller is true.<br>Maximum field length: 20 | getCaller(): ?string | setCaller(?string caller): void |
| `notifyCaller` | `?bool` | Optional | True/False.<br>Optional.<br>Default: False<br>If true, the caller would be notified back with the status as success or failure after the scheduled card block / unblock request is processed. | getNotifyCaller(): ?bool | setNotifyCaller(?bool notifyCaller): void |

## Example (as JSON)

```json
{
  "ColCoCode": 164,
  "ColCoId": 150,
  "AccountId": 2,
  "AccountNumber": "AccountNumber6",
  "PayerId": 198,
  "Action": "Action2"
}
```

