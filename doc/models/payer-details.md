
# Payer Details

## Structure

`PayerDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting company id of the customer. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting company code of the customer. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `countryCode` | `?string` | Optional | ISO code of the customer country. | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `country` | `?string` | Optional | Country of the customer | getCountry(): ?string | setCountry(?string country): void |
| `payerId` | `?int` | Optional | Payer id of the customer | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the customer | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerFullName` | `?string` | Optional | Full Name of the Payer | getPayerFullName(): ?string | setPayerFullName(?string payerFullName): void |
| `payerShortName` | `?string` | Optional | Short name of the payer | getPayerShortName(): ?string | setPayerShortName(?string payerShortName): void |
| `payerGroupId` | `?int` | Optional | Payer Group Id | getPayerGroupId(): ?int | setPayerGroupId(?int payerGroupId): void |
| `amountDue` | `?float` | Optional | Invoiced amount and due for payment from the last SOA. | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `amountOverdue` | `?float` | Optional | Invoiced amount and overdue for payment from the last SOA. | getAmountOverdue(): ?float | setAmountOverdue(?float amountOverdue): void |
| `amountNotOverdue` | `?float` | Optional | Invoiced amount and not overdue for payment from the last SOA. | getAmountNotOverdue(): ?float | setAmountNotOverdue(?float amountNotOverdue): void |
| `outstandingBalance` | `?float` | Optional | Current outstanding balance amount from the last SOA. | getOutstandingBalance(): ?float | setOutstandingBalance(?float outstandingBalance): void |
| `unallocatedPayment` | `?float` | Optional | Unallocated payment.<br>When negative, indicates overdue amount from the last SOA. | getUnallocatedPayment(): ?float | setUnallocatedPayment(?float unallocatedPayment): void |
| `sOACurrencyCode` | `?string` | Optional | Currency ISO code | getSOACurrencyCode(): ?string | setSOACurrencyCode(?string sOACurrencyCode): void |
| `sOACurrencySymbol` | `?string` | Optional | Currency symbol | getSOACurrencySymbol(): ?string | setSOACurrencySymbol(?string sOACurrencySymbol): void |
| `sOACreditLimitCurrencyCode` | `?string` | Optional | Currency ISO code | getSOACreditLimitCurrencyCode(): ?string | setSOACreditLimitCurrencyCode(?string sOACreditLimitCurrencyCode): void |
| `sOACreditLimitCurrencySymbol` | `?string` | Optional | Currency symbol | getSOACreditLimitCurrencySymbol(): ?string | setSOACreditLimitCurrencySymbol(?string sOACreditLimitCurrencySymbol): void |
| `lastPaymentCurrencyCode` | `?string` | Optional | Currency ISO code | getLastPaymentCurrencyCode(): ?string | setLastPaymentCurrencyCode(?string lastPaymentCurrencyCode): void |
| `lastPaymentCurrencySymbol` | `?string` | Optional | currency symbol | getLastPaymentCurrencySymbol(): ?string | setLastPaymentCurrencySymbol(?string lastPaymentCurrencySymbol): void |
| `lastPaymentAmount` | `?float` | Optional | Latest payment amount for the requested payer. | getLastPaymentAmount(): ?float | setLastPaymentAmount(?float lastPaymentAmount): void |
| `lastPaymentDate` | `?string` | Optional | Latest payment date for the requested payer. | getLastPaymentDate(): ?string | setLastPaymentDate(?string lastPaymentDate): void |
| `sOALastPaymentAmount` | `?float` | Optional | Last payment amount in statement of account for the requested payer. | getSOALastPaymentAmount(): ?float | setSOALastPaymentAmount(?float sOALastPaymentAmount): void |
| `sOALastPaymentDate` | `?string` | Optional | Last payment date in statement of account for the requested payer. | getSOALastPaymentDate(): ?string | setSOALastPaymentDate(?string sOALastPaymentDate): void |
| `currencyCode` | `?string` | Optional | Currency ISO code | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Currency Symbol | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `colCoCountryCode` | `?string` | Optional | The 2-character ISO Code for the customer and card owning country. | getColCoCountryCode(): ?string | setColCoCountryCode(?string colCoCountryCode): void |
| `localCurrencyCode` | `?string` | Optional | Currency ISO code of the local country. | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Currency Symbol of the local country | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `localCurrencyExchangeRate` | `?float` | Optional | Exchange rate from OU base currency to local currency. | getLocalCurrencyExchangeRate(): ?float | setLocalCurrencyExchangeRate(?float localCurrencyExchangeRate): void |
| `localCurrencyExchangeRateSoA` | `?float` | Optional | Exchange rate from SoA credit limit currency to local currency | getLocalCurrencyExchangeRateSoA(): ?float | setLocalCurrencyExchangeRateSoA(?float localCurrencyExchangeRateSoA): void |
| `billingFrequencyTypeId` | `?int` | Optional | Billing/Invoice frequency Identifier. Indicates the frequency in which the transactions will be considered for invoicing in a bulling run<br>E.g.: 1, 2, 3, etc. | getBillingFrequencyTypeId(): ?int | setBillingFrequencyTypeId(?int billingFrequencyTypeId): void |
| `billingFrequencyType` | `?string` | Optional | Billing/Invoice frequency. The frequency in which the transactions will be considered for invoicing in a bulling run<br>E.g.:<br>1    Daily (all days)<br>2    Daily (only working days)<br>3    Weekly - Monday<br>4    Weekly – Tuesday<br>Etc. | getBillingFrequencyType(): ?string | setBillingFrequencyType(?string billingFrequencyType): void |
| `billingRunFrequencyTypeId` | `?int` | Optional | Frequency at which the billing process is triggered.<br>E.g.: 1, 2, 3, etc. | getBillingRunFrequencyTypeId(): ?int | setBillingRunFrequencyTypeId(?int billingRunFrequencyTypeId): void |
| `billingRunFrequnecy` | `?string` | Optional | Frequency at which the billing process is triggered.E.g.:<br>1    Daily (all days)<br>2    Daily (only working days)<br>3    Weekly - Monday<br>4    Weekly – Tuesday<br>Etc. | getBillingRunFrequnecy(): ?string | setBillingRunFrequnecy(?string billingRunFrequnecy): void |
| `day1Run` | `?int` | Optional | The first day in a month when the billing should run in case of multiple billing runs configured with in a single month. | getDay1Run(): ?int | setDay1Run(?int day1Run): void |
| `day2Run` | `?int` | Optional | The second day in a month when the billing should run in case of multiple billing runs configured with in a single month. | getDay2Run(): ?int | setDay2Run(?int day2Run): void |
| `day3Run` | `?int` | Optional | The third day in a month when the billing should run in case of multiple billing runs configured with in a single month. | getDay3Run(): ?int | setDay3Run(?int day3Run): void |
| `day4Run` | `?int` | Optional | The fourth day in a month when the billing should run in case of multiple billing runs configured with in a single month. | getDay4Run(): ?int | setDay4Run(?int day4Run): void |
| `invoiceDistributionMethods` | [`?(InvoiceDistributionMethod[])`](../../doc/models/invoice-distribution-method.md) | Optional | - | getInvoiceDistributionMethods(): ?array | setInvoiceDistributionMethods(?array invoiceDistributionMethods): void |
| `outputType` | `?string` | Optional | Invoice output type (Id-Description)<br>E.g.:<br>1-PDF<br>6-Print | getOutputType(): ?string | setOutputType(?string outputType): void |
| `invoiceAccountID` | `?int` | Optional | The Account ID of the account on which the invoice is generated. | getInvoiceAccountID(): ?int | setInvoiceAccountID(?int invoiceAccountID): void |
| `invoiceAccountNumber` | `?string` | Optional | The Account Number of the account on which the invoice is generated. | getInvoiceAccountNumber(): ?string | setInvoiceAccountNumber(?string invoiceAccountNumber): void |
| `invoiceAccountShortName` | `?string` | Optional | The Account Short Name of the account on which the invoice is generated. | getInvoiceAccountShortName(): ?string | setInvoiceAccountShortName(?string invoiceAccountShortName): void |
| `bestOfIndicator` | `?bool` | Optional | Best of Indicator of the Pricing customer/account configured.<br>**Default**: `false` | getBestOfIndicator(): ?bool | setBestOfIndicator(?bool bestOfIndicator): void |
| `isInternational` | `?bool` | Optional | Whether the account is international.<br>**Default**: `false` | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `totalAccounts` | `?int` | Optional | Total number of accounts under the payer. | getTotalAccounts(): ?int | setTotalAccounts(?int totalAccounts): void |
| `totalActiveAccounts` | `?int` | Optional | Total number of active accounts under the payer. | getTotalActiveAccounts(): ?int | setTotalActiveAccounts(?int totalActiveAccounts): void |
| `totalCards` | `?int` | Optional | Total number of cards under the payer. | getTotalCards(): ?int | setTotalCards(?int totalCards): void |
| `totalActiveCards` | `?int` | Optional | Total number of active cards under the payer. | getTotalActiveCards(): ?int | setTotalActiveCards(?int totalActiveCards): void |
| `totalBlockedCards` | `?int` | Optional | Total number of cards under the payer that are permanently blocked | getTotalBlockedCards(): ?int | setTotalBlockedCards(?int totalBlockedCards): void |
| `totalCancelledCards` | `?int` | Optional | Total number of cards under the payer that are cancelled | getTotalCancelledCards(): ?int | setTotalCancelledCards(?int totalCancelledCards): void |
| `totalExpiredCards` | `?int` | Optional | Total number of expired cards under the payer. | getTotalExpiredCards(): ?int | setTotalExpiredCards(?int totalExpiredCards): void |
| `totalRenewalPendingCards` | `?int` | Optional | Total number of Renewal Pending cards under the payer. | getTotalRenewalPendingCards(): ?int | setTotalRenewalPendingCards(?int totalRenewalPendingCards): void |
| `totalReplacedCards` | `?int` | Optional | Total number of cards under the payer with status as “Replaced | getTotalReplacedCards(): ?int | setTotalReplacedCards(?int totalReplacedCards): void |
| `totalTemporaryBlockCardsByCustomer` | `?int` | Optional | Total number of cards under the payer that are temporarily blocked by customer. | getTotalTemporaryBlockCardsByCustomer(): ?int | setTotalTemporaryBlockCardsByCustomer(?int totalTemporaryBlockCardsByCustomer): void |
| `totalTemporaryBlockCardsByShell` | `?int` | Optional | Total number of cards under the payer that are temporarily blocked by Shell. | getTotalTemporaryBlockCardsByShell(): ?int | setTotalTemporaryBlockCardsByShell(?int totalTemporaryBlockCardsByShell): void |
| `totalNewCards` | `?int` | Optional | Total number of cards in “New” status | getTotalNewCards(): ?int | setTotalNewCards(?int totalNewCards): void |
| `totalFraudCards` | `?int` | Optional | Total number of cards in Fraud status | getTotalFraudCards(): ?int | setTotalFraudCards(?int totalFraudCards): void |
| `totalBlockedAccounts` | `?int` | Optional | Total number of accounts in Blocked status | getTotalBlockedAccounts(): ?int | setTotalBlockedAccounts(?int totalBlockedAccounts): void |
| `totalCancelledAccounts` | `?int` | Optional | Total number of accounts in Cancel status | getTotalCancelledAccounts(): ?int | setTotalCancelledAccounts(?int totalCancelledAccounts): void |
| `payerTradingName` | `?string` | Optional | Trading name for the Payer | getPayerTradingName(): ?string | setPayerTradingName(?string payerTradingName): void |
| `status` | `?string` | Optional | Payer current status id and description<br>e.g. (Id – Description):<br>1-Active<br>2-Requested from UTA<br>3-Awaiting embossing<br>4-Manufactured<br>5-Awaiting despatch | getStatus(): ?string | setStatus(?string status): void |
| `billingLanguage` | `?string` | Optional | Payer Billing Language id and description | getBillingLanguage(): ?string | setBillingLanguage(?string billingLanguage): void |
| `legalEntity` | `?string` | Optional | Legal entity id and description of the Payer | getLegalEntity(): ?string | setLegalEntity(?string legalEntity): void |
| `dateEstablished` | `?string` | Optional | Payer/Company Established Date. | getDateEstablished(): ?string | setDateEstablished(?string dateEstablished): void |
| `customerClassification` | `?string` | Optional | Payer/Company Classification id and description | getCustomerClassification(): ?string | setCustomerClassification(?string customerClassification): void |
| `industryClass` | `?string` | Optional | Payer/Company Industry class id and description | getIndustryClass(): ?string | setIndustryClass(?string industryClass): void |
| `marketingSegmentation` | `?string` | Optional | Marketing Segmentation id and description | getMarketingSegmentation(): ?string | setMarketingSegmentation(?string marketingSegmentation): void |
| `lineOfBusiness` | `?string` | Optional | Payer/Company Line of Business Id and Description | getLineOfBusiness(): ?string | setLineOfBusiness(?string lineOfBusiness): void |
| `printCreditLimit` | `?bool` | Optional | Is Credit Limit printed on the statement of account: True/False<br>If True Credit Limit is printed on invoice/SOA<br>**Default**: `false` | getPrintCreditLimit(): ?bool | setPrintCreditLimit(?bool printCreditLimit): void |
| `cardGroupType` | `?string` | Optional | Card Group Type configured for Payer<br>e.g. (Id – Description):<br>1-Horizontal only<br>2-Vertical only<br>3-Both | getCardGroupType(): ?string | setCardGroupType(?string cardGroupType): void |
| `renewCards` | `?bool` | Optional | If set to True cards will be automatically renewed on expiry<br>**Default**: `false` | getRenewCards(): ?bool | setRenewCards(?bool renewCards): void |
| `allowSelectPIN` | `?bool` | Optional | If set to True then Self Select PIN is allowed for Payer<br>**Default**: `false` | getAllowSelectPIN(): ?bool | setAllowSelectPIN(?bool allowSelectPIN): void |
| `useFleetPIN` | `?bool` | Optional | If set to True then Fleet PIN is applied for the cards directly under payer | getUseFleetPIN(): ?bool | setUseFleetPIN(?bool useFleetPIN): void |
| `vATRegNumber` | `?string` | Optional | Payer/Company VAT registration number. | getVATRegNumber(): ?string | setVATRegNumber(?string vATRegNumber): void |
| `vATRegNumber2` | `?string` | Optional | Payer/Company VAT registration number 2. | getVATRegNumber2(): ?string | setVATRegNumber2(?string vATRegNumber2): void |
| `registrationNumber` | `?string` | Optional | Payer/Company Registration number | getRegistrationNumber(): ?string | setRegistrationNumber(?string registrationNumber): void |
| `registrationNumber2` | `?string` | Optional | Payer/Company Registration number2 | getRegistrationNumber2(): ?string | setRegistrationNumber2(?string registrationNumber2): void |
| `salesLedgerBalance` | `?float` | Optional | Sales Ledger Balance (Billed) | getSalesLedgerBalance(): ?float | setSalesLedgerBalance(?float salesLedgerBalance): void |
| `exposure` | `?float` | Optional | Exposure after guarantee | getExposure(): ?float | setExposure(?float exposure): void |
| `outstandingDebt` | `?float` | Optional | Total outstanding debt (including billed and unbilled sales and fee items) | getOutstandingDebt(): ?float | setOutstandingDebt(?float outstandingDebt): void |
| `availableCredit` | `?float` | Optional | The available credit for the payer.<br>This is the credit limit minus the outstanding debt. | getAvailableCredit(): ?float | setAvailableCredit(?float availableCredit): void |
| `band` | `?string` | Optional | Band Id and Description of the Payer in Card Platform.<br>e.g. (Id – Description):<br>1-Platinum<br>2-Gold<br>3-Silver<br>4-Bronze | getBand(): ?string | setBand(?string band): void |
| `globalCustomerReferenceId` | `?string` | Optional | Global Customer reference id configured in card platform for Payer (Same as Payer Group) | getGlobalCustomerReferenceId(): ?string | setGlobalCustomerReferenceId(?string globalCustomerReferenceId): void |
| `creditLimit` | `?float` | Optional | Payment Credit limit of Payer. | getCreditLimit(): ?float | setCreditLimit(?float creditLimit): void |
| `creditLimitInCustomerCurrency` | `?float` | Optional | Credit limit in Customer currency.<br>Note: For currency details refer the parameters CurrencyCode & CurrencySymbol in the PayerDetail response. | getCreditLimitInCustomerCurrency(): ?float | setCreditLimitInCustomerCurrency(?float creditLimitInCustomerCurrency): void |
| `billingCurrencyCode` | `?string` | Optional | Customer Billing currency ISO code. | getBillingCurrencyCode(): ?string | setBillingCurrencyCode(?string billingCurrencyCode): void |
| `billingCurrencySymbol` | `?string` | Optional | Customer Billing currency Symbol. | getBillingCurrencySymbol(): ?string | setBillingCurrencySymbol(?string billingCurrencySymbol): void |
| `paymentMethod` | `?string` | Optional | Payment method Id and Description as configured for Payer in Card Platform | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `paymentTerms` | `?string` | Optional | Payment terms Id and Description as configured for Payer in Card Platform | getPaymentTerms(): ?string | setPaymentTerms(?string paymentTerms): void |
| `temporaryCreditLimitIncrease` | `?float` | Optional | Temporary Credit limit increase value | getTemporaryCreditLimitIncrease(): ?float | setTemporaryCreditLimitIncrease(?float temporaryCreditLimitIncrease): void |
| `temporaryCreditLimitIncreaseInCustomerCurrency` | `?float` | Optional | Temporary Credit limit increase value | getTemporaryCreditLimitIncreaseInCustomerCurrency(): ?float | setTemporaryCreditLimitIncreaseInCustomerCurrency(?float temporaryCreditLimitIncreaseInCustomerCurrency): void |
| `temporaryCreditLimitExpiryDate` | `?string` | Optional | Temporary Credit limit expiry date | getTemporaryCreditLimitExpiryDate(): ?string | setTemporaryCreditLimitExpiryDate(?string temporaryCreditLimitExpiryDate): void |
| `payerBankAccount` | [`?(BankAccount[])`](../../doc/models/bank-account.md) | Optional | - | getPayerBankAccount(): ?array | setPayerBankAccount(?array payerBankAccount): void |
| `cardDeliveryAddress` | [`?Address`](../../doc/models/address.md) | Optional | - | getCardDeliveryAddress(): ?Address | setCardDeliveryAddress(?Address cardDeliveryAddress): void |
| `correspondanceAddress` | [`?Address`](../../doc/models/address.md) | Optional | - | getCorrespondanceAddress(): ?Address | setCorrespondanceAddress(?Address correspondanceAddress): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | - | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `hasActiveVolBasedPricing` | `?bool` | Optional | True, if the payer is setup for volume-based pricing and is active on the current date, else false.<br><br>This field is returned only when IncludeBonusParameters is set to True in the request. Else set to null. | getHasActiveVolBasedPricing(): ?bool | setHasActiveVolBasedPricing(?bool hasActiveVolBasedPricing): void |
| `hasActiveVolBasedBonus` | `?bool` | Optional | True, if the payer is setup for volume-based bonus and is active on the current date, else false.<br>This field is returned only when IncludeBonusParameters is set to True in the request. Else set to null. | getHasActiveVolBasedBonus(): ?bool | setHasActiveVolBasedBonus(?bool hasActiveVolBasedBonus): void |
| `hasActiveVolBasedAssociationBonus` | `?bool` | Optional | True, if the payer is setup for volume-based association bonus and is active on the current date, else false.<br>This field is returned only when IncludeBonusParameters is set to True in the request. Else set to null. | getHasActiveVolBasedAssociationBonus(): ?bool | setHasActiveVolBasedAssociationBonus(?bool hasActiveVolBasedAssociationBonus): void |
| `financeCurrency` | [`?FinanceCurrency2`](../../doc/models/finance-currency-2.md) | Optional | - | getFinanceCurrency(): ?FinanceCurrency2 | setFinanceCurrency(?FinanceCurrency2 financeCurrency): void |
| `tollsCustomerId` | `?string` | Optional | Customer id in e-TM system<br>This field will have value only when ReturnTollsCustomerId is set to true in the request else set to null or empty. | getTollsCustomerId(): ?string | setTollsCustomerId(?string tollsCustomerId): void |
| `tollsColcoCountryTypeId` | `?string` | Optional | String    Colco country type id in e-TM system<br>This field will have value only when ReturnTollsCustomerId is set to true in the request else set to null or empty. | getTollsColcoCountryTypeId(): ?string | setTollsColcoCountryTypeId(?string tollsColcoCountryTypeId): void |
| `contracts` | [`?(CustomerContract[])`](../../doc/models/customer-contract.md) | Optional | - | getContracts(): ?array | setContracts(?array contracts): void |

## Example (as JSON)

```json
{
  "ColCoId": 14,
  "ColCoCode": 14,
  "CountryCode": "DE",
  "Country": "Germany",
  "PayerId": 12345,
  "PayerNumber": "DE000000123",
  "PayerFullName": "ABC Company",
  "PayerShortName": "ABC",
  "PayerGroupId": 456,
  "AmountDue": 1500,
  "AmountOverdue": 450,
  "AmountNotOverdue": 4546.76,
  "OutstandingBalance": 456,
  "UnallocatedPayment": 123,
  "SOACurrencyCode": "EUR",
  "SOACurrencySymbol": "€",
  "SOACreditLimitCurrencyCode": "EUR",
  "SOACreditLimitCurrencySymbol": "€",
  "LastPaymentCurrencyCode": "EUR",
  "LastPaymentCurrencySymbol": "€",
  "LastPaymentAmount": 5465,
  "LastPaymentDate": "20230405",
  "SOALastPaymentAmount": 45443,
  "SOALastPaymentDate": "20230805",
  "CurrencyCode": "EUR",
  "CurrencySymbol": "€",
  "ColCoCountryCode": "DE",
  "LocalCurrencyCode": "EUR",
  "LocalCurrencySymbol": "€",
  "LocalCurrencyExchangeRate": 1.45,
  "LocalCurrencyExchangeRate_SoA": 1.2,
  "BillingFrequencyTypeId": 1,
  "BillingFrequencyType": "weekly",
  "BillingRunFrequencyTypeId": 1,
  "BillingRunFrequnecy": "weekly",
  "Day1Run": 0,
  "Day2Run": 0,
  "Day3Run": 0,
  "Day4Run": 0,
  "OutputType": "PDF",
  "InvoiceAccountID": 12345,
  "InvoiceAccountNumber": "1234567",
  "InvoiceAccountShortName": "Test Account",
  "BestOfIndicator": false,
  "IsInternational": false,
  "TotalAccounts": 5,
  "TotalActiveAccounts": 4,
  "TotalCards": 567,
  "TotalActiveCards": 560,
  "TotalBlockedCards": 6,
  "TotalCancelledCards": 0,
  "TotalExpiredCards": 1,
  "TotalRenewalPendingCards": 0,
  "TotalReplacedCards": 0,
  "TotalTemporaryBlockCardsByCustomer": 0,
  "TotalTemporaryBlockCardsByShell": 0,
  "TotalNewCards": 0,
  "TotalBlockedAccounts": 0,
  "TotalCancelledAccounts": 0,
  "PayerTradingName": "ABC Company",
  "Status": "Active",
  "BillingLanguage": "1-German",
  "LegalEntity": "20-Unlimited Corporation",
  "DateEstablished": "19880504",
  "CustomerClassification": "3-10049 Domestic",
  "IndustryClass": "4-Growing of sugar cane",
  "MarketingSegmentation": "1-National CRT",
  "LineOfBusiness": "1-CRT",
  "PrintCreditLimit": false,
  "CardGroupType": "1-Horizontal only",
  "RenewCards": false,
  "AllowSelectPIN": false,
  "VATRegNumber": "4534545",
  "VATRegNumber2": "45345545",
  "RegistrationNumber": "453543",
  "RegistrationNumber2": "35435",
  "SalesLedgerBalance": 0,
  "Exposure": 0,
  "OutstandingDebt": 0,
  "AvailableCredit": 0,
  "Band": "Gold",
  "GlobalCustomerReferenceId": "1234",
  "CreditLimit": 3434,
  "BillingCurrencyCode": "EUR",
  "BillingCurrencySymbol": "€",
  "PaymentMethod": "Incoming - Bank Transfer",
  "PaymentTerms": "0 days after invoice",
  "TemporaryCreditLimitIncrease": 0,
  "TemporaryCreditLimitIncreaseInCustomerCurrency": 0,
  "TemporaryCreditLimitExpiryDate": "20230504",
  "TollsCustomerId": "2332",
  "TollsColcoCountryTypeId": "33"
}
```

