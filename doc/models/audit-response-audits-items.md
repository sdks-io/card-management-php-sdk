
# Audit Response Audits Items

## Structure

`AuditResponseAuditsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account id of the customer.<br>It will be the source account id in case of “Fund Transfer | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account number of the customer.<br>It will be the source account number in case of “Fund Transfer” | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `additionalInformation1` | `?string` | Optional | Additional information in the request. | getAdditionalInformation1(): ?string | setAdditionalInformation1(?string additionalInformation1): void |
| `additionalInformation2` | `?string` | Optional | Additional information in the request. | getAdditionalInformation2(): ?string | setAdditionalInformation2(?string additionalInformation2): void |
| `additionalInformation3` | `?string` | Optional | Additional information in the request. | getAdditionalInformation3(): ?string | setAdditionalInformation3(?string additionalInformation3): void |
| `additionalInformation4` | `?string` | Optional | Additional information in the request. | getAdditionalInformation4(): ?string | setAdditionalInformation4(?string additionalInformation4): void |
| `additionalInformation5` | `?string` | Optional | Additional information in the request. | getAdditionalInformation5(): ?string | setAdditionalInformation5(?string additionalInformation5): void |
| `additionalInformation6` | `?string` | Optional | Additional information in the request. | getAdditionalInformation6(): ?string | setAdditionalInformation6(?string additionalInformation6): void |
| `additionalInformation7` | `?string` | Optional | Additional information in the request. | getAdditionalInformation7(): ?string | setAdditionalInformation7(?string additionalInformation7): void |
| `additionalInformation8` | `?string` | Optional | Additional information in the request. | getAdditionalInformation8(): ?string | setAdditionalInformation8(?string additionalInformation8): void |
| `additionalInformation9` | `?string` | Optional | Additional information in the request. | getAdditionalInformation9(): ?string | setAdditionalInformation9(?string additionalInformation9): void |
| `cardGroupId` | `?int` | Optional | Additional information in the request. | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card group name in the request. | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `cardId` | `?int` | Optional | Card Id in the request | getCardId(): ?int | setCardId(?int cardId): void |
| `colCoCode` | `?int` | Optional | Collecting company code of the customer | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoId` | `?int` | Optional | Collecting company id of the customer. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `errorCode` | `?string` | Optional | Error code of the request | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorString` | `?string` | Optional | Error description of the request | getErrorString(): ?string | setErrorString(?string errorString): void |
| `globalRequestID` | `?string` | Optional | Global unique request reference provided by client application. | getGlobalRequestID(): ?string | setGlobalRequestID(?string globalRequestID): void |
| `pAN` | `?string` | Optional | PAN in the request.<br>If Mask PAN is enabled at Microservices configuration then all digits of the PAN, except the last 6 digits, will be masked. | getPAN(): ?string | setPAN(?string pAN): void |
| `payerId` | `?int` | Optional | Payer id of the customer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer number of the customer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `processedOn` | `?string` | Optional | Request processed date.<br>Format: yyyyMMdd HH:mm: ss | getProcessedOn(): ?string | setProcessedOn(?string processedOn): void |
| `requestedBy` | `?string` | Optional | vUUID of the user who submitted this request.<br>It will be the UUID of the Driver in the case of “MobilePaymentRegistration” | getRequestedBy(): ?string | setRequestedBy(?string requestedBy): void |
| `requestedOperation` | `?string` | Optional | User requested operation.<br>Possible values:<br>•    OrderCard<br>•    CreateCardGroup<br>•    PINReminder<br>•    MoveCard<br>•    UpdateCardStatus<br>•    UpdateCardGroup<br>•    AutoRenew<br>•    BulkCardOrder<br>•    BulkCardBlock<br>•    BulkCardOrderMultiAccount<br>•    MobilePaymentRegistration<br>•    UpdateCompanyInfo<br>•    BCOSummary<br>•    BCOMultiAccountSummary<br>•    BCBSummary<br>•    FundTransfer<br>•    DeliveryAddressUpdate | getRequestedOperation(): ?string | setRequestedOperation(?string requestedOperation): void |
| `requestReference` | `?int` | Optional | Reference number for the requested operation. | getRequestReference(): ?int | setRequestReference(?int requestReference): void |
| `requestType` | `?string` | Optional | Request type initiated under the requested operation.<br>Possible values:<br>•    OrderCard<br>•    CreateCardGroup<br>•    PINReminder<br>•    MoveCard<br>•    UpdateCardStatus<br>•    UpdateCardGroup<br>•    AutoRenew<br>•    BulkCardOrder<br>•    BulkCardBlock<br>•    BulkCardOrderMultiAccount<br>•    MobilePaymentRegistration<br>•    UpdateCompanyInfo<br>•    BCOSummary<br>•    BCOMultiAccountSummary<br>•    BCBSummary<br>•    FundTransfer<br>•    DeliveryAddressUpdate | getRequestType(): ?string | setRequestType(?string requestType): void |
| `status` | `?string` | Optional | Status of the request.<br>Possible values:<br>•    Success<br>•    Failed<br>•    InProgress<br>•    Submitted<br>•    Rejected<br>•    PendingApproval<br>•    MailedToCSC | getStatus(): ?string | setStatus(?string status): void |
| `submittedOn` | `?string` | Optional | Request submitted date.<br>Format: yyyyMMdd HH:mm: ss | getSubmittedOn(): ?string | setSubmittedOn(?string submittedOn): void |
| `subRequestReference` | `?int` | Optional | Reference number for the individual request type. | getSubRequestReference(): ?int | setSubRequestReference(?int subRequestReference): void |
| `userDisplayName` | `?string` | Optional | Display name of the user who submitted this request.<br>It will be the Display Name of the Driver in the case of “MobilePaymentRegistration” in the below format: | getUserDisplayName(): ?string | setUserDisplayName(?string userDisplayName): void |

## Example (as JSON)

```json
{
  "AccountId": 123,
  "AccountNumber": "BE00000113",
  "AdditionalInformation1": "922",
  "AdditionalInformation2": "2016",
  "AdditionalInformation3": "MERCEDES GLE KLASSE SEGM. L",
  "AdditionalInformation4": "408135/3",
  "AdditionalInformation5": "API TEST CUSTOMER 113",
  "AdditionalInformation6": "408135/3",
  "AdditionalInformation7": "null",
  "AdditionalInformation8": "null",
  "AdditionalInformation9": "null",
  "CardGroupId": 123,
  "CardGroupName": "test",
  "CardId": 10594,
  "ColCoCode": 9,
  "ColCoId": 9,
  "ErrorCode": "0000",
  "ErrorString": "null",
  "GlobalRequestID": "6f1473ea-7f68-4ccb-acee-4b5b997aad5a",
  "PAN": "7002097550439850717",
  "PayerId": 123,
  "PayerNumber": "BE00000113",
  "ProcessedOn": "20240201 14:30:26",
  "RequestedBy": "EWyIv8LpjgW3LlKDDUo0VZMN6JKpqRc",
  "RequestedOperation": "OrderCard",
  "RequestReference": 519876,
  "RequestType": "OrderCard",
  "Status": "Success",
  "SubmittedOn": "20240201 14:29:16",
  "SubRequestReference": 720061,
  "UserDisplayName": "Supriya-ThridPartyAgent"
}
```

