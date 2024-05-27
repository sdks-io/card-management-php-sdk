
# Restriction Search Card Response Data Items

## Structure

`RestrictionSearchCardResponseDataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bundleId` | `?int` | Optional | Bundle Id associated with card | getBundleId(): ?int | setBundleId(?int bundleId): void |
| `restrictions` | [`?SearchCardResponseRestrictions`](../../doc/models/search-card-response-restrictions.md) | Optional | - | getRestrictions(): ?SearchCardResponseRestrictions | setRestrictions(?SearchCardResponseRestrictions restrictions): void |
| `restrictionCurrencyCode` | `?string` | Optional | ISO currency code of the country. | getRestrictionCurrencyCode(): ?string | setRestrictionCurrencyCode(?string restrictionCurrencyCode): void |
| `restrictionCurrencySymbol` | `?string` | Optional | Currency symbol of the country. | getRestrictionCurrencySymbol(): ?string | setRestrictionCurrencySymbol(?string restrictionCurrencySymbol): void |
| `accountId` | `?int` | Optional | Account ID | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | AccountShortName | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `cardId` | `?int` | Optional | Unique Card | getCardId(): ?int | setCardId(?int cardId): void |
| `cardTypeCode` | `?string` | Optional | ISO code of the card i.e. first 7 digits of the PAN | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeId` | `?int` | Optional | Card Type ID<br>Example Id & Description:<br>1 - Philippines CRT 7077861<br>2- Philippines Fleet 7002861<br>5-SHELL FLEET- HONG KONG 7002821<br>6-SHELL NHF- HONG KONG 7002821<br>7-SHELL CRT- HONG KONG 7077821 | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name<br>Example Id & Description:<br>1 - Philippines CRT 7077861<br>2- Philippines Fleet 7002861<br>5-SHELL FLEET- HONG KONG 7002821<br>6-SHELL NHF- HONG KONG 7002821<br>7-SHELL CRT- HONG KONG 7077821 | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `colCoCurrencyCode` | `?string` | Optional | ISO currency code of the country | getColCoCurrencyCode(): ?string | setColCoCurrencyCode(?string colCoCurrencyCode): void |
| `colCoCurrencySymbol` | `?string` | Optional | Currency symbol of the country | getColCoCurrencySymbol(): ?string | setColCoCurrencySymbol(?string colCoCurrencySymbol): void |
| `currencyCode` | `?string` | Optional | ISO currency code of the Customer Currency | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Currency symbol of the Customer Currency Code | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `driverName` | `?string` | Optional | Driver name | getDriverName(): ?string | setDriverName(?string driverName): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card<br>Format: yyyyMMdd | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `isCRT` | `?bool` | Optional | True if it is a CRT type card, else false | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True if it is a Fleet type card, else false | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isInternational` | `?bool` | Optional | True if it is an international card, else false | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isNational` | `?bool` | Optional | True if it is a national card, else false | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True if it is allowed at all partner sites, else false | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `isShellSitesOnly` | `?bool` | Optional | True if it is only allowed at Shell sites, else false | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `issueDate` | `?string` | Optional | Issue date<br>Format: yyyyMMdd | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `issueNumber` | `?int` | Optional | Issue Number | getIssueNumber(): ?int | setIssueNumber(?int issueNumber): void |
| `isSuperseded` | `?bool` | Optional | True if a new card is issued with the same PAN, else false | getIsSuperseded(): ?bool | setIsSuperseded(?bool isSuperseded): void |
| `isVirtualCard` | `?bool` | Optional | True if it is a virtual card, else false | getIsVirtualCard(): ?bool | setIsVirtualCard(?bool isVirtualCard): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `purchaseCategoryCode` | `?string` | Optional | Purchase category code<br>Example:<br>0 - All Fuels (without VP) and Lubricants<br>1 - FuelSave only<br>2 - FuelSave and Lubricants<br>3 - No Restrictions<br>4 - VP and FuelSave<br>5 - Diesel ONLY<br>6 - Diesel and Lubricants<br>7 - VP and Lubricants<br>8 - VP and FuelSave and Lubricants | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `purchaseCategoryId` | `?int` | Optional | Purchase category Id | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `purchaseCategoryName` | `?string` | Optional | Purchase category name<br>Example:<br>0 - All Fuels (without VP) and Lubricants<br>1 - FuelSave only<br>2 - FuelSave and Lubricants<br>3 - No Restrictions<br>4 - VP and FuelSave<br>5 - Diesel ONLY<br>6 - Diesel and Lubricants<br>7 - VP and Lubricants<br>8 - VP and FuelSave and Lubricants | getPurchaseCategoryName(): ?string | setPurchaseCategoryName(?string purchaseCategoryName): void |
| `statusDescription` | `?string` | Optional | Status Description (Active, Temporarily Blocked, etc.,) | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `statusId` | `?int` | Optional | Card Status id | getStatusId(): ?int | setStatusId(?int statusId): void |
| `vRN` | `?string` | Optional | Vehicle registration number | getVRN(): ?string | setVRN(?string vRN): void |
| `mediumTypeID` | `?int` | Optional | Id of the medium type identifier.<br><br>Example: 1,2,4<br><br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>4 - Fuel Card and Key fob Card<br>5 - Key fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 – Smartpay | getMediumTypeID(): ?int | setMediumTypeID(?int mediumTypeID): void |
| `mediumType` | `?string` | Optional | Name of the medium type identifier.<br><br>Example: Fuel Card, Fuel Card with EV, Key fob  <br>Full list below:<br>1 - Fuel Card<br>2 - Fuel Card with EV<br>4 - Fuel Card and Key fob Card<br>5 - Key fob<br>6 - Virtual Card<br>7 - NPII Token<br>8 - Smartpay | getMediumType(): ?string | setMediumType(?string mediumType): void |

## Example (as JSON)

```json
{
  "BundleId": 58,
  "Restrictions": {
    "DayTimeRestrictions": {
      "Friday": false,
      "Monday": false,
      "Saturday": false,
      "Sunday": false,
      "Thursday": false
    },
    "LocationRestrictions": {
      "CountryRestrictions": {
        "Exclusive": false,
        "Countries": [
          "Countries7"
        ]
      },
      "NetworkRestrictions": [
        {
          "Country": "Country6",
          "Exclusive": false,
          "Networks": [
            "Networks3",
            "Networks4",
            "Networks5"
          ]
        },
        {
          "Country": "Country6",
          "Exclusive": false,
          "Networks": [
            "Networks3",
            "Networks4",
            "Networks5"
          ]
        }
      ],
      "ShellSiteRestrictions": [
        {
          "Country": "Country4",
          "Sites": [
            "Sites3",
            "Sites4"
          ],
          "SiteGroups": [
            "SiteGroups9",
            "SiteGroups8",
            "SiteGroups7"
          ],
          "Exclusive": false
        },
        {
          "Country": "Country4",
          "Sites": [
            "Sites3",
            "Sites4"
          ],
          "SiteGroups": [
            "SiteGroups9",
            "SiteGroups8",
            "SiteGroups7"
          ],
          "Exclusive": false
        }
      ],
      "PartnerSiteRestrictions": [
        {
          "NetworkCode": "NetworkCode2",
          "Sites": [
            "Sites3"
          ],
          "SiteGroups": [
            "SiteGroups1",
            "SiteGroups2"
          ],
          "Exclusive": false
        }
      ]
    },
    "ProductRestrictions": {
      "Products": [
        {
          "GlobalProductCode": "GlobalProductCode6",
          "Description": "Description8"
        }
      ],
      "ProductGroups": [
        {
          "ReferenceId": 82,
          "ProductGroupId": "ProductGroupId6",
          "Name": "Name0",
          "IsDefault": false,
          "IsFuelType": false
        },
        {
          "ReferenceId": 82,
          "ProductGroupId": "ProductGroupId6",
          "Name": "Name0",
          "IsDefault": false,
          "IsFuelType": false
        }
      ]
    },
    "UsageRestrictions": {
      "DailySpend": 7.72,
      "WeeklySpend": 10.22,
      "MonthlySpend": 48.66,
      "PerTransactionSpend": 17.28,
      "DailyVolume": 122
    }
  },
  "RestrictionCurrencyCode": "RestrictionCurrencyCode4",
  "RestrictionCurrencySymbol": "RestrictionCurrencySymbol4",
  "AccountId": 172
}
```

