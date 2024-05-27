
# Card Details Response

## Structure

`CardDetailsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer in the Shell Card Platform) of the selected payer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account Id (i.e. Customer Id of the Customer in the Shell Card Platform) of the customer. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account short name. | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `colCoCountryCode` | `?string` | Optional | ISO 3166 Alpha-2 Country Code for the customer and card owning country. | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `localCurrencyCode` | `?string` | Optional | ISO 4217 Curreny Code of the local currency. | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Currency symbol of local currency. | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `cardId` | `?int` | Optional | Unique Card Id in Cards platform. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Card PAN. In the response body the PAN will be masked if the option is enabled in the Shell Card Platform. | getPAN(): ?string | setPAN(?string pAN): void |
| `statusId` | [`?int(CardDetailsResponseStatusIdEnum)`](../../doc/models/card-details-response-status-id-enum.md) | Optional | Possible Id’s and description:<br><br>* 1  Active<br>* 7  Blocked Card<br>* 8  Expired<br>* 9  Cancelled<br>* 10  New<br>* 23  Pending Renewal<br>* 31  Replaced<br>* 41  Temporary Block (Customer)<br>* 42  Temporary Block (Shell)<br>* 43  Fraud<br>* 101 Active (Block in progress) *<br>* 102 Blocked Card (Unblock in progress) *<br>* 103 Active (Cancel in progress) *<br>* 104 Active (Marked as damaged) *<br>* 105 New (Cancel as damaged) *<br>* 106 Active(Scheduled for block) ”#<br>* 107 Blocked Card(Scheduled for unblock)*#<br>* 108 Blocked Card (Cancel in progress) *<br><br>> Note:<br>> •  Items marked with * are intermediate statuses  to indicate that there are pending requests in progress. , The response can contain these intermediate statuses only if the IncludeIntermediateStatus flag is true.<br>> •  The placeholder “<Shell Card Platform Status>” in the items marked with # will be replaced with the Shell Card Platform status description. E.g., “Active (Scheduled for block)” | getStatusId(): ?int | setStatusId(?int statusId): void |
| `status` | `?string` | Optional | Possible Id’s and description:<br><br>* 1  Active<br>* 7  Blocked Card<br>* 8  Expired<br>* 9  Cancelled<br>* 10  New<br>* 23  Pending Renewal<br>* 31  Replaced<br>* 41  Temporary Block (Customer)<br>* 42  Temporary Block (Shell)<br>* 43  Fraud<br>* 101 Active (Block in progress) *<br>* 102 Blocked Card (Unblock in progress) *<br>* 103 Active (Cancel in progress) *<br>* 104 Active (Marked as damaged) *<br>* 105 New (Cancel as damaged) *<br>* 106 Active(Scheduled for block) ”#<br>* 107 Blocked Card(Scheduled for unblock) *#<br>* 108 Blocked Card (Cancel in progress) *<br><br>> Note:<br>> •  Items marked with * are intermediate statuses  to indicate that there are pending requests in progress. , The response can contain these intermediate statuses only if the IncludeIntermediateStatus flag is true.<br>> •  The placeholder “<Shell Card Platform Status>” in the items marked with # will be replaced with the Shell Card Platform status description. E.g., “Active (Scheduled for block)” | getStatus(): ?string | setStatus(?string status): void |
| `odometerPrompt` | `?bool` | Optional | True if odometer input is enabled on the card, else false | getOdometerPrompt(): ?bool | setOdometerPrompt(?bool odometerPrompt): void |
| `fleetIdPrompt` | `?bool` | Optional | True if fleet id input is enabled, else false | getFleetIdPrompt(): ?bool | setFleetIdPrompt(?bool fleetIdPrompt): void |
| `pINType` | [`?string(CardDetailsResponsePINTypeEnum)`](../../doc/models/card-details-response-pin-type-enum.md) | Optional | PIN type:<br><br>* `Card` - Card PIN<br>* `Fleet` - Fleet PIN | getPINType(): ?string | setPINType(?string pINType): void |
| `hasPIN` | `?bool` | Optional | True if card has PIN, else false | getHasPIN(): ?bool | setHasPIN(?bool hasPIN): void |
| `isSelfSelectedPIN` | `?bool` | Optional | True if card has Self Selected PIN, else false | getIsSelfSelectedPIN(): ?bool | setIsSelfSelectedPIN(?bool isSelfSelectedPIN): void |
| `temporaryBlockAllowed` | `?bool` | Optional | True if card can be blocked temporarily, else false | getTemporaryBlockAllowed(): ?bool | setTemporaryBlockAllowed(?bool temporaryBlockAllowed): void |
| `unblockAllowed` | `?bool` | Optional | True/False True if card can be Unblocked, else false | getUnblockAllowed(): ?bool | setUnblockAllowed(?bool unblockAllowed): void |
| `permanentBlockAllowed` | `?bool` | Optional | True if card can be blocked permanently, else false | getPermanentBlockAllowed(): ?bool | setPermanentBlockAllowed(?bool permanentBlockAllowed): void |
| `issueNumber` | `?int` | Optional | Issue number of the card | getIssueNumber(): ?int | setIssueNumber(?int issueNumber): void |
| `reissueSetting` | [`?string(CardDetailsResponseReissueSettingEnum)`](../../doc/models/card-details-response-reissue-setting-enum.md) | Optional | Reissue setting of the card. If the card is superseded (i.e. a replacement/new card is issued) then reissue setting of the latest card issued. Reissue setting:<br><br>* `True` - Card will be Reissued when nearing its expiry date<br>* `False` - Card will not be Reissued | getReissueSetting(): ?string | setReissueSetting(?string reissueSetting): void |
| `internationalPOSLanguageID` | [`?int(CardDetailsResponseInternationalPOSLanguageIDEnum)`](../../doc/models/card-details-response-international-pos-language-id-enum.md) | Optional | POS language identifier. Language Id:<br><br>* `1` - German<br>* `2` - French<br>* `3` - Bulgarian<br>* `4` - Croatian<br>* `5` - Czech<br>* `6` - Danish<br>* `7` - Finnish<br>* `8` - English<br>* `9` - Greek<br>* `10` - Chinese<br>* `11` - Hungarian<br>* `12` - Italian<br>* `13` - Luxembourgish<br>* `14` - Malay<br>* `15` - Dutch<br>* `16` - Norwegian, Bokmal<br>* `17` - Urdu<br>* `18` - Polish<br>* `19` - Portuguese<br>* `20` - Romanian<br>* `21` - Russian<br>* `22` - Slovak<br>* `23` - Slovenian<br>* `24` - Spanish<br>* `25` - Swedish<br>* `26` - Turkish<br>* `27` - Thai<br>* `28` - Filipino<br>* `29` - Estonian<br>* `30` - Latvian<br>* `31` - Lithuanian | getInternationalPOSLanguageID(): ?int | setInternationalPOSLanguageID(?int internationalPOSLanguageID): void |
| `internationalPOSLanguageCode` | [`?string(CardDetailsResponseInternationalPOSLanguageCodeEnum)`](../../doc/models/card-details-response-international-pos-language-code-enum.md) | Optional | POS language code. Language code:<br><br>* `deu` - German<br>* `fra` - French<br>* `bul` - Bulgarian<br>* `hrv` - Croatian<br>* `ces` - Czech<br>* `dan` - Danish<br>* `fin` - Finnish<br>* `eng` - English<br>* `ell` - Greek<br>* `zho` - Chinese<br>* `hun` - Hungarian<br>* `ita` - Italian<br>* `ltz` - Luxembourgish<br>* `msa` - Malay<br>* `nld` - Dutch<br>* `nob` - Norwegian, Bokmal<br>* `urd` - Urdu<br>* `pol` - Polish<br>* `por` - Portuguese<br>* `ron` - Romanian<br>* `rus` - Russian<br>* `slk` - Slovak<br>* `slv` - Slovenian<br>* `spa` - Spanish<br>* `swe` - Swedish<br>* `tur` - Turkish<br>* `tha` - Thai<br>* `fil` - Filipino<br>* `est` - Estonian<br>* `lav` - Latvian<br>* `lit` - Lithuanian | getInternationalPOSLanguageCode(): ?string | setInternationalPOSLanguageCode(?string internationalPOSLanguageCode): void |
| `localPOSLanguageID` | [`?int(CardDetailsResponseLocalPOSLanguageIDEnum)`](../../doc/models/card-details-response-local-pos-language-id-enum.md) | Optional | POS language identifier. Language Id:<br><br>* `1` - German<br>* `2` - French<br>* `3` - Bulgarian<br>* `4` - Croatian<br>* `5` - Czech<br>* `6` - Danish<br>* `7` - Finnish<br>* `8` - English<br>* `9` - Greek<br>* `10` - Chinese<br>* `11` - Hungarian<br>* `12` - Italian<br>* `13` - Luxembourgish<br>* `14` - Malay<br>* `15` - Dutch<br>* `16` - Norwegian, Bokmal<br>* `17` - Urdu<br>* `18` - Polish<br>* `19` - Portuguese<br>* `20` - Romanian<br>* `21` - Russian<br>* `22` - Slovak<br>* `23` - Slovenian<br>* `24` - Spanish<br>* `25` - Swedish<br>* `26` - Turkish<br>* `27` - Thai<br>* `28` - Filipino<br>* `29` - Estonian<br>* `30` - Latvian<br>* `31` - Lithuanian | getLocalPOSLanguageID(): ?int | setLocalPOSLanguageID(?int localPOSLanguageID): void |
| `localPOSLanguageCode` | [`?string(CardDetailsResponseLocalPOSLanguageCodeEnum)`](../../doc/models/card-details-response-local-pos-language-code-enum.md) | Optional | POS language code. Language code:<br><br>* `deu` - German<br>* `fra` - French<br>* `bul` - Bulgarian<br>* `hrv` - Croatian<br>* `ces` - Czech<br>* `dan` - Danish<br>* `fin` - Finnish<br>* `eng` - English<br>* `ell` - Greek<br>* `zho` - Chinese<br>* `hun` - Hungarian<br>* `ita` - Italian<br>* `ltz` - Luxembourgish<br>* `msa` - Malay<br>* `nld` - Dutch<br>* `nob` - Norwegian, Bokmal<br>* `urd` - Urdu<br>* `pol` - Polish<br>* `por` - Portuguese<br>* `ron` - Romanian<br>* `rus` - Russian<br>* `slk` - Slovak<br>* `slv` - Slovenian<br>* `spa` - Spanish<br>* `swe` - Swedish<br>* `tur` - Turkish<br>* `tha` - Thai<br>* `fil` - Filipino<br>* `est` - Estonian<br>* `lav` - Latvian<br>* `lit` - Lithuanian | getLocalPOSLanguageCode(): ?string | setLocalPOSLanguageCode(?string localPOSLanguageCode): void |
| `cardTypeCode` | `?string` | Optional | ISO code of the card i.e. first 7 digits of the PAN. | getCardTypeCode(): ?string | setCardTypeCode(?string cardTypeCode): void |
| `cardTypeId` | `?int` | Optional | Card Type ID | getCardTypeId(): ?int | setCardTypeId(?int cardTypeId): void |
| `cardTypeName` | `?string` | Optional | Card Type Name | getCardTypeName(): ?string | setCardTypeName(?string cardTypeName): void |
| `tokenTypeId` | `?int` | Optional | Token Type ID configured for the Card | getTokenTypeId(): ?int | setTokenTypeId(?int tokenTypeId): void |
| `tokenTypeName` | `?string` | Optional | Token Type Name configured for the Card | getTokenTypeName(): ?string | setTokenTypeName(?string tokenTypeName): void |
| `isChipCard` | `?bool` | Optional | True if a chip card, else false | getIsChipCard(): ?bool | setIsChipCard(?bool isChipCard): void |
| `isMagStripCard` | `?bool` | Optional | True if it is a magnetic stripe card, else false | getIsMagStripCard(): ?bool | setIsMagStripCard(?bool isMagStripCard): void |
| `isVirtualCard` | `?bool` | Optional | True if it is a virtual card, else false | getIsVirtualCard(): ?bool | setIsVirtualCard(?bool isVirtualCard): void |
| `purchaseCategoryCode` | `?string` | Optional | Purchase category code of the card.<br>**Constraints**: *Maximum Length*: `1` | getPurchaseCategoryCode(): ?string | setPurchaseCategoryCode(?string purchaseCategoryCode): void |
| `purchaseCategoryId` | `?int` | Optional | Purchase category identifier in the Shell Card Platform. | getPurchaseCategoryId(): ?int | setPurchaseCategoryId(?int purchaseCategoryId): void |
| `purchaseCategoryName` | `?string` | Optional | Purchase category name | getPurchaseCategoryName(): ?string | setPurchaseCategoryName(?string purchaseCategoryName): void |
| `isCRT` | `?bool` | Optional | True if it is a Commercial Road Transport (CRT) card, else false | getIsCRT(): ?bool | setIsCRT(?bool isCRT): void |
| `isFleet` | `?bool` | Optional | True if it is a Fleet card, else false | getIsFleet(): ?bool | setIsFleet(?bool isFleet): void |
| `isInternational` | `?bool` | Optional | True if it is an international card, else false | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isNational` | `?bool` | Optional | True if it is a national card, else false | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `isPartnerSitesIncluded` | `?bool` | Optional | True if it is allowed at all partner sites, else false | getIsPartnerSitesIncluded(): ?bool | setIsPartnerSitesIncluded(?bool isPartnerSitesIncluded): void |
| `isShellSitesOnly` | `?bool` | Optional | True if it is only allowed at Shell sites, else false | getIsShellSitesOnly(): ?bool | setIsShellSitesOnly(?bool isShellSitesOnly): void |
| `fuelSets` | [`?(CardDetailsResponseFuelSetsItems[])`](../../doc/models/card-details-response-fuel-sets-items.md) | Optional | List of active fuel type product restrictions applied on the card.<br>**Constraints**: *Unique Items Required* | getFuelSets(): ?array | setFuelSets(?array fuelSets): void |
| `nonFuelSets` | [`?(CardDetailsResponseNonFuelSetsItems[])`](../../doc/models/card-details-response-non-fuel-sets-items.md) | Optional | List of active non-fuel type product restrictions applied on the card.<br>**Constraints**: *Unique Items Required* | getNonFuelSets(): ?array | setNonFuelSets(?array nonFuelSets): void |
| `issuedDate` | `?string` | Optional | Card issue date. | getIssuedDate(): ?string | setIssuedDate(?string issuedDate): void |
| `expiryDate` | `?string` | Optional | Expiry date of the card. | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |
| `lastUsedDate` | `?string` | Optional | Card last used date. | getLastUsedDate(): ?string | setLastUsedDate(?string lastUsedDate): void |
| `misuseDate` | `?string` | Optional | Last misused date of the card. | getMisuseDate(): ?string | setMisuseDate(?string misuseDate): void |
| `temperature` | `?string` | Optional | Hot-list status | getTemperature(): ?string | setTemperature(?string temperature): void |
| `driverName` | `?string` | Optional | Driver name of the card. Note- While ordering card, optional when VRN is passed else mandatory.<br>**Constraints**: *Maximum Length*: `27` | getDriverName(): ?string | setDriverName(?string driverName): void |
| `vRN` | `?string` | Optional | Vehicle registration number of the card. Note- While ordering card, optional when DriverName is passed else mandatory.<br>**Constraints**: *Maximum Length*: `16` | getVRN(): ?string | setVRN(?string vRN): void |
| `embossText` | `?string` | Optional | Text printed on the card as account name.<br>**Constraints**: *Maximum Length*: `25` | getEmbossText(): ?string | setEmbossText(?string embossText): void |
| `cardGroupId` | `?int` | Optional | Existing Card Group ID, under which the replacement card is to be created.<br>Pass “-1” if the replacement card should not be assigned to any card group.<br>Optional.<br>If not provided, the replacement card will be created under the same card group as the current card.<br>Example- 156 | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card group name. Note- 1. While ordering card this field is mandatory when IsNewCardGroup is true.<br>**Constraints**: *Maximum Length*: `30` | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `renewalDate` | `?string` | Optional | Renewal date of the card. Applicable if ReissueSetting is set to True. | getRenewalDate(): ?string | setRenewalDate(?string renewalDate): void |
| `renewedCardId` | `?int` | Optional | Renewed card id. | getRenewedCardId(): ?int | setRenewedCardId(?int renewedCardId): void |
| `renewedCardStatusId` | `?int` | Optional | Renewed card status id. | getRenewedCardStatusId(): ?int | setRenewedCardStatusId(?int renewedCardStatusId): void |
| `renewedCardStatus` | `?string` | Optional | Renewed card status description. | getRenewedCardStatus(): ?string | setRenewedCardStatus(?string renewedCardStatus): void |
| `renewedCardExpiryDate` | `?string` | Optional | Renewed card expiry date. | getRenewedCardExpiryDate(): ?string | setRenewedCardExpiryDate(?string renewedCardExpiryDate): void |
| `renewedCardIssueNumber` | `?int` | Optional | Renewed card issue number. | getRenewedCardIssueNumber(): ?int | setRenewedCardIssueNumber(?int renewedCardIssueNumber): void |
| `renewedCardReissueSetting` | [`?string(CardDetailsResponseRenewedCardReissueSettingEnum)`](../../doc/models/card-details-response-renewed-card-reissue-setting-enum.md) | Optional | Reissue setting of the renewed new card. Reissue Setting:<br><br>* `True` - Card will be sent to production<br>* `False` - Parent Card is Dormant or the Card is not to be produced | getRenewedCardReissueSetting(): ?string | setRenewedCardReissueSetting(?string renewedCardReissueSetting): void |
| `creationDate` | `?string` | Optional | Card Creation Date time | getCreationDate(): ?string | setCreationDate(?string creationDate): void |
| `effectiveDate` | `?string` | Optional | Effective date for the Card | getEffectiveDate(): ?string | setEffectiveDate(?string effectiveDate): void |
| `lastModifiedDate` | `?string` | Optional | Card last modified date | getLastModifiedDate(): ?string | setLastModifiedDate(?string lastModifiedDate): void |
| `bundleId` | `?string` | Optional | Bundle Id associated with card in the Gateway. This field will have a null value if the card is not associated with any bundle in Gateway or the value of IncludeBundleDetails in request is false. | getBundleId(): ?string | setBundleId(?string bundleId): void |
| `cardDeliveryAddress` | [`?CardDetailsResponseCardDeliveryAddress`](../../doc/models/card-details-response-card-delivery-address.md) | Optional | Delivery address. | getCardDeliveryAddress(): ?CardDetailsResponseCardDeliveryAddress | setCardDeliveryAddress(?CardDetailsResponseCardDeliveryAddress cardDeliveryAddress): void |
| `pINDeliveryAddress` | [`?CardDetailsResponsePINDeliveryAddress`](../../doc/models/card-details-response-pin-delivery-address.md) | Optional | Delivery address. | getPINDeliveryAddress(): ?CardDetailsResponsePINDeliveryAddress | setPINDeliveryAddress(?CardDetailsResponsePINDeliveryAddress pINDeliveryAddress): void |
| `cardBlockSchedules` | [`?(CardDetailsResponseCardBlockSchedulesItemsAllOf0[])`](../../doc/models/card-details-response-card-block-schedules-items-all-of-0.md) | Optional | **Constraints**: *Unique Items Required* | getCardBlockSchedules(): ?array | setCardBlockSchedules(?array cardBlockSchedules): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "PayerId": 853,
  "PayerNumber": "PH50000843",
  "AccountId": 854,
  "AccountNumber": "PH50000844",
  "AccountShortName": "PARKLEY",
  "ColCoCountryCode": "PH",
  "LocalCurrencyCode": "EUR",
  "LocalCurrencySymbol": "€",
  "CardId": 125,
  "PAN": "7002861007636000020",
  "OdometerPrompt": true,
  "FleetIdPrompt": true,
  "PINType": "Card",
  "HasPIN": true,
  "IsSelfSelectedPIN": true,
  "TemporaryBlockAllowed": true,
  "UnblockAllowed": true,
  "PermanentBlockAllowed": true,
  "IssueNumber": 1,
  "InternationalPOSLanguageID": 8,
  "InternationalPOSLanguageCode": "eng",
  "LocalPOSLanguageID": 8,
  "LocalPOSLanguageCode": "eng",
  "CardTypeCode": "7077861",
  "CardTypeId": 1,
  "CardTypeName": "Philippines CRT 7077861",
  "TokenTypeId": 107,
  "TokenTypeName": "PH FLE NAT SIN R1",
  "IsChipCard": false,
  "IsMagStripCard": true,
  "IsVirtualCard": true,
  "PurchaseCategoryCode": "6",
  "PurchaseCategoryId": 54,
  "PurchaseCategoryName": "2 - FuelSave and Lubricants",
  "IsCRT": true,
  "IsFleet": true,
  "IsInternational": true,
  "IsNational": true,
  "IsPartnerSitesIncluded": true,
  "IsShellSitesOnly": true,
  "IssuedDate": "20181001",
  "ExpiryDate": "20181031",
  "LastUsedDate": "20181001 13:23:55",
  "MisuseDate": "20181001 13:23:55",
  "Temperature": "10-Warm",
  "DriverName": "ROBERT",
  "VRN": "MV65YLH",
  "EmbossText": "PARKLEY",
  "CardGroupId": 5,
  "CardGroupName": "GROUP1",
  "RenewalDate": "20181001",
  "RenewedCardId": 1325,
  "RenewedCardStatusId": 10,
  "RenewedCardStatus": "New",
  "RenewedCardExpiryDate": "20181031",
  "RenewedCardIssueNumber": 2,
  "CreationDate": "20181001",
  "EffectiveDate": "20181001",
  "LastModifiedDate": "20181001 13:23:55",
  "RequestId": "ed557f02-c7d7-4c01-b3e5-11bf3239c8ed"
}
```

