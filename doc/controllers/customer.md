# Customer

APIs for Retrieve and Update customer specific details

```php
$customerController = $client->getCustomerController();
```

## Class Name

`CustomerController`

## Methods

* [Loggedinuser](../../doc/controllers/customer.md#loggedinuser)
* [Payers](../../doc/controllers/customer.md#payers)
* [Customer](../../doc/controllers/customer.md#customer)
* [Accounts](../../doc/controllers/customer.md#accounts)
* [Card Type](../../doc/controllers/customer.md#card-type)
* [Cardgroups](../../doc/controllers/customer.md#cardgroups)
* [Auditreport](../../doc/controllers/customer.md#auditreport)
* [Createcardgroup](../../doc/controllers/customer.md#createcardgroup)
* [Updatecardgroup](../../doc/controllers/customer.md#updatecardgroup)


# Loggedinuser

This API allows querying the user data of the logged in user.</br>
This API will return the user access details such as payers and/or accounts. </br>
This API will also validate that logged in user has access to the requested API, on failure it will return HasAPIAccess flag as false in response.</br>

```php
function loggedinuser(
    string $apikey,
    string $requestId,
    ?FleetmanagementV1UserLoggedinuserRequest $body = null
): LoggedInUserResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?FleetmanagementV1UserLoggedinuserRequest`](../../doc/models/fleetmanagement-v1-user-loggedinuser-request.md) | Body, Optional | Logged in user request body |

## Response Type

[`LoggedInUserResponse`](../../doc/models/logged-in-user-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = FleetmanagementV1UserLoggedinuserRequestBuilder::init()
    ->includePayerGroup(false)
    ->includeEIDDetails(false)
    ->requestedAPIName('Name of the API')
    ->payerId(123456)
    ->payerNumber('GB00123456')
    ->build();

$result = $customerController->loggedinuser(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "UserName": "D09PZ29h2eaBWi5Da8gcHsTRO10w8Qh9",
  "DisplayName": "3rdParty test",
  "IdMSSOID": "D09PZ29h2eaBWi5Da8gcHsTRO10w8Qh9",
  "PreferredLanguage": "en-GB",
  "IsSuperAdmin": false,
  "DateFormat": "dd/MM/yy",
  "TimeFormat": "hh:mm tt",
  "WeekBegins": 1,
  "DisplayWeek": true,
  "CSVSeparator": ";",
  "DecimalSeparator": "1,234,567.00",
  "ReportFormat": "csv",
  "HasAPIAccess": true,
  "Roles": [
    {
      "RoleName": "FleetManager",
      "IsCustomerAdmin": true,
      "IsCustomerUser": false,
      "IsShellAdmin": false,
      "IsServiceAccount": false,
      "IsUserAdmin": true
    }
  ],
  "Payers": [
    {
      "IsDefault": false,
      "ColcoId": 14,
      "ColcoCode": 14,
      "ColCoCountryCode": "DE",
      "PayerGroupId": 123,
      "PayerGroup": "null",
      "PayerId": 854,
      "PayerNumber": "DE26688504",
      "PayerName": "TK MobilPlus"
    }
  ],
  "Accounts": [
    {
      "ColcoId": 14,
      "ColcoCode": 14,
      "PayerId": 854,
      "PayerNumber": "DE26688504",
      "PayerName": "TK MobilPlus",
      "AccountId": 435,
      "AccountNumber": "DE26688504",
      "AccountName": "TK Sub Account"
    }
  ],
  "CollectingCompanies": [
    {
      "ColCoId": "14",
      "ColCoCode": "14",
      "ColCoCountryName": "DE",
      "IssuingCountryNumber": "DE"
    }
  ],
  "EIDAccessDetails": [
    {
      "ColCoId": "14",
      "ColCoCode": 14,
      "AccountGroupId": "345"
    }
  ],
  "UserClassificationBySystem": "S",
  "UserClassificationByShell": "S",
  "PayerCount": 1,
  "AccountCount": 1,
  "CardCount": 15,
  "Error": {
    "Code": "0000",
    "Description": "Success"
  },
  "RequestId": "f20979a8-872f-4653-cf12-89b52f1dc7cb"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | [`FleetmanagementV1UserLoggedinuser400ErrorException`](../../doc/models/fleetmanagement-v1-user-loggedinuser-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`FleetmanagementV1UserLoggedinuser401ErrorException`](../../doc/models/fleetmanagement-v1-user-loggedinuser-401-error-exception.md) |
| 403 | The server understood the request but refuses to authorize it. | [`FleetmanagementV1UserLoggedinuser403ErrorException`](../../doc/models/fleetmanagement-v1-user-loggedinuser-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`FleetmanagementV1UserLoggedinuser404ErrorException`](../../doc/models/fleetmanagement-v1-user-loggedinuser-404-error-exception.md) |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | [`FleetmanagementV1UserLoggedinuser500ErrorException`](../../doc/models/fleetmanagement-v1-user-loggedinuser-500-error-exception.md) |


# Payers

This API allows querying the payer accounts details from the Shell Cards
Platform. It provides flexible search criteria for searching payer
information and supports paging.

Paging is applicable only when all the
payers passed in the input are from the same ColCo.

However, paging will
be ignored and the API will return all the matching data by merging the
data queried from each ColCo when payers passed in the input are from
multiple ColCos.

```php
function payers(string $apikey, string $requestId, ?PayerRequest $body = null): PayerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?PayerRequest`](../../doc/models/payer-request.md) | Body, Optional | Serach payers request body |

## Response Type

[`PayerResponse`](../../doc/models/payer-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = PayerRequestBuilder::init()
    ->payers(
        [
            PayersBuilder::init()
                ->colCoId(14)
                ->colCoCode(14)
                ->payerId(12345)
                ->payerNumber('string')
                ->payerName('ABC company')
                ->payerGroupId(456)
                ->build()
        ]
    )
    ->returnBasicDetailsOnly(false)
    ->includeAddresses(false)
    ->includeBonusParameters(false)
    ->currentPage(1)
    ->pageSize(15)
    ->build();

$result = $customerController->payers(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "Payers": [
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
      "InvoiceDistributionMethods": [
        {
          "IsPrimary": true,
          "FrequencyType": "weekly",
          "DistributionMethod": "e-mail",
          "OutputType": "1 - PDF"
        }
      ],
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
      "TotalFraudCards": 0,
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
      "UseFleetPIN": true,
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
      "CreditLimitInCustomerCurrency": 0,
      "BillingCurrencyCode": "EUR",
      "BillingCurrencySymbol": "€",
      "PaymentMethod": "Incoming - Bank Transfer",
      "PaymentTerms": "0 days after invoice",
      "TemporaryCreditLimitIncrease": 0,
      "TemporaryCreditLimitIncreaseInCustomerCurrency": 0,
      "TemporaryCreditLimitExpiryDate": "20230504",
      "PayerBankAccount": [
        {
          "AccountNumber": "45346346443",
          "BankName": "swiss",
          "AccountName": "ARIM SERVIS",
          "DateEffective": "20200808",
          "DateTerminated": null,
          "IBAN": "CZ6508000000192000145399",
          "CurrencyCode": "EUR",
          "CurrencySymbol": "€",
          "CountryISOCode": "DE",
          "Country": "Germany",
          "SortCode": "0100",
          "SwiftCode": "KOMBCZPPXXX",
          "BankType": "1-Test"
        }
      ],
      "CardDeliveryAddress": {
        "AddressId": 1,
        "AddressLine1": "test street",
        "AddressLine2": "Address line2",
        "AddressLine3": "AddressLine3",
        "ZipCode": "667 78",
        "City": "LUMPUR",
        "RegionId": 1234,
        "CountryISOCode": "CZ",
        "Country": "Germany",
        "Telephone": "3245872364823",
        "EmailAddress": "testmail@gmail.com",
        "Fax": "3245872364823"
      },
      "CorrespondanceAddress": {
        "AddressId": 1,
        "AddressLine1": "test street",
        "AddressLine2": "Address line2",
        "AddressLine3": "AddressLine3",
        "ZipCode": "667 78",
        "City": "LUMPUR",
        "RegionId": 1234,
        "CountryISOCode": "CZ",
        "Country": "Germany",
        "Telephone": "3245872364823",
        "EmailAddress": "testmail@gmail.com",
        "Fax": "3245872364823"
      },
      "BillingAddress": {
        "AddressId": 1,
        "AddressLine1": "test street",
        "AddressLine2": "Address line2",
        "AddressLine3": "AddressLine3",
        "ZipCode": "667 78",
        "City": "LUMPUR",
        "RegionId": 1234,
        "CountryISOCode": "CZ",
        "Country": "Germany",
        "Telephone": "3245872364823",
        "EmailAddress": "testmail@gmail.com",
        "Fax": "3245872364823"
      },
      "HasActiveVolBasedPricing": true,
      "HasActiveVolBasedBonus": true,
      "HasActiveVolBasedAssociationBonus": true,
      "FinanceCurrency": {
        "CurrencyCode": "EUR",
        "CurrencySymbol": "€",
        "Invoice_ExchangeRate": 1,
        "CreditLimit_ExchangeRate": 1
      },
      "TollsCustomerId": "2332",
      "TollsColcoCountryTypeId": "33",
      "Contracts": [
        {
          "PartnerId": "335",
          "PartnerName": "Test"
        }
      ]
    }
  ],
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "Error": {
    "Code": "0000",
    "Description": "Success"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | [`FleetmanagementV1CustomerPayers400ErrorException`](../../doc/models/fleetmanagement-v1-customer-payers-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`FleetmanagementV1CustomerPayers404ErrorException`](../../doc/models/fleetmanagement-v1-customer-payers-404-error-exception.md) |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Customer

This API allows querying the card delivery addresses of a given account from the Shell Cards Platform.
Only active delivery addresses will be returned.

```php
function customer(
    string $apikey,
    string $requestId,
    ?CustomerDetailRequest $body = null
): CustomerDetailResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CustomerDetailRequest`](../../doc/models/customer-detail-request.md) | Body, Optional | Customerdetails request body |

## Response Type

[`CustomerDetailResponse`](../../doc/models/customer-detail-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = CustomerDetailRequestBuilder::init()
    ->colCoId(14)
    ->colCoCode(14)
    ->payerId(12345)
    ->payerNumber('GB000000123')
    ->accountId(0)
    ->accountNumber('GB000000124')
    ->build();

$result = $customerController->customer(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "AccountId": 1227,
  "AccountName": "5.11.3 DE",
  "AccountNumber": "DE00001067",
  "AccountShortName": "5.11.3 DE",
  "AccountTradingName": "5.11.3 DE",
  "AllowFleetIdInput": true,
  "Band": "2 - Gold",
  "BillingAddress": {
    "AddressId": 1,
    "AddressLine1": "test street",
    "AddressLine2": "Address line2",
    "AddressLine3": "AddressLine3",
    "ZipCode": "667 78",
    "City": "LUMPUR",
    "RegionId": 1234,
    "CountryISOCode": "CZ",
    "Country": "Germany",
    "Telephone": "3245872364823",
    "EmailAddress": "testmail@gmail.com",
    "Fax": "3245872364823"
  },
  "CardGroupPosition": "string",
  "CorrespondenceAddress": {
    "AddressId": 1,
    "AddressLine1": "test street",
    "AddressLine2": "Address line2",
    "AddressLine3": "AddressLine3",
    "ZipCode": "667 78",
    "City": "LUMPUR",
    "RegionId": 1234,
    "CountryISOCode": "CZ",
    "Country": "Germany",
    "Telephone": "3245872364823",
    "EmailAddress": "testmail@gmail.com",
    "Fax": "3245872364823"
  },
  "DeliveryAddresses": [
    {
      "AddressId": 1,
      "AddressLine1": "AddressLine1",
      "AddressLine2": "AddressLine2",
      "AddressLine3": "AddressLine3",
      "City": "germany",
      "CompanyName": "5.11.3 DE",
      "ContactForeName": "5.11.13 DE",
      "ContactLastName": "SAM",
      "ContactMiddleName": "SAM",
      "ContactTitle": "Mr",
      "Country": "Germany",
      "CountryId": 9,
      "CountryISOCode": "DE",
      "Fax": "657875",
      "Region": "Germany",
      "RegionId": 133,
      "Telephone": "78787786868",
      "ZipCode": "string",
      "AddressType": 1
    }
  ],
  "FleetPin": true,
  "FullName": "5.11.3 DE",
  "InvoiceCustomerId": 1227,
  "InvoiceCustomerShortName": "5.11.3 DE",
  "IsInvoicePoint": true,
  "MarketingSegmentation": "4 - National/International Fleet/IKA",
  "VATNumber": "PH6578900900",
  "PayerId": 1227,
  "PayerName": "5.11.3 DE",
  "PayerNumber": "DE00001067",
  "SelfSelectedPin": true,
  "Status": "1 - Active",
  "DefaultPINAdviceType": 1,
  "PINAdviceTypes": [
    {
      "PINAdviceTypeID": 1,
      "IsCardOrderOption": true,
      "IsPINReminderOption": true
    }
  ],
  "Error": {
    "Code": "0000",
    "Description": "Success"
  },
  "RequestId": "908358e3-03ca-4aef-93b2-37586b859171",
  "PINChangeAllowedByCardholder": true,
  "PINChangeAllowedFromFleetPIN": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | [`FleetmanagementV1CustomerCustomer403ErrorException`](../../doc/models/fleetmanagement-v1-customer-customer-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Accounts

This API allows querying the customer account details from the Shell Cards Platform.
It provides a flexible search criterion and supports paging".

```php
function accounts(string $apikey, string $requestId, ?AccountRequest $body = null): AccountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?AccountRequest`](../../doc/models/account-request.md) | Body, Optional | - |

## Response Type

[`AccountResponse`](../../doc/models/account-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = AccountRequestBuilder::init()
    ->status('ALL')
    ->includeCardSummary(true)
    ->payerId(9)
    ->payerNumber('GB00000111')
    ->pageSize(10)
    ->requestId('b9eb91b6-65d4-4196-f910-6b0846875e70')
    ->colCoCode(14)
    ->colCoCountryCode('14')
    ->currentPage(1)
    ->invoicePointsOnly(false)
    ->colCoId(14)
    ->returnTollsCustomerId(true)
    ->accounts(
        [
            AccountsBuilder::init()
                ->accountId(3453)
                ->accountNumber('GB000000124')
                ->build()
        ]
    )
    ->accountName('test')
    ->statusList(
        [
            'ACTIVE'
        ]
    )
    ->build();

$result = $customerController->accounts(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "Accounts": [
    {
      "AccountFullName": "CI TEST_Update20 New updated",
      "AccountId": 123,
      "AccountNumber": "DE00000008",
      "AccountShortName": "CI TEST_Update20",
      "BestOfIndicator": true,
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
      "InvoiceDistributionMethods": [
        {
          "IsPrimary": true,
          "FrequencyType": "weekly",
          "DistributionMethod": "e-mail",
          "OutputType": "1 - PDF"
        }
      ],
      "IsInternational": true,
      "IsInvoicePoint": true,
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
      "Contracts": [
        {
          "PartnerId": "335",
          "PartnerName": "Test"
        }
      ],
      "IsConsortiumMember": "string"
    }
  ],
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "Error": {
    "Code": "0000",
    "Description": "Success"
  },
  "RequestId": "e5165f29-7e6f-45b4-96fe-f303df9ca180"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Card Type

This operation allows querying card types that are associated to the given account and are allowed to be shown to users.

```php
function cardType(string $apikey, string $requestId, ?CardTypeRequest $body = null): CardTypeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CardTypeRequest`](../../doc/models/card-type-request.md) | Body, Optional | Get CardType Request Body |

## Response Type

[`CardTypeResponse`](../../doc/models/card-type-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = CardTypeRequestBuilder::init()
    ->colCoId(14)
    ->colCoCode(14)
    ->payerId(2343)
    ->payerNumber('GB000000124')
    ->accountId(343)
    ->accountNumber('GB000000124')
    ->includeUsageRestrictions(true)
    ->includePurchaseCategories(true)
    ->build();

$result = $customerController->cardType(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "CustomerCardTypes": [
    {
      "CanHavePIN": true,
      "CardTypeId": 228,
      "CardTypeName": "DE-Kleinfhzg. International Multi",
      "ColCoCurrencyCode": "EUR",
      "CustomerCardTypeId": 1576,
      "DayTimeRestrictions": {
        "Level": "OU= 24537",
        "Monday": true,
        "Tuesday": true,
        "Wednesday": true,
        "Thursday": true,
        "Friday": true,
        "Saturday": true,
        "Sunday": true,
        "TimeFrom": "07:56:00",
        "TimeTo": "08:19:09"
      },
      "DefaultPurchaseCategoryId": 127,
      "EmbossAccountName": "5.11.3 DE",
      "ExpiryPeriod": 48,
      "IsCRT": true,
      "IsFleet": true,
      "IsInternational": true,
      "IsNational": true,
      "IsPartnerSitesIncluded": true,
      "IsShellSitesOnly": true,
      "IsVirtual": true,
      "IsVisibleToCustomers": true,
      "IsActive": true,
      "IsCardAvailableForDownload": true,
      "IsCardVisibleToCustomers": true,
      "PANLength": 19,
      "PurchaseCategories": [
        {
          "Id": 123,
          "Code": "1",
          "Name": "FuelSave only",
          "IsVisible": true,
          "ProductGroups": "19,1"
        }
      ],
      "TokenTypeId": 160,
      "TokenTypeName": "DE FLT INT MUL - CHIP",
      "UsageRestrictions": {
        "Level": "OU",
        "DailySpendLimit": 120,
        "WeeklySpendLimit": 56.07,
        "MonthlySpendLimit": 0,
        "AnnualSpendLimit": 0,
        "LifeTimeSpendLimit": 0,
        "DailyVolumeLimit": 0,
        "WeeklyVolumeLimit": 0,
        "MonthlyVolumeLimit": 0,
        "AnnualVolumeLimit": 0,
        "LifeTimeVolumeLimit": 0,
        "TransactionSpendLimit": 0,
        "TransactionVolumeLimit": 0,
        "DailyTransactionCount": 100,
        "WeeklyTransactionCount": 100,
        "MonthlyTransactionCount": 100,
        "AnnualTransactionCount": 100,
        "LifeTimeTransactionCount": 100,
        "IsVelocityCeiling": true
      },
      "EMVContactless": true,
      "RFID": true,
      "PINChangeSupported": true,
      "RequirePIN": true,
      "OfflinePIN": true,
      "IsDefault": true,
      "ApplicationsToShowNPIITokens": true,
      "MediumTypeID": 1,
      "MediumType": "Fuel Card",
      "ColCoCurrencySymbol": "£"
    }
  ],
  "Error": {
    "Code": "string",
    "Description": "string"
  },
  "RequestId": "a0a7ceb0-5b32-4ec8-88e1-ad868967e43f"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Cardgroups

This operation allows querying the card group details . It provides flexible search criteria and supports paging.\

When the card group type is configured as ‘Vertical’ in cards platform, this operation will return all card groups from the given account or if no account is passed in the input, then will return card groups from all the accounts under the payer.

When the card group type is configured as ‘Horizontal’ in cards platform, this API will return all card groups configured directly under the payer.

Accounts with cancelled status will not be considered for cardgroups search for the configured (E.g., SFH) set of client apps.

```php
function cardgroups(string $apikey, string $requestId, ?CardGroupRequest $body = null): CardGroupResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CardGroupRequest`](../../doc/models/card-group-request.md) | Body, Optional | Request Body |

## Response Type

[`CardGroupResponse`](../../doc/models/card-group-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = CardGroupRequestBuilder::init()
    ->colCoId(14)
    ->colCoCode(14)
    ->payerId(123)
    ->payerNumber('GB00123456')
    ->account(
        [
            AccountsBuilder::init()
                ->accountId(3453)
                ->accountNumber('GB000000124')
                ->build()
        ]
    )
    ->cardGroupName('test')
    ->status('ALL')
    ->currentPage(0)
    ->pageSize(1)
    ->build();

$result = $customerController->cardgroups(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "CardGroups": [
    {
      "AccountId": 1229,
      "AccountNumber": "CZ00000929",
      "AccountShortName": "Dominica South1",
      "ActiveCards": 0,
      "BlockedCards": 1,
      "CancelledCards": 0,
      "CardDeliveryPoint": true,
      "CardGroupId": 1234,
      "CardGroupName": "1234T",
      "CardTypeCode": "0123",
      "CardTypeId": 123,
      "CardTypeName": "test",
      "ExpiredCards": 0,
      "ExpiryDate": "20231231",
      "PrintOnCard": true,
      "RenewalPendingCards": 5,
      "ReplacedCards": 0,
      "Status": "TERMINATED",
      "TemporaryBlockByCustomer": 0,
      "TemporaryBlockByShell": 0,
      "TerminatedDate": "20210712",
      "TotalCards": 10
    }
  ],
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "Error": {
    "Code": "0000",
    "Description": "Success"
  },
  "RequestId": "3cc14d61-8f2a-4d88-cc3c-c53110646a85"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Auditreport

This operation allows users to fetch audit data of account or card operations performed by users of a given customer
The audit data includes details of below API operations

* Order Card
* Create Card Group
* PIN reminder
* Move Cards
* Update Card Status
* Update Card Group
* Auto renew
* Bulk card order
* Bulk card block
* Bulk Card Order (Multi Account)
* BCOSummary
* BCOMultiAccountSummary
* BCBSummary
* Mobile Payment Registration
* Fund Transfer (Scheduled & Realtime)
* Delivery Address Update.

```php
function auditreport(string $apikey, string $requestId, ?AuditRequest $body = null): AuditResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?AuditRequest`](../../doc/models/audit-request.md) | Body, Optional | request body |

## Response Type

[`AuditResponse`](../../doc/models/audit-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = AuditRequestBuilder::init()
    ->status('All')
    ->payerNumber('BE00000113')
    ->payerId(123)
    ->accountNumber('BE00000113')
    ->colCoCode(9)
    ->colCoId(9)
    ->accounts(
        AccountsBuilder::init()
            ->accountId(3453)
            ->accountNumber('GB000000124')
            ->build()
    )
    ->pageSize(500)
    ->requestedOperation(
        [
            'OrderCard'
        ]
    )
    ->sortOrder('1')
    ->searchText('orde')
    ->currentPage(1)
    ->fromDate('20240101')
    ->toDate('20240202')
    ->build();

$result = $customerController->auditreport(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "Audits": [
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
  ],
  "CurrentPage": 1,
  "RowCount": 1,
  "TotalPages": 1,
  "Error": {
    "Code": "0000",
    "Description": "Success"
  },
  "RequestId": "14915cff-5d37-4ee9-cb32-bd77b9d271cf"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Createcardgroup

This API allows creating a new Card Group in the Shell Cards Platform. It will
also allow moving of cards (up to 500 cards) into the newly created
card-group.

### Move Card requests are queued after passing the below validations

* Given PAN matches with only one card.
* Card is allowed to be moved to the Target Card Group and/or
* Target account requested.
* There is no pending Move Card request for the same card in the queue which is submitted on the same date
  and is yet to be processed or has been processed
  successfully

```php
function createcardgroup(
    string $apikey,
    string $requestId,
    ?CreateCardGroupRequest $body = null
): CreateCardGroupResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CreateCardGroupRequest`](../../doc/models/create-card-group-request.md) | Body, Optional | CreateCardGroup request body |

## Response Type

[`CreateCardGroupResponse`](../../doc/models/create-card-group-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = CreateCardGroupRequestBuilder::init()
    ->colCoCode(86)
    ->colCoId(1)
    ->payerNumber('PH50000843')
    ->payerId(853)
    ->accountId(854)
    ->accountNumber('PH50000844')
    ->printOnCard(true)
    ->cardGroupName('GROUP1')
    ->cards(
        [
            CreateCardGroupRequestCardsItemsBuilder::init()
                ->accountId(123)
                ->accountNumber('ACC123')
                ->cardId(123)
                ->pAN('ABC12345672')
                ->build()
        ]
    )
    ->build();

$result = $customerController->createcardgroup(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "MainReference": 56789,
  "NewCardGroupReference": 5672,
  "SuccessfulRequests": [
    {
      "CardId": 125,
      "PAN": "7002861007636000020",
      "Reference": 58764
    }
  ],
  "ErrorCards": [
    {
      "CardId": 125,
      "PAN": "7002861007636000020",
      "ErrorCode": "000",
      "ErrorDescription": "Success"
    }
  ],
  "Error": {
    "Description": "Success",
    "Code": "0000"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Updatecardgroup

This API allows updating or removing a Card Group in the Shell Cards Platform.

It also allows moving of cards out of a card group or from one card group to another existing card group.

The request for updating or removing of the card group, creationg of a new card group (where-applicable) and moving of card into another card group will be queued at Microservices after passing the basic
validations.

```php
function updatecardgroup(
    string $apikey,
    string $requestId,
    ?UpdateCardGroupRequest $body = null
): UpdateCardGroupResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?UpdateCardGroupRequest`](../../doc/models/update-card-group-request.md) | Body, Optional | request body of customer card group |

## Response Type

[`UpdateCardGroupResponse`](../../doc/models/update-card-group-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = UpdateCardGroupRequestBuilder::init()
    ->colCoCode(86)
    ->colCoId(1)
    ->payerNumber('PH50000843')
    ->payerId(853)
    ->accountId(12356)
    ->accountNumber('GB000000124')
    ->cardGroupId(123)
    ->cardGroupName('GROUP1')
    ->printOnCard(true)
    ->cardTypeId(123)
    ->terminateCardGroup(true)
    ->moveCards(true)
    ->targetAccountId(23456)
    ->targetAccountNumber('GB000000124')
    ->targetNewCardGroupName('CGA GROUP1')
    ->targetCardGroupId(3456)
    ->build();

$result = $customerController->updatecardgroup(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "MainReference": 56789,
  "UpdateCardGroupReference": 89,
  "NewCardGroupReference": 78,
  "MoveCardReferences": [
    {
      "CardId": 125,
      "PAN": "7002861007636000020",
      "Reference": 58764
    }
  ],
  "Error": {
    "Description": "Success",
    "Code": "0000"
  },
  "Warnings": [
    {
      "Type": "System Outage",
      "Message": "System is down for upgradation."
    }
  ],
  "RequestId": "ed557f02-c7d7-4c01-b3e5-11bf3239c8ed"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |

