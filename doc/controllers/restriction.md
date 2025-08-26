# Restriction

APIs for Retrieve and Update restriction on cards

```php
$restrictionController = $client->getRestrictionController();
```

## Class Name

`RestrictionController`

## Methods

* [Search Card Restriction](../../doc/controllers/restriction.md#search-card-restriction)
* [Apply Restriction](../../doc/controllers/restriction.md#apply-restriction)
* [Create Bundle](../../doc/controllers/restriction.md#create-bundle)
* [Update Bundle](../../doc/controllers/restriction.md#update-bundle)
* [Delete Bundle](../../doc/controllers/restriction.md#delete-bundle)
* [Summary of Bundles](../../doc/controllers/restriction.md#summary-of-bundles)
* [Restriction Account](../../doc/controllers/restriction.md#restriction-account)
* [Search Account Limit](../../doc/controllers/restriction.md#search-account-limit)
* [Bundle Details](../../doc/controllers/restriction.md#bundle-details)


# Search Card Restriction

This API will allows querying card details including the day/time and product restrictions.

#### Supported operations

* Search by list of cards or bundle

* Include card bundle details (optional)

```php
function searchCardRestriction(
    string $requestId,
    ?SearchCardRestrictionReq1 $body = null
): SearchCardRestrictionRes1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SearchCardRestrictionReq1`](../../doc/models/search-card-restriction-req-1.md) | Body, Optional | Restriction search card request body |

## Response Type

[`SearchCardRestrictionRes1`](../../doc/models/search-card-restriction-res-1.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->searchCardRestriction($requestId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Apply Restriction

The Card Limit and Restriction API is REST-based and employs Basic and ApiKey authentication. The API endpoints accept JSON-encoded request bodies, return JSON-encoded responses and use standard HTTP response codes.

All resources are located in the Shell Card Platform.  The Shell Card Platform is the overall platform that encompasses all the internal Shell systems used to manage resources. The internal workings of the platform are not important when interacting with the API. However, it is worth noting that the platform uses to communicate with various backend systems and some API calls are processed asynchronously.

All endpoints use the `POST` verb for retrieving, updating, creating and deleting resources in the Shell Card Platform. The endpoints that retrieve resources from the Shell Card Platform allow flexible search parameters in the API request body.

**Important Note** - This operation allows setting or updating the restrictions on existing cards. (For up to 3 cards in a single call).

All restrictions of the cards are submitted and executed after successful below condition.
•    The card exists.
•    Day time restriction cannot be set to restrict the use of a card on all days of the week i.e., the values for all the days in the restriction cannot be set to false.
•    Either of the usage, daytime, location or product restriction ‘Reset’ is set to ‘True’ or applied on the card.
•    All the limits in the usage restriction profile for a card is not set to ‘0’/null.
•    If IsVelocityCeiling is ‘true’, API will validate below condition:
Usage restrictions for a card are lower than Customer Card Type level limits, if there are no customer level overrides available then lower than OU card type limits.
•    In usage restrictions, the limits per transaction should be less than or equal to Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly, Monthly should be less than or equal to Yearly (Annually). Exception being null/blank will be skipped. i.e., Daily value should be less than equal to Monthly value if Weekly value is null/blank. Lifetime limit is not considered for usage restrictions limits validation.
•    Apply the card type limit to Gateway when a value is NULL in the input. However, if the card type limit is NULL for the same field, then no limit will be applied in Gateway.
•    If ‘SetDefaultOnVelocityUpdate’ is ‘true’ then the operation will apply customer cardtype or OU level velocity limits on existing cards when restrictions are modified without providing custom values for all fields.

```php
function applyRestriction(string $requestId, ?CardRestrictionReq $body = null): CardRestrictionRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CardRestrictionReq`](../../doc/models/card-restriction-req.md) | Body, Optional | Card Restriction request body |

## Response Type

[`CardRestrictionRes`](../../doc/models/card-restriction-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->applyRestriction($requestId);
```

## Example Response *(as JSON)*

```json
{
  "Data": [
    {
      "AccountId": 158,
      "AccountNumber": "DE00000141",
      "CardId": "419096",
      "DayTimeRestrictionDescription": "0000 - Success",
      "DayTimeRestrictionStatus": "Success",
      "LocationRestrictionDescription": "0000 - Success",
      "LocationRestrictionStatus": "Success",
      "PAN": "7002141909591602074",
      "ProductRestrictionDescription": "0000 - Success",
      "ProductRestrictionStatus": "Success",
      "UsageRestrictionDescription": "0000 - Success",
      "UsageRestrictionStatus": "Success"
    }
  ],
  "RequestId": "598e9f58-a397-4914-9548-6217d3c2f9d3",
  "Status": "SUCCESS"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Create Bundle

This API enables clients to create a new card bundle and apply restrictions.

#### Supported operations

* Create bundle and include mandatory -
  * Usage, day/time, product and location restrictions
  * List of cards to add to bundle
* Create bundle and include optional identifier of bundle in external system

#### Validation rules

The following are the key validation rules with the associated error codes for failed validation-

* `7012` - At least one card must be added to the bundle
* `7011` - The total number of cards passed in the input must be 500 or less.
* `7014` - All the cards passed in the input are part of the selected account.
* `7013` - At least one restriction must be applied to the bundle i.e. either of usage, day/time, location or product restriction.
* `7005` - Day time restriction cannot be set to restrict the use of a card on all days of the week.
* `7000` - Usage restriction of the bundle is not open ended i.e. all the limits within the usage restriction must not be set to 0/null.
* `7004` - In the usage restrictions, the limits per transaction should be less than or equal to Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly. Exception being 0/blank will be skipped, i.e. Daily value should be less than equal to Monthly value if Weekly value is 0/blank.
* `0007` - Error returned if request parameters fail validation e.g. mandatory check.

```php
function createBundle(string $requestId, ?CreateBundleRequest $body = null): CreateBundleRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CreateBundleRequest`](../../doc/models/create-bundle-request.md) | Body, Optional | CreateBundle request body |

## Response Type

[`CreateBundleRes`](../../doc/models/create-bundle-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->createBundle($requestId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Update Bundle

This API enables clients to update an existing card bundle and its associated restrictions.

#### Supported operations

* Add new cards to an existing bundle
* Remove cards from existing bundle
* Update restrictions applied to existing bundle

The following are the key validation rules with the associated error codes for failed validation-

#### Validation rules

* `9007` - The cards must exist in the cards platform for adding or removing cards.
* `7014` - All the cards passed in the input are part of the selected account.
* `7018` - All the cards passed in the input are part of the selected bundle.
* `7011` - The total number of cards passed in the input must be 500 or less.
* `7012` - The action to remove cards should not result in removing all the cards from the bundle.
* `7016` - At least one restriction must be modified for â€œUpdateâ€ request action.
* `7013` - All restrictions cannot be marked for â€œResetâ€ for â€œUpdateâ€ request action.
* `7005` - Day time restriction cannot be set to restrict the use of a card on all days of the week. This validation is applicable for Update request action.
* `7000` - Usage restriction of the bundle is not open ended i.e., all the limits within the usage restriction must not be set to 0/null. This validation is applicable for Update request action.
* `7004` - In the usage restrictions, the limits per transaction should be less than or equal to Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly. Exception being 0/blank will be skipped, i.e., Daily value should be less than equal to Monthly value if Weekly value is 0/blank. This validation is applicable for Update request action.
* `0007` - Error returned if request parameters fail validation e.g. at least one card must be provided in the input.

```php
function updateBundle(string $requestId, ?UpdateBundleRequest $body = null): UpdateBundleRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?UpdateBundleRequest`](../../doc/models/update-bundle-request.md) | Body, Optional | Update Bundle request body |

## Response Type

[`UpdateBundleRes`](../../doc/models/update-bundle-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->updateBundle($requestId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Delete Bundle

This API enables clients to delete an existing card bundle in the Shell Card Platform. Once the card bundle is deleted the usage and product restrictions of the cards that were present in the bundle will be reset based on the request.

#### Supported operations

* Delete card bundle by bundle Id

#### Validation rules

The following are the key validation rules with the associated error codes for failed validation-

* `7019` - The given card bundle is not available in the Shell Card Platform.
* `0007` - Error returned if request parameters fail validation e.g. mandatory check.

```php
function deleteBundle(string $requestId, ?DeleteBundleRequest $body = null): DeleteBundleResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?DeleteBundleRequest`](../../doc/models/delete-bundle-request.md) | Body, Optional | Update Bundle request body |

## Response Type

[`DeleteBundleResponse`](../../doc/models/delete-bundle-response.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = DeleteBundleRequestBuilder::init(
    '123'
)
    ->colCoCode(86)
    ->colCoId(1)
    ->payerNumber('PH50000843')
    ->payerId(853)
    ->accountId(854)
    ->accountNumber('PH50000844')
    ->build();

$result = $restrictionController->deleteBundle(
    $requestId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Summary of Bundles

This API allows clients to get a summary of card bundles associated with Payer/Account. This API will return the basic bundle details including card and restriction details. Optionally the API will also include a count of cards that are not associated with the bundle but returned by the search criteria.

Note - to include count of cards of an account that are not associated with any bundles, in the input parameter SearchCardBundles either pass all the bundles of the account in the list or pass only account with bundle id left blank/null.

#### Supported operations

* Get summary of bundles by list of bundle Ids

```php
function summaryOfBundles(string $requestId, ?SummaryofbundlerRequest $body = null): SummaryofbundleRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SummaryofbundlerRequest`](../../doc/models/summaryofbundler-request.md) | Body, Optional | Summary of Bundle request body |

## Response Type

[`SummaryofbundleRes`](../../doc/models/summaryofbundle-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = SummaryofbundlerRequestBuilder::init()->build();

$result = $restrictionController->summaryOfBundles(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "PayerId": 101,
      "PayerNumber": "PN456789",
      "AccountId": 202,
      "AccountNumber": "789456123",
      "CountOfCardsNotInBundle": 2,
      "CardBundles": {
        "BundleId": "1",
        "ExternalBundleId": "11",
        "Description": "Fuel Card Bundle",
        "TotalCards": 10
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Restriction Account

This API allows setting or updating the usage restrictions of an existing account.

Then validation rules applied for this API.

•    The account exists.
•    Day time restriction cannot be set to restrict the use of a card, under the account, on all days of the week.
•    Either of the usage, daytime or location is either marked for reset or new restriction values provided for the account.
•    In usage restrictions, the limits per transaction should be less than or equal to Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly. Exception being 0/blank will be skipped, i.e., Daily value should be less than equal to Monthly value if Weekly value is 0/blank.

```php
function restrictionAccount(string $requestId, ?AccountRestrictionRequest $body = null): AccountRestrictionRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?AccountRestrictionRequest`](../../doc/models/account-restriction-request.md) | Body, Optional | Account Restriction request body |

## Response Type

[`AccountRestrictionRes`](../../doc/models/account-restriction-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->restrictionAccount($requestId);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "AccountId": 303,
      "AccountNumber": "ACC789456123",
      "UsageRestrictionStatus": "Success",
      "UsageRestrictionDescription": "Usage restrictions applied successfully"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Search Account Limit

This API will allow user to get account level limits for the given account. It returns the velocity limits if its overridden at the account else the values will be null/empty.

```php
function searchAccountLimit(string $requestId, ?SearchAccountLimitRequest $body = null): SearchAccountLimitRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SearchAccountLimitRequest`](../../doc/models/search-account-limit-request.md) | Body, Optional | Search Account Limit RequestBody |

## Response Type

[`SearchAccountLimitRes`](../../doc/models/search-account-limit-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = SearchAccountLimitRequestBuilder::init()
    ->colCoCode(32)
    ->payerId(1240)
    ->accountId(1232)
    ->build();

$result = $restrictionController->searchAccountLimit(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "233e4567-e89b-12d3-a456-426614174000",
  "Status": "SUCCESS",
  "Data": [
    {
      "AccountId": 12,
      "AccountNumber": "BE00000009",
      "ReferenceProduct": "030",
      "RestrictionCondition": "DECLINE",
      "VelocityLimits": [
        {
          "Accumulation": 0,
          "Balance": 10,
          "Limit": 10,
          "Override": true,
          "Period": "DAILY",
          "Type": "VOLUME"
        },
        {
          "Accumulation": 0,
          "Balance": 146,
          "Limit": 146,
          "Override": true,
          "Period": "WEEKLY",
          "Type": "VOLUME"
        },
        {
          "Accumulation": 0,
          "Balance": 5,
          "Limit": 5,
          "Override": true,
          "Period": "DAILY",
          "Type": "COUNT"
        }
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |


# Bundle Details

This API allows to get the details of a specific card bundle. It returns the bundle basic details along with the cards in the bundle and restrictions applied on them.

```php
function bundleDetails(string $requestId, ?BudleDetailsReq $body = null): BundleDetails
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?BudleDetailsReq`](../../doc/models/budle-details-req.md) | Body, Optional | Bundle Details Request body |

## Response Type

[`BundleDetails`](../../doc/models/bundle-details.md)

## Example Usage

```php
$requestId = 'RequestId8';

$result = $restrictionController->bundleDetails($requestId);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "233e4567-e89b-12d3-a456-426614174000",
  "Status": "SUCCESS",
  "Data": [
    {
      "AccountId": 56,
      "AccountNumber": "BE00000050",
      "BundleId": "124",
      "Description": "Fleet fuel card bundle for Belgium",
      "ExternalBundleId": "POC2TestBundleUpdate1",
      "PayerId": 56,
      "PayerNumber": "BE00000050",
      "Pans": [
        "7002091557439980713"
      ],
      "Restrictions": {
        "DayTimeRestriction": {
          "Friday": true,
          "Monday": false,
          "Saturday": true,
          "Sunday": true,
          "Thursday": false,
          "TimeFrom": "03:10:00",
          "TimeTo": "12:00:00",
          "Tuesday": false,
          "Wednesday": false
        },
        "LocationRestriction": {
          "CountryRestrictions": {
            "Countries": [
              "250"
            ],
            "Exclusive": true
          },
          "NetworkRestrictions": [
            {
              "Country": "826",
              "Exclusive": false,
              "Networks": [
                "0002003826"
              ]
            }
          ],
          "PartnerSiteRestrictions": [],
          "ShellSiteRestrictions": []
        },
        "ProductRestriction": {
          "FuelSetId": 0,
          "FuelSetName": "",
          "NonFuelSets": null,
          "ProductGroups": [],
          "Products": [
            "010",
            "011"
          ],
          "PurchaseCategoryCode": "1",
          "PurchaseCategoryId": 113
        },
        "UsageRestriction": {
          "AnnualSpend": 0,
          "AnnualTransactionCount": 0,
          "AnnualVolume": 0,
          "DailySpend": 1000,
          "DailyTransactionCount": 3,
          "DailyVolume": 10,
          "LifeTimeSpend": 0,
          "LifeTimeTransactionCount": 0,
          "LifeTimeVolume": 0,
          "MonthlySpend": 14000,
          "MonthlyTransactionCount": 20,
          "MonthlyVolume": 1000,
          "PerTransactionSpend": 800,
          "PerTransactionVolume": 10,
          "WeeklySpend": 0,
          "WeeklyTransactionCount": 9,
          "WeeklyVolume": 100,
          "AnnualSpendOverride": false,
          "DailySpendOverride": true,
          "LifeTimeSpendOverride": false,
          "MonthlySpendOverride": true,
          "PerTransactionSpendOverride": true,
          "WeeklySpendOverride": false,
          "DailyVolumeOverride": true,
          "WeeklyVolumeOverride": true,
          "MonthlyVolumeOverride": true,
          "PerTransactionVolumeOverride": true,
          "AnnualVolumeOverride": false,
          "LifeTimeVolumeOverride": false,
          "DailyTransactionOverride": true,
          "WeeklyTransactionOverride": true,
          "MonthlyTransactionOverride": true,
          "AnnualTransactionOverride": false,
          "LifeTimeTransactionOverride": false
        }
      },
      "RestrictionCurrencyCode": "EUR",
      "RestrictionCurrencySymbol": "€"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 403 | Forbidden | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`ErrorObjectErrorException`](../../doc/models/error-object-error-exception.md) |

