
# Card Details Request

## Structure

`CardDetailsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCountryCode` | `?string` | Optional | ISO Country code of collecting company | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `clientReferenceId` | `?string` | Optional | Customer reference number of the card.<br>Optional | getClientReferenceId(): ?string | setClientReferenceId(?string clientReferenceId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment of the selected payer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if AccountId is passed, else mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Optional if AccountNumber is passed, else mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `tokenTypeID` | `?int` | Optional | Token Type ID for the Card<br>Optional | getTokenTypeID(): ?int | setTokenTypeID(?int tokenTypeID): void |
| `tokenTypeName` | `?string` | Optional | Token Type name for the Card<br>Optional | getTokenTypeName(): ?string | setTokenTypeName(?string tokenTypeName): void |
| `creationDate` | `?string` | Optional | Card Creation Date time<br>Optional<br>Format: yyyyMMdd | getCreationDate(): ?string | setCreationDate(?string creationDate): void |
| `effectiveDate` | `?string` | Optional | Effective date for the Card<br>Optional<br>Format: yyyyMMdd | getEffectiveDate(): ?string | setEffectiveDate(?string effectiveDate): void |
| `includeBundleDetails` | `?bool` | Optional | When the value is True, API will return bundle Id associated with card in the response, if available.<br>Note: Use ‘Null’ or ‘False’ for optimum performance. A delay in response is expected when set to ‘True’. | getIncludeBundleDetails(): ?bool | setIncludeBundleDetails(?bool includeBundleDetails): void |
| `includeIntermediateStatus` | `?bool` | Optional | A flag which indicates if the response can contain intermediate statuses | getIncludeIntermediateStatus(): ?bool | setIncludeIntermediateStatus(?bool includeIntermediateStatus): void |
| `includeScheduledCardBlocks` | `?bool` | Optional | A flag which indicates if the response can contain scheduled card blocks details | getIncludeScheduledCardBlocks(): ?bool | setIncludeScheduledCardBlocks(?bool includeScheduledCardBlocks): void |

## Example (as JSON)

```json
{
  "ColCoCode": 154,
  "ColCoId": 140,
  "ColCoCountryCode": "ColCoCountryCode6",
  "ClientReferenceId": "ClientReferenceId2",
  "PayerNumber": "PayerNumber8"
}
```

