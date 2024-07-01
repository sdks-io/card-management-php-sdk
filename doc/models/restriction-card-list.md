
# Restriction Card List

## Structure

`RestrictionCardList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Unique Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card<br>Format: yyyyMMdd<br>Note: Clients to convert this to appropriate DateTime type. | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `statusId` | `?int` | Optional | Card Status id | getStatusId(): ?int | setStatusId(?int statusId): void |
| `statusDescription` | `?string` | Optional | Status Description (Active, Temporarily Blocked, etc.,) | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `driverName` | `?string` | Optional | Driver name<br>Example:  ANDREW GILBERRY | getDriverName(): ?string | setDriverName(?string driverName): void |
| `vRN` | `?string` | Optional | Vehicle registration number<br>Example: MV65YLH | getVRN(): ?string | setVRN(?string vRN): void |
| `issueDate` | `?string` | Optional | Issue date<br>Format: yyyyMMdd<br>Note: Clients to convert this to appropriate DateTime type. | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `issueNumber` | `?int` | Optional | Issue Number | getIssueNumber(): ?int | setIssueNumber(?int issueNumber): void |
| `accountId` | `?int` | Optional | Account ID<br>Example: 29484 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number<br>Example: GB99215176 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountName` | `?string` | Optional | Account Name<br>Example: MATTHEW ALGIE & COMPANY LIMITED | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `currencyCode` | `?string` | Optional | ISO currency code of the Customer Currency<br>Example: GBP | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `colCoCurrencyCode` | `?string` | Optional | ISO currency code of the country.<br>Example: GBP | getColCoCurrencyCode(): ?string | setColCoCurrencyCode(?string colCoCurrencyCode): void |
| `colCoCurrencySymbol` | `?string` | Optional | Currency symbol of the country.<br>Example: £, $ | getColCoCurrencySymbol(): ?string | setColCoCurrencySymbol(?string colCoCurrencySymbol): void |
| `restrictionCurrencyCode` | `?string` | Optional | ISO currency code of the country.<br>Example: GBP | getRestrictionCurrencyCode(): ?string | setRestrictionCurrencyCode(?string restrictionCurrencyCode): void |
| `restrictionCurrencySymbol` | `?string` | Optional | Currency symbol of the country.<br>Example: £, $ | getRestrictionCurrencySymbol(): ?string | setRestrictionCurrencySymbol(?string restrictionCurrencySymbol): void |
| `purchaseCategoryId` | `?string` | Optional | Purchase category Id<br>Example: 123, 124, etc., | getPurchaseCategoryId(): ?string | setPurchaseCategoryId(?string purchaseCategoryId): void |
| `purchaseCategoryCode` | `?string` | Optional | Purchase category code<br>Example:<br>0 - All Fuels (without VP) and Lubricants<br>1 - FuelSave only<br>2 - FuelSave and Lubricants<br>3 - No Restrictions<br>4 - VP and FuelSave<br>5 - Diesel ONLY<br>6 - Diesel and Lubricants<br>7 - VP and Lubricants<br>8 - VP and FuelSave and Lubricants | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `purchaseCategoryName` | `?string` | Optional | Purchase category name<br>Example:<br>0 - All Fuels (without VP) and Lubricants<br>1 - FuelSave only<br>2 - FuelSave and Lubricants<br>3 - No Restrictions<br>4 - VP and FuelSave<br>5 - Diesel ONLY<br>6 - Diesel and Lubricants<br>7 - VP and Lubricants<br>8 - VP and FuelSave and Lubricants | getPurchaseCategoryName(): ?string | setPurchaseCategoryName(?string purchaseCategoryName): void |
| `isSuperseded` | `?bool` | Optional | True/False<br>True if a new card is issued with the same PAN, else false | getIsSuperseded(): ?bool | setIsSuperseded(?bool isSuperseded): void |
| `isVirtualCard` | `?bool` | Optional | True/False<br>True if it is a virtual card, else false | getIsVirtualCard(): ?bool | setIsVirtualCard(?bool isVirtualCard): void |
| `isNational` | `?bool` | Optional | True/False<br>True if it is a national card, else false | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isInternational` | `?bool` | Optional | True/False<br>True if it is an international card, else false | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isCRT` | `?bool` | Optional | True/False<br>True if it is a CRT type card, else false | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True/False<br>True if it is a Fleet type card, else false | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isShellSitesOnly` | `?bool` | Optional | True/False<br>True if it is only allowed at Shell sites, else false | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True/False<br>True if it is allowed at all partner sites, else false | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `cardTypeId` | `?int` | Optional | Card Type ID<br>Example Id & Description:<br>1 - Philippines CRT 7077861<br>2- Philippines Fleet 7002861<br>5-SHELL FLEET- HONG KONG 7002821<br>6-SHELL NHF- HONG KONG 7002821<br>7-SHELL CRT- HONG KONG 7077821 | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeCode` | `?string` | Optional | ISO code of the card i.e. first 7 digits of the PAN | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeName` | `?string` | Optional | Card Type Name<br>Example Id & Description:<br>1 - Philippines CRT 7077861<br>2- Philippines Fleet 7002861<br>5-SHELL FLEET- HONG KONG 7002821<br>6-SHELL NHF- HONG KONG 7002821<br>7-SHELL CRT- HONG KONG 7077821 | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `bundleId` | `?string` | Optional | Bundle Id associated with card in the Gateway.<br>This field will have a null value if the card is not associated with any bundle of IncludeBundleDetails in request is false.<br>If the search is based on a bundle Id, the same will be returned. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `mediumTypeID` | `?int` | Optional | Id of the medium type identifier.<br>Example: 1,2,4<br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>4 - Fuel Card and Key fob Card<br>5 - Key fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 – Smartpay | getMediumTypeID(): ?int | setMediumTypeID(?int mediumTypeID): void |
| `mediumType` | `?string` | Optional | Name of the medium type identifier.<br><br>Example: Fuel Card, Fuel Card with EV, Key fob  <br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>4 - Fuel Card and Key fob Card<br>5 - Key fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 - Smartpay | getMediumType(): ?string | setMediumType(?string mediumType): void |

## Example (as JSON)

```json
{
  "CardId": 110,
  "PAN": "PAN8",
  "ExpiryDate": "ExpiryDate8",
  "StatusId": 178,
  "StatusDescription": "StatusDescription4"
}
```

