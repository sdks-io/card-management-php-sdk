
# Order Card Enquiry

This entity models the data that is sent in the https

## Structure

`OrderCardEnquiry`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account ID on the card request | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | AccountNumber | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `bCOReference` | `?int` | Optional | Bulk card order request refrence numer.<br /><br>This field will be null if the order is not through BCO. | getBCOReference(): ?int | setBCOReference(?int bCOReference): void |
| `bCORowNumber` | `?int` | Optional | Row number of the request in the BCO file.<br /><br>This field will be null if the order is not through BCO. | getBCORowNumber(): ?int | setBCORowNumber(?int bCORowNumber): void |
| `cardGroupId` | `?int` | Optional | Card group ID | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card group name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `cardId` | `?int` | Optional | Unique Card Id.<br /><br>The field will be null if the card order request is not successly processed. | getCardId(): ?int | setCardId(?int cardId): void |
| `cardPAN` | `?string` | Optional | Card PAN.<br /><br>Mask PAN (Mask all digits except the Last 6 digits of the PAN).<br /><br>The field will be null if the card order request is not successly processed. | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `maskedPAN` | `?string` | Optional | Card PAN | getMaskedPAN(): ?string | setMaskedPAN(?string maskedPAN): void |
| `pANID` | `?float` | Optional | Card PAN ID as a unique number for each PAN | getPANID(): ?float | setPANID(?float pANID): void |
| `cardTypeCode` | `?string` | Optional | CardTypeCode<br /><br>ISO code of the card i.e. first 7 digits of the PAN | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeId` | `?int` | Optional | CardTypeId | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | CardTypeName | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `driverName` | `?string` | Optional | Driver name | getDriverName(): ?string | setDriverName(?string driverName): void |
| `errorCode` | `?string` | Optional | Error code for the order card request.<br /><br>The value will be 0000 if it is processed without errors. | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorDescription` | `?string` | Optional | Error description for the order card request.<br /><br>The value will be empty string if it is processed without errors. | getErrorDescription(): ?string | setErrorDescription(?string errorDescription): void |
| `gatewaySyncErrorCode` | `?string` | Optional | Error code for the Gateway sync error.<br /><br>The value will be 0000 if it is processed without errors. | getGatewaySyncErrorCode(): ?string | setGatewaySyncErrorCode(?string gatewaySyncErrorCode): void |
| `gatewaySyncErrorDescription` | `?string` | Optional | Error description for the Gateway sync error.<br /><br>The value will be empty string if it is processed without errors. | getGatewaySyncErrorDescription(): ?string | setGatewaySyncErrorDescription(?string gatewaySyncErrorDescription): void |
| `gatewaySyncStatus` | `?string` | Optional | GatewaySyncStatus<br /><br>Status of the card sync with CFGW.<br /><br>Possible values:<br /><br>-Success<br /><br>-Failed<br /><br>-In Progress<br /><br>-Not Submitted | getGatewaySyncStatus(): ?string | setGatewaySyncStatus(?string gatewaySyncStatus): void |
| `mainReference` | `?int` | Optional | Main reference number for the order card request.<br /><br>This field will be null if the order is through BCO. | getMainReference(): ?int | setMainReference(?int mainReference): void |
| `orderCardReference` | `?int` | Optional | Indivitual card reference number for the order card request.<br /><br>This field will be null if the order is through BCO. | getOrderCardReference(): ?int | setOrderCardReference(?int orderCardReference): void |
| `orderStatus` | `?string` | Optional | Order status.<br /><br>Possible values:<br /><br>P   Pending<br /><br>I   Picked up for processing<br /><br>PX    Failed at Queue but retry attempts pending<br /><br>X    Failed  at Queue<br /><br>R    Card is processed, awaiting for PAN update.<br /><br>S    Processed<br /><br>F    Failed | getOrderStatus(): ?string | setOrderStatus(?string orderStatus): void |
| `payerId` | `?int` | Optional | Payer ID on the card request. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number on the card request | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `processedDate` | `?string` | Optional | Date and time (in cutomers local time) when the card order request is processed<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: The client application to convert the string to appropriate date/time type. | getProcessedDate(): ?string | setProcessedDate(?string processedDate): void |
| `purchaseCategoryCode` | `?string` | Optional | PurchaseCategoryCode | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `purchaseCategoryId` | `?int` | Optional | PurchaseCategoryId <br /><br>Note: Not Purchase code. This is a unique purchase category id assigned | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `purchaseCategoryName` | `?string` | Optional | PurchaseCategoryName | getPurchaseCategoryName(): ?string | setPurchaseCategoryName(?string purchaseCategoryName): void |
| `submittedDate` | `?string` | Optional | Date and time (in cutomers local time) when the card order request is submitted.<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: The client application to convert the string to appropriate date/time type. | getSubmittedDate(): ?string | setSubmittedDate(?string submittedDate): void |
| `syncProcessedDate` | `?string` | Optional | SyncProcessedDate<br /><br>Date and time (in cutomers local time) when the sync card request is processed.<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: The client application to convert the string to appropriate date/time type. | getSyncProcessedDate(): ?string | setSyncProcessedDate(?string syncProcessedDate): void |
| `syncRequestedDate` | `?string` | Optional | SyncRequestedDate<br /><br>Date and time (in cutomers local time) when the sync card request is submitted.<br /><br>Format: yyyyMMdd HH:mm:ss <br /><br>Note: The client application to convert the string to appropriate date/time type. | getSyncRequestedDate(): ?string | setSyncRequestedDate(?string syncRequestedDate): void |
| `vRN` | `?string` | Optional | Vehicle registration number | getVRN(): ?string | setVRN(?string vRN): void |
| `orderRequestId` | `?string` | Optional | Unique Id of the Original Order card request, the status of which is enquired by this API. <br /><br>This is returned for end to end traceability of a request based on the original Order Card request. | getOrderRequestId(): ?string | setOrderRequestId(?string orderRequestId): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card.<br>Format: yyyymmdd hh:mm:ss<br>(Clients to convert this to appropriate DateTime type.)<br>Note: This is the Expiry Date saved DB.<br>If the Order Card request is still not processed, i.e. PAN is not yet issued, this field will be null or empty.<br>For a Card Order with a custom Expiry Date passed in the request, this value will be returned after it is updated successfully in GFN by the background process. | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `clientReferenceId` | `?string` | Optional | This is the Client Reference Id of card in the order which needs to be passed by the client. | getClientReferenceId(): ?string | setClientReferenceId(?string clientReferenceId): void |
| `statusDescription` | `?string` | Optional | Order status.<br /><br>Possible values<br /><br><br>Success<br /><br><br>Failed<br /><br><br>InProgress<br /> | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `colCoId` | `?int` | Optional | Colcoid | getColCoId(): ?int | setColCoId(?int colCoId): void |

## Example (as JSON)

```json
{
  "AccountId": 206,
  "AccountNumber": "AccountNumber0",
  "BCOReference": 154,
  "BCORowNumber": 80,
  "CardGroupId": 252
}
```

