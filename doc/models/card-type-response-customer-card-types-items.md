
# Card Type Response Customer Card Types Items

## Structure

`CardTypeResponseCustomerCardTypesItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `canHavePIN` | `?bool` | Optional | True/False – Whether the cards of this card type can have PIN. | getCanHavePIN(): ?bool | setCanHavePIN(?bool canHavePIN): void |
| `cardTypeId` | `?int` | Optional | Card Type Id | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name. | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `colCoCurrencyCode` | `?string` | Optional | ISO currency code of the country. | getColCoCurrencyCode(): ?string | setColCoCurrencyCode(?string colCoCurrencyCode): void |
| `customerCardTypeId` | `?int` | Optional | Customer Card Type Id | getCustomerCardTypeId(): ?int | setCustomerCardTypeId(?int customerCardTypeId): void |
| `dayTimeRestrictions` | [`?CardDayTimeRestrictions`](../../doc/models/card-day-time-restrictions.md) | Optional | - | getDayTimeRestrictions(): ?CardDayTimeRestrictions | setDayTimeRestrictions(?CardDayTimeRestrictions dayTimeRestrictions): void |
| `defaultPurchaseCategoryId` | `?int` | Optional | Default Purchase category of the card type. | getDefaultPurchaseCategoryId(): ?int | setDefaultPurchaseCategoryId(?int defaultPurchaseCategoryId): void |
| `embossAccountName` | `?string` | Optional | Default Name to be embossed on the card | getEmbossAccountName(): ?string | setEmbossAccountName(?string embossAccountName): void |
| `expiryPeriod` | `?int` | Optional | Default Expiry period. | getExpiryPeriod(): ?int | setExpiryPeriod(?int expiryPeriod): void |
| `isCRT` | `?bool` | Optional | True/False – Wether it is a CRT Card type or not. | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True/False – Whether it is it a Fleet Card typeor not. | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isInternational` | `?bool` | Optional | True/False – Whether it is an International Card type or not. | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isNational` | `?bool` | Optional | True/False – Whether it is a National Card type or not. | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True/False – Whether this card type is allowed in partner Stations. | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `isShellSitesOnly` | `?bool` | Optional | True/False – Whether it is only allowed in Shell Stations or not. | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `isVirtual` | `?bool` | Optional | True/False - Whether it is a Virtual Card type or not. | getIsVirtual(): ?bool | setIsVirtual(?bool isVirtual): void |
| `isVisibleToCustomers` | `?bool` | Optional | True/False – Whether this card type is visible in SFH for card ordering. | getIsVisibleToCustomers(): ?bool | setIsVisibleToCustomers(?bool isVisibleToCustomers): void |
| `isActive` | `?bool` | Optional | Whether card type is active or not. | getIsActive(): ?bool | setIsActive(?bool isActive): void |
| `isCardAvailableForDownload` | `?bool` | Optional | - | getIsCardAvailableForDownload(): ?bool | setIsCardAvailableForDownload(?bool isCardAvailableForDownload): void |
| `isCardVisibleToCustomers` | `?bool` | Optional | - | getIsCardVisibleToCustomers(): ?bool | setIsCardVisibleToCustomers(?bool isCardVisibleToCustomers): void |
| `pANLength` | `?int` | Optional | PAN Length | getPANLength(): ?int | setPANLength(?int pANLength): void |
| `purchaseCategories` | [`?(PurchaseCategories[])`](../../doc/models/purchase-categories.md) | Optional | - | getPurchaseCategories(): ?array | setPurchaseCategories(?array purchaseCategories): void |
| `tokenTypeId` | `?int` | Optional | Token type identifier. | getTokenTypeId(): ?int | setTokenTypeId(?int tokenTypeId): void |
| `tokenTypeName` | `?string` | Optional | Token Type Name. | getTokenTypeName(): ?string | setTokenTypeName(?string tokenTypeName): void |
| `usageRestrictions` | [`?CardUsageRestrictions`](../../doc/models/card-usage-restrictions.md) | Optional | - | getUsageRestrictions(): ?CardUsageRestrictions | setUsageRestrictions(?CardUsageRestrictions usageRestrictions): void |
| `eMVContactless` | `?bool` | Optional | Is Europay, MasterCard, and Visa Contactless enabled or not. | getEMVContactless(): ?bool | setEMVContactless(?bool eMVContactless): void |
| `rFID` | `?bool` | Optional | Whether the card type is enabled for RFID (Radio Frequency Identification) | getRFID(): ?bool | setRFID(?bool rFID): void |
| `pINChangeSupported` | `?bool` | Optional | PIN change supported or not. | getPINChangeSupported(): ?bool | setPINChangeSupported(?bool pINChangeSupported): void |
| `requirePIN` | `?bool` | Optional | Whether a PIN is mandatory for the cards of this card type. | getRequirePIN(): ?bool | setRequirePIN(?bool requirePIN): void |
| `offlinePIN` | `?bool` | Optional | Whether offline PIN is enabled or not. | getOfflinePIN(): ?bool | setOfflinePIN(?bool offlinePIN): void |
| `isDefault` | `?bool` | Optional | Whether card type is default or not. | getIsDefault(): ?bool | setIsDefault(?bool isDefault): void |
| `applicationsToShowNPIITokens` | `?bool` | Optional | True/False<br>Note: ApplicationsToShowNPIITokens will be set as ‘True’ when the accessing application API key exists in the “ApplicationsToShowNPIITokens” card type configuration else “False”. | getApplicationsToShowNPIITokens(): ?bool | setApplicationsToShowNPIITokens(?bool applicationsToShowNPIITokens): void |
| `mediumTypeID` | `?int` | Optional | Id of the medium type identifier.<br>Example: 1,2,4<br><br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>3 - EV only<br>4 - Fuel Card and Key Fob<br>5 - Key Fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 – Smartpay Token | getMediumTypeID(): ?int | setMediumTypeID(?int mediumTypeID): void |
| `mediumType` | `?string` | Optional | Name of the medium type identifier.<br>Example: Fuel Card, Fuel Card with EV, Key Fob<br><br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>3 - EV only<br>4 - Fuel Card and Key Fob<br>5 - Key Fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 - Smartpay Token | getMediumType(): ?string | setMediumType(?string mediumType): void |
| `colCoCurrencySymbol` | `?string` | Optional | Currency symbol of the country. | getColCoCurrencySymbol(): ?string | setColCoCurrencySymbol(?string colCoCurrencySymbol): void |

## Example (as JSON)

```json
{
  "CardTypeId": 228,
  "CardTypeName": "DE-Kleinfhzg. International Multi",
  "ColCoCurrencyCode": "EUR",
  "CustomerCardTypeId": 1576,
  "DefaultPurchaseCategoryId": 127,
  "EmbossAccountName": "5.11.3 DE",
  "ExpiryPeriod": 48,
  "PANLength": 19,
  "TokenTypeId": 160,
  "TokenTypeName": "DE FLT INT MUL - CHIP",
  "MediumTypeID": 1,
  "MediumType": "Fuel Card",
  "ColCoCurrencySymbol": "£",
  "CanHavePIN": false
}
```

