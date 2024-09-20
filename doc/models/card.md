
# Card

## Structure

`Card`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account ID | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `bundleId` | `?string` | Optional | Bundle Id associated with card in the Gateway.<br /><br><br>This field will have null value if the card is not associated with any bundle in Gateway or the value of IncludeBundleDetails in request is false. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `cardBlockSchedules` | [`?(CardBlockSchedule[])`](../../doc/models/card-block-schedule.md) | Optional | List of Scheduled Card Blocks details<br /><br>Entity: CardBlockSchedule | getCardBlockSchedules(): ?array | setCardBlockSchedules(?array cardBlockSchedules): void |
| `cardGroupId` | `?int` | Optional | Card group ID | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card group name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `cardId` | `?int` | Optional | Unique Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `cardTypeCode` | `?string` | Optional | ISO code of the card i.e. first 7 digits of the PAN | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeId` | `?int` | Optional | Card Type ID Example Id and Description: 1 -Philippines CRT 7077861 2-Philippines<br /><br>Fleet 7002861 5-SHELL FLEET-HONG KONG 7002821 6-SHELL NHF- HONG KONG 7002821 7-SHELL CRT- HONG KONG 7077821 | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name Example Id and Description: 1-Philippines CRT 7077861 2-Philippines <br /><br>Fleet 7002861 5-SHELL FLEET- HONG KONG 7002821 6-SHELL NHF- HONG KONG 7002821 7-SHELL  CRT- HONG KONG 7077821 | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `colCoCountryCode` | `?string` | Optional | The 2 character ISO Code for the customer and card owning country. <br /><br>If default card type is not set then the first two alphabets of the account ID is returned. | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `creationDate` | `?string` | Optional | Card Creation datetime.<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: Clients to convert this to appropriate DateTime type. | getCreationDate(): ?string | setCreationDate(?string creationDate): void |
| `driverName` | `?string` | Optional | Driver name | getDriverName(): ?string | setDriverName(?string driverName): void |
| `effectiveDate` | `?string` | Optional | Effective date for the Card<br /><br>Format: yyyyMMdd<br /><br>Note: Clients to convert this to appropriate DateTime type. | getEffectiveDate(): ?string | setEffectiveDate(?string effectiveDate): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card.<br /><br>Format: yyyyMMdd<br /><br>Note: Clients to convert this to appropriate DateTime type. | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `fleetIdInput` | `?bool` | Optional | True/False True if fleet id input is enabled, else false | getFleetIdInput(): ?bool | setFleetIdInput(?bool fleetIdInput): void |
| `isCRT` | `?bool` | Optional | True/False True if it is a CRT type card, else false | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True/False True if it is a Fleet type card, else false | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isInternational` | `?bool` | Optional | True/False True if it is an international card, else false | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isNational` | `?bool` | Optional | True/False True if it is a national card, else false | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True/False True if it is allowed at all partner sites, else false | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `isShellSitesOnly` | `?bool` | Optional | True/False True if it is only allowed at Shell sites, else false | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `issueDate` | `?string` | Optional | Issue date<br /><br>Format: yyyyMMdd<br /><br>Note: Clients to convert this to appropriate DateTime type. | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `isSuperseded` | `?bool` | Optional | True/False True if a new card is issued with the same PAN, else false. | getIsSuperseded(): ?bool | setIsSuperseded(?bool isSuperseded): void |
| `isVirtualCard` | `?bool` | Optional | True/False True if it is a virtual card, else false | getIsVirtualCard(): ?bool | setIsVirtualCard(?bool isVirtualCard): void |
| `lastModifiedDate` | `?string` | Optional | Card last modified date and time<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: Clients to convert this to appropriate DateTime type. | getLastModifiedDate(): ?string | setLastModifiedDate(?string lastModifiedDate): void |
| `lastUsedDate` | `?string` | Optional | Card last used date .<br /><br>Note: last used date of a card will be calculated based on billed/unbilled sales items<br><br>      of a given card.The query that extracts the last used dates will be applied on the<br>    <br>      subset of the cards being returned to the client.Unbilled sales items is checked<br>    <br>      first and for those not found in the unbilled table, sales items will be checked<br>    <br>      (only when the last used date is not found in unbilled table for at least a single<br>    <br>      card from the result). The transactions in last 48 hours are not expected to be<br><br>Therefore this field gives the correct information up to 48 hours early.<br /><br>Format: yyyyMMdd HH:mm:ss<br /><br>Note: Clients to convert this to appropriate DateTime type | getLastUsedDate(): ?string | setLastUsedDate(?string lastUsedDate): void |
| `localCurrencyCode` | `?string` | Optional | ISO code of the local currency. <br /> | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Local currency symbol. <br /> | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `odometerInput` | `?bool` | Optional | True/False True if odometer input is enabled on the card, else false | getOdometerInput(): ?bool | setOdometerInput(?bool odometerInput): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `maskedPAN` | `?string` | Optional | Card PAN Mask PAN (Mask all digits except the Last 6 digits of the PAN) | getMaskedPAN(): ?string | setMaskedPAN(?string maskedPAN): void |
| `pANID` | `?float` | Optional | Card PAN ID. | getPANID(): ?float | setPANID(?float pANID): void |
| `purchaseCategoryCode` | `?string` | Optional | Purchase category code | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `purchaseCategoryId` | `?int` | Optional | Purchase category Id <br /><br>Note: Not Purchase code. | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `purchaseCategoryName` | `?string` | Optional | Purchase category name | getPurchaseCategoryName(): ?string | setPurchaseCategoryName(?string purchaseCategoryName): void |
| `reason` | `?string` | Optional | Card Status reason Example: Lost Stolen Card no longer required | getReason(): ?string | setReason(?string reason): void |
| `reissueSetting` | `?string` | Optional | Reissue setting of the card. If the card is superseded (i.e. a replacement/new card is issued) then reissue setting of the latest card issued. <br /><br>Values<br /><br>•True –Card will be Reissued when nearing its expiry date <br /><br>•False –Card will not be Reissued | getReissueSetting(): ?string | setReissueSetting(?string reissueSetting): void |
| `statusDescription` | `?string` | Optional | Status Description (Active, Temporarily Blocked, etc.,)<br /><br>Possible Ids and description: 1 Active 7 Blocked Card 8 Expired 9 Cancelled 10 New 23 Pending Renewal 31 Replaced 41<br /><br>Temporary Block(Customer) 42 Temporary Block(Shell) 43 Fraud 101 Active(Block in progress)<br /><br><br>* 102 Blocked Card(Unblock in progress) <br /><br>* 103 Active(Cancel in progress) <br /><br>* 104 Active(Marked as damaged)<br /><br>* 105 New(Cancel in progress) <br /><br>* 106 { Status}(Scheduled for block)<br /><br>* 107 { Status}(Scheduled for unblock) <br /><br>  *# Note: Items marked with* are intermediate statuses  to indicate that there are pending requests in progress.<br /><br>  The response can contain these intermediate statuses only if the<br /><br>  IncludeIntermediateStatus flag is true. The placeholder { Status} in the items<br /><br>  marked with # will be replaced with the  status description. E.g., Active (Scheduled for block) | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `statusId` | `?int` | Optional | Card Status id Possible Ids and description: 1 Active 7 Blocked Card 8 Expired 9 Cancelled 10 New 23 Pending Renewal 31 Replaced 41 Temporary Block(Customer) 42 <br /><br>Temporary Block(Shell) 43 Fraud 101 Active(Block in progress) <br /><br><br>* 102 Blocked Card(Unblock in progress)<br /><br>* 103 Active(Cancel in progress) <br /><br>* 104 Active(Marked as damaged) <br /><br>* 105 New(Cancel in progress)<br /><br>* 106 { Status}(Scheduled for block) <br /><br><br># 107 {Status}(Scheduled for unblock)<br /><br><br>*# Note: Items marked with* are intermediate statuses to indicate that there are pending requests in progress.<br /><br>The response can contain these intermediate statuses only if the IncludeIntermediateStatus flag is true.<br /><br>The placeholder { Status} in the items marked with # will be replaced with<br /><br>the status description. E.g., Active (Scheduled for block) | getStatusId(): ?int | setStatusId(?int statusId): void |
| `tokenTypeID` | `?int` | Optional | Token Type ID configured for the Card E.g. 107 | getTokenTypeID(): ?int | setTokenTypeID(?int tokenTypeID): void |
| `tokenTypeName` | `?string` | Optional | Token Type Name configured for the Card | getTokenTypeName(): ?string | setTokenTypeName(?string tokenTypeName): void |
| `vRN` | `?string` | Optional | Vehicle registration number | getVRN(): ?string | setVRN(?string vRN): void |
| `clientReferenceId` | `?string` | Optional | Customer reference number of the card. | getClientReferenceId(): ?string | setClientReferenceId(?string clientReferenceId): void |
| `isEMVContact` | `?bool` | Optional | Is Europay, MasterCard, and Visa Contact enabled or not. | getIsEMVContact(): ?bool | setIsEMVContact(?bool isEMVContact): void |
| `isEMVContactless` | `?bool` | Optional | Is Europay, MasterCard, and Visa Contactless enabled or not. | getIsEMVContactless(): ?bool | setIsEMVContactless(?bool isEMVContactless): void |
| `isRFID` | `?bool` | Optional | Whether the card type is enabled for RFID (Radio Frequency Identification) | getIsRFID(): ?bool | setIsRFID(?bool isRFID): void |
| `rFIDUID` | `?string` | Optional | RFIDUID | getRFIDUID(): ?string | setRFIDUID(?string rFIDUID): void |
| `eMAID` | `?string` | Optional | EMAID | getEMAID(): ?string | setEMAID(?string eMAID): void |
| `eVPrintedNumber` | `?string` | Optional | EV Printed Number | getEVPrintedNumber(): ?string | setEVPrintedNumber(?string eVPrintedNumber): void |
| `cardMediaCode` | `?string` | Optional | Card Media Code. | getCardMediaCode(): ?string | setCardMediaCode(?string cardMediaCode): void |

## Example (as JSON)

```json
{
  "AccountId": 140,
  "AccountName": "AccountName0",
  "AccountNumber": "AccountNumber4",
  "AccountShortName": "AccountShortName6",
  "BundleId": "BundleId2"
}
```

