
# Card Type Response Customer Card Types Items

## Structure

`CardTypeResponseCustomerCardTypesItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardTypeId` | `?int` | Optional | Card Type Id in Cards Platform. | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `tokenTypeId` | `?int` | Optional | Token type identifier. | getTokenTypeId(): ?int | setTokenTypeId(?int tokenTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name. | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `tokenTypeName` | `?string` | Optional | Token Type Name. | getTokenTypeName(): ?string | setTokenTypeName(?string tokenTypeName): void |
| `pANLength` | `?int` | Optional | PAN Length. | getPANLength(): ?int | setPANLength(?int pANLength): void |
| `expiryPeriod` | `?int` | Optional | Default Expiry period. | getExpiryPeriod(): ?int | setExpiryPeriod(?int expiryPeriod): void |
| `isNational` | `?bool` | Optional | True/False – Whether it is a National Card type or not. | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isInternational` | `?bool` | Optional | True/False – Whether it is an International Card type or not. | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isCRT` | `?bool` | Optional | True/False – Wether it is a CRT Card type or not. | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True/False – Whether it is it a Fleet Card typeor not. | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isShellSitesOnly` | `?bool` | Optional | True/False – Whether it is only allowed in Shell Stations or not. | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True/False – Whether this card type is allowed in partner Stations. | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `canHavePIN` | `?bool` | Optional | True/False – Whether the cards of this card type can have PIN. | getCanHavePIN(): ?bool | setCanHavePIN(?bool canHavePIN): void |
| `isVirtual` | `?bool` | Optional | True/False - Whether it is a Virtual Card type or not. | getIsVirtual(): ?bool | setIsVirtual(?bool isVirtual): void |
| `isActive` | `?bool` | Optional | Whether card type is active or not. | getIsActive(): ?bool | setIsActive(?bool isActive): void |
| `isCardAvailableForDownload` | `?bool` | Optional | Whether card type is available for download. | getIsCardAvailableForDownload(): ?bool | setIsCardAvailableForDownload(?bool isCardAvailableForDownload): void |
| `colCoCurrencyCode` | `?string` | Optional | ISO currency code of the country. | getColCoCurrencyCode(): ?string | setColCoCurrencyCode(?string colCoCurrencyCode): void |
| `colCoCurrencySymbol` | `?string` | Optional | Currency symbol of the country. | getColCoCurrencySymbol(): ?string | setColCoCurrencySymbol(?string colCoCurrencySymbol): void |
| `eMVContactless` | `?bool` | Optional | Is Europay, MasterCard, and Visa Contactless enabled or not. | getEMVContactless(): ?bool | setEMVContactless(?bool eMVContactless): void |
| `rFID` | `?bool` | Optional | Whether the card type is enabled for RFID (Radio Frequency Identification) | getRFID(): ?bool | setRFID(?bool rFID): void |
| `pINChangeSupported` | `?bool` | Optional | PIN change supported or not. | getPINChangeSupported(): ?bool | setPINChangeSupported(?bool pINChangeSupported): void |
| `requirePIN` | `?bool` | Optional | Whether a PIN is mandatory for the cards of this card type. | getRequirePIN(): ?bool | setRequirePIN(?bool requirePIN): void |
| `offlinePIN` | `?bool` | Optional | Whether offline PIN is enabled or not. | getOfflinePIN(): ?bool | setOfflinePIN(?bool offlinePIN): void |
| `mediumTypeID` | `?int` | Optional | Id of the medium type identifier. <br><br> Full list below - <br> 1 - Fuel Card <br> 2 - Fuel Card with EV <br> 3 - EV only  <br> 4 - Fuel Card and Key Fob <br> 5 - Key Fob <br> 6 - Virtual Card <br> 7 - NPII Token <br> 8 – Smartpay Token | getMediumTypeID(): ?int | setMediumTypeID(?int mediumTypeID): void |
| `mediumType` | `?string` | Optional | Name of the medium type identifier. <br><br> Full list below - <br> 1 - Fuel Card <br> 2 - Fuel Card with EV <br> 3 - EV only  <br> 4 - Fuel Card and Key Fob <br> 5 - Key Fob <br> 6 - Virtual Card <br> 7 - NPII Token <br> 8 – Smartpay Token | getMediumType(): ?string | setMediumType(?string mediumType): void |
| `cartTypeAccounts` | [`?(CartTypeAccount[])`](../../doc/models/cart-type-account.md) | Optional | List of accounts. | getCartTypeAccounts(): ?array | setCartTypeAccounts(?array cartTypeAccounts): void |
| `purchaseCategories` | [`?(PurchaseCategories[])`](../../doc/models/purchase-categories.md) | Optional | - | getPurchaseCategories(): ?array | setPurchaseCategories(?array purchaseCategories): void |

## Example (as JSON)

```json
{
  "CardTypeId": 7077861,
  "TokenTypeId": 1234,
  "CardTypeName": "Philippines CRT",
  "TokenTypeName": "PH FLE NAT SIN R1",
  "PANLength": 12,
  "ExpiryPeriod": 30,
  "IsNational": true,
  "IsInternational": true,
  "IsCRT": true,
  "IsFleet": true,
  "IsShellSitesOnly": true,
  "IsPartnerSitesIncluded": true,
  "CanHavePIN": true,
  "IsVirtual": true,
  "IsActive": true,
  "IsCardAvailableForDownload": true,
  "ColCoCurrencyCode": "GBP",
  "ColCoCurrencySymbol": "£",
  "EMVContactless": true,
  "RFID": true,
  "PINChangeSupported": true,
  "RequirePIN": true,
  "OfflinePIN": true,
  "MediumTypeID": 8,
  "MediumType": "Smartpay Token"
}
```

