
# Account Response Accounts Items

## Structure

`AccountResponseAccountsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountFullName` | `?string` | Optional | Account Full Name | getAccountFullName(): ?string | setAccountFullName(?string accountFullName): void |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `bestOfIndicator` | `?bool` | Optional | Best of Indicator of the Pricing customer/account configured. | getBestOfIndicator(): ?bool | setBestOfIndicator(?bool bestOfIndicator): void |
| `billingFrequencyType` | `?string` | Optional | Billing/Invoice frequency. The frequency in which the transactions will be considered for invoicing in a bulling run<br>E.g.:<br>1	Daily (all days)<br>2	Daily (only working days)<br>3	Weekly - Monday<br>4	Weekly – Tuesday<br>Etc. | getBillingFrequencyType(): ?string | setBillingFrequencyType(?string billingFrequencyType): void |
| `billingFrequencyTypeId` | `?int` | Optional | Billing/Invoice frequency Identifier. Indicates the frequency in which the transactions will be considered for invoicing in a bulling run | getBillingFrequencyTypeId(): ?int | setBillingFrequencyTypeId(?int billingFrequencyTypeId): void |
| `billingRunFrequency` | `?string` | Optional | Frequency at which the billing process is triggered. E.g.:<br>1	Daily (all days)<br>2	Daily (only working days)<br>3	Weekly - Monday<br>4	Weekly – Tuesday<br>Etc. | getBillingRunFrequency(): ?string | setBillingRunFrequency(?string billingRunFrequency): void |
| `billingRunFrequencyTypeId` | `?int` | Optional | Frequency at which the billing process is triggered.<br>E.g.: 1, 2, 3, etc. | getBillingRunFrequencyTypeId(): ?int | setBillingRunFrequencyTypeId(?int billingRunFrequencyTypeId): void |
| `colCoCountryCode` | `?string` | Optional | The 2-character ISO Code for the customer and card owning country. | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `currencyCode` | `?string` | Optional | ISO code of customer currency. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | € | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `day1Run` | `?int` | Optional | The first day in a month when the billing should run in case of multiple billing runs configured with in a single month | getDay1Run(): ?int | setDay1Run(?int day1Run): void |
| `day2Run` | `?int` | Optional | The second day in a month when the billing should run in case of multiple billing runs configured with in a single month | getDay2Run(): ?int | setDay2Run(?int day2Run): void |
| `day3Run` | `?int` | Optional | The third day in a month when the billing should run in case of multiple billing runs configured with in a single month | getDay3Run(): ?int | setDay3Run(?int day3Run): void |
| `day4Run` | `?int` | Optional | The fourth day in a month when the billing should run in case of multiple billing runs configured with in a single month | getDay4Run(): ?int | setDay4Run(?int day4Run): void |
| `frequencyType` | `?string` | Optional | Frequency type unit id & description<br>E.g.:<br>1 - Daily<br>2 - Weekly<br>3 - Monthly<br>4 - Invoicing<br>6 - Calendar quarter | getFrequencyType(): ?string | setFrequencyType(?string frequencyType): void |
| `grossAmount` | `?float` | Optional | Gross amount in customer currency. | getGrossAmount(): ?float | setGrossAmount(?float grossAmount): void |
| `internationalPOSLanguageCode` | `?string` | Optional | POS international language code | getInternationalPOSLanguageCode(): ?string | setInternationalPOSLanguageCode(?string internationalPOSLanguageCode): void |
| `internationalPOSLanguageID` | `?int` | Optional | POS international language ID | getInternationalPOSLanguageID(): ?int | setInternationalPOSLanguageID(?int internationalPOSLanguageID): void |
| `invoiceAccountID` | `?int` | Optional | The Account ID of the account on which the invoice is generated. | getInvoiceAccountID(): ?int | setInvoiceAccountID(?int invoiceAccountID): void |
| `invoiceAccountNumber` | `?string` | Optional | The Account Number of the account on which the invoice is generated. | getInvoiceAccountNumber(): ?string | setInvoiceAccountNumber(?string invoiceAccountNumber): void |
| `invoiceAccountShortName` | `?string` | Optional | The Account Short Name of the account on which the invoice is generated. | getInvoiceAccountShortName(): ?string | setInvoiceAccountShortName(?string invoiceAccountShortName): void |
| `invoiceDistributionMethods` | [`?(InvoiceDistributionMethod[])`](../../doc/models/invoice-distribution-method.md) | Optional | - | getInvoiceDistributionMethods(): ?array | setInvoiceDistributionMethods(?array invoiceDistributionMethods): void |
| `isInternational` | `?bool` | Optional | Whether the account is international. | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isInvoicePoint` | `?bool` | Optional | Whether the account is an invoice point. | getIsInvoicePoint(): ?bool | setIsInvoicePoint(?bool isInvoicePoint): void |
| `lastModifiedDate` | `?string` | Optional | Account last modified date and time | getLastModifiedDate(): ?string | setLastModifiedDate(?string lastModifiedDate): void |
| `localCurrencyCode` | `?string` | Optional | ISO code of customer currency. | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Customer currency symbol. | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `localPOSLanguageCode` | `?string` | Optional | POS local language code | getLocalPOSLanguageCode(): ?string | setLocalPOSLanguageCode(?string localPOSLanguageCode): void |
| `localPOSLanguageID` | `?int` | Optional | POS local language ID | getLocalPOSLanguageID(): ?int | setLocalPOSLanguageID(?int localPOSLanguageID): void |
| `netAmount` | `?float` | Optional | Net amount in customer currency. | getNetAmount(): ?float | setNetAmount(?float netAmount): void |
| `outstandingBalance` | `?float` | Optional | Outstanding balance in customer currency. | getOutstandingBalance(): ?float | setOutstandingBalance(?float outstandingBalance): void |
| `paidAmount` | `?float` | Optional | Amount paid in customer currency. | getPaidAmount(): ?float | setPaidAmount(?float paidAmount): void |
| `status` | `?string` | Optional | Account Status | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Account status change reason id-description for the Status Reason, if any | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `totalActiveCardGroups` | `?int` | Optional | Total number of active card groups under the account | getTotalActiveCardGroups(): ?int | setTotalActiveCardGroups(?int totalActiveCardGroups): void |
| `totalActiveCards` | `?int` | Optional | Total number of active cards under the account. | getTotalActiveCards(): ?int | setTotalActiveCards(?int totalActiveCards): void |
| `totalBlockedCards` | `?int` | Optional | Total number of cards under the account that are permanently blocked | getTotalBlockedCards(): ?int | setTotalBlockedCards(?int totalBlockedCards): void |
| `totalCancelledCards` | `?int` | Optional | Total number of cards under the account that are cancelled | getTotalCancelledCards(): ?int | setTotalCancelledCards(?int totalCancelledCards): void |
| `totalCards` | `?int` | Optional | Total number of cards under the account. | getTotalCards(): ?int | setTotalCards(?int totalCards): void |
| `totalExpiredCards` | `?int` | Optional | Total number of expired cards under the account. | getTotalExpiredCards(): ?int | setTotalExpiredCards(?int totalExpiredCards): void |
| `totalFraudCards` | `?int` | Optional | Total number of cards in Fraud status. | getTotalFraudCards(): ?int | setTotalFraudCards(?int totalFraudCards): void |
| `totalNewCards` | `?int` | Optional | Total number of cards in “New” status. | getTotalNewCards(): ?int | setTotalNewCards(?int totalNewCards): void |
| `totalRenewalPendingCards` | `?int` | Optional | Total number of Renewal Pending account under the payer | getTotalRenewalPendingCards(): ?int | setTotalRenewalPendingCards(?int totalRenewalPendingCards): void |
| `totalReplacedCards` | `?int` | Optional | Total number of cards under the account with status as “Replaced” | getTotalReplacedCards(): ?int | setTotalReplacedCards(?int totalReplacedCards): void |
| `totalTemporaryBlockCardsByCustomer` | `?int` | Optional | Total number of cards under the account that are temporarily blocked by customer. | getTotalTemporaryBlockCardsByCustomer(): ?int | setTotalTemporaryBlockCardsByCustomer(?int totalTemporaryBlockCardsByCustomer): void |
| `totalTemporaryBlockCardsByShell` | `?int` | Optional | Total number of cards under the account that are temporarily blocked by Shell. | getTotalTemporaryBlockCardsByShell(): ?int | setTotalTemporaryBlockCardsByShell(?int totalTemporaryBlockCardsByShell): void |
| `vATAmount` | `?float` | Optional | VAT amount in customer currency. | getVATAmount(): ?float | setVATAmount(?float vATAmount): void |
| `isPartnerCard` | `?int` | Optional | The account / sub-account is partner card account or not.<br>Possible values (1= Non-PC account, 2= PC account, 3= PC Payer with Card Types, 4= PC Payer)<br>Note: A partner card account is assumed to have only partner card card-types associated | getIsPartnerCard(): ?int | setIsPartnerCard(?int isPartnerCard): void |
| `tollsCustomerId` | `?string` | Optional | Customer id in e-TM system | getTollsCustomerId(): ?string | setTollsCustomerId(?string tollsCustomerId): void |
| `tollsColcoCountryTypeId` | `?string` | Optional | Colco country type id in e-TM system | getTollsColcoCountryTypeId(): ?string | setTollsColcoCountryTypeId(?string tollsColcoCountryTypeId): void |
| `contracts` | [`?(CustomerContract[])`](../../doc/models/customer-contract.md) | Optional | - | getContracts(): ?array | setContracts(?array contracts): void |
| `isConsortiumMember` | `?string` | Optional | true | getIsConsortiumMember(): ?string | setIsConsortiumMember(?string isConsortiumMember): void |

## Example (as JSON)

```json
{
  "AccountFullName": "CI TEST_Update20 New updated",
  "AccountId": 123,
  "AccountNumber": "DE00000008",
  "AccountShortName": "CI TEST_Update20",
  "BillingFrequencyType": "Monthly - 3rd",
  "BillingFrequencyTypeId": 1,
  "BillingRunFrequency": "Weekly - Monday",
  "BillingRunFrequencyTypeId": 1,
  "ColCoCountryCode": "14",
  "CurrencyCode": "14",
  "CurrencySymbol": "EUR",
  "Day1Run": 1,
  "Day2Run": 31,
  "Day3Run": 2,
  "Day4Run": 3,
  "FrequencyType": "Daily",
  "GrossAmount": 1232,
  "InternationalPOSLanguageCode": "deu",
  "InternationalPOSLanguageID": 1,
  "InvoiceAccountID": 9,
  "InvoiceAccountNumber": "DE00000008",
  "InvoiceAccountShortName": "BCI TEST_Update20",
  "LastModifiedDate": "20240131 11:12:34",
  "LocalCurrencyCode": "EUR",
  "LocalCurrencySymbol": "€",
  "LocalPOSLanguageCode": "deu",
  "LocalPOSLanguageID": 1,
  "NetAmount": 3434,
  "OutstandingBalance": 4354,
  "PaidAmount": 4343,
  "Status": "Blocked",
  "StatusReason": "3 - Customer Request",
  "TotalActiveCardGroups": 198,
  "TotalActiveCards": 544,
  "TotalBlockedCards": 121,
  "TotalCancelledCards": 168,
  "TotalCards": 10966,
  "TotalExpiredCards": 1000,
  "TotalFraudCards": 8,
  "TotalNewCards": 2,
  "TotalRenewalPendingCards": 0,
  "TotalReplacedCards": 20,
  "TotalTemporaryBlockCardsByCustomer": 9,
  "TotalTemporaryBlockCardsByShell": 2,
  "VATAmount": 2322,
  "IsPartnerCard": 1,
  "TollsCustomerId": "332",
  "TollsColcoCountryTypeId": "14",
  "BestOfIndicator": false
}
```

