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
* [Summaryofbundles](../../doc/controllers/restriction.md#summaryofbundles)
* [Restriction Account](../../doc/controllers/restriction.md#restriction-account)
* [Search Account Limit](../../doc/controllers/restriction.md#search-account-limit)
* [Bundledetails](../../doc/controllers/restriction.md#bundledetails)


# Search Card Restriction

This API will allows querying card details including the day/time and product restrictions.

#### Supported operations

* Search by list of cards or bundle
* Include card bundle details (optional)

```php
function searchCardRestriction(
    string $apikey,
    string $requestId,
    ?SearchCardRestrictionReq $body = null
): SearchCardRestrictionRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SearchCardRestrictionReq`](../../doc/models/search-card-restriction-req.md) | Body, Optional | Restriction search card request body |

## Response Type

[`SearchCardRestrictionRes`](../../doc/models/search-card-restriction-res.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$result = $restrictionController->searchCardRestriction(
    $apikey,
    $requestId
);
```

## Example Response *(as JSON)*

```json
{
  "Cards": [
    {
      "BundleId": null,
      "Restrictions": {
        "DayTimeRestrictions": {
          "Friday": false,
          "Monday": false,
          "Saturday": true,
          "Sunday": true,
          "Thursday": true,
          "TimeFrom": "02:00:00",
          "TimeTo": "19:00:00",
          "Tuesday": false,
          "Wednesday": false
        },
        "LocationRestrictions": null,
        "ProductRestrictions": {
          "FuelSetId": 0,
          "FuelSetName": null,
          "NonFuelSets": null,
          "ProductGroups": [
            {
              "IsDefault": true,
              "IsFuelType": true,
              "Name": "Electric",
              "ProductGroupId": "P100",
              "Products": [
                {
                  "Description": "Electric Charge",
                  "GlobalProductCode": "018"
                },
                {
                  "Description": "Electric Charge - Time",
                  "GlobalProductCode": "087"
                },
                {
                  "Description": "Electric Charge - Home",
                  "GlobalProductCode": "088"
                },
                {
                  "Description": "DC Rapid eCharge",
                  "GlobalProductCode": "486"
                },
                {
                  "Description": "eCharge Connection Fee",
                  "GlobalProductCode": "489"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": true,
              "Name": "Standard Diesel",
              "ProductGroupId": "P105",
              "Products": [
                {
                  "Description": "Diesel AGO",
                  "GlobalProductCode": "030"
                },
                {
                  "Description": "GTL",
                  "GlobalProductCode": "031"
                },
                {
                  "Description": "Fuel Economy Diesel (AGO Low Sulphur)",
                  "GlobalProductCode": "032"
                },
                {
                  "Description": "Two Stroke",
                  "GlobalProductCode": "035"
                },
                {
                  "Description": "HVO-100",
                  "GlobalProductCode": "036"
                },
                {
                  "Description": "Industrial GasOil",
                  "GlobalProductCode": "037"
                },
                {
                  "Description": "AdBlue Bulk",
                  "GlobalProductCode": "038"
                },
                {
                  "Description": "AdBlue Packed",
                  "GlobalProductCode": "039"
                },
                {
                  "Description": "HVO Blended",
                  "GlobalProductCode": "505"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": true,
              "Name": "Standard Petrol",
              "ProductGroupId": "P106",
              "Products": [
                {
                  "Description": "Unspecified Unleaded",
                  "GlobalProductCode": "020"
                },
                {
                  "Description": "Unleaded - High octane",
                  "GlobalProductCode": "021"
                },
                {
                  "Description": "Unleaded - Medium octane",
                  "GlobalProductCode": "022"
                },
                {
                  "Description": "Unleaded - Low octane",
                  "GlobalProductCode": "023"
                },
                {
                  "Description": "Unleaded Environmental",
                  "GlobalProductCode": "024"
                },
                {
                  "Description": "Leaded and Lead Replacement",
                  "GlobalProductCode": "025"
                },
                {
                  "Description": "Super Ethanol – E85",
                  "GlobalProductCode": "502"
                },
                {
                  "Description": "Super Ethanol – E85",
                  "GlobalProductCode": "502"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": false,
              "Name": "Alcholic Drink",
              "ProductGroupId": "P107",
              "Products": [
                {
                  "Description": "Alcoholic drinks",
                  "GlobalProductCode": "073"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": false,
              "Name": "Car Cleaning",
              "ProductGroupId": "P109",
              "Products": [
                {
                  "Description": "Automatic Carwash",
                  "GlobalProductCode": "065"
                },
                {
                  "Description": "Carwash Subscription",
                  "GlobalProductCode": "465"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": false,
              "Name": "Controlled Road Services",
              "ProductGroupId": "P110",
              "Products": [
                {
                  "Description": "Public transport and taxi",
                  "GlobalProductCode": "063"
                },
                {
                  "Description": "Others",
                  "GlobalProductCode": "080"
                },
                {
                  "Description": "Car hire",
                  "GlobalProductCode": "081"
                },
                {
                  "Description": "Hotels",
                  "GlobalProductCode": "082"
                },
                {
                  "Description": "Restaurant",
                  "GlobalProductCode": "083"
                },
                {
                  "Description": "Telephone",
                  "GlobalProductCode": "089"
                }
              ],
              "ReferenceId": 0
            },
            {
              "IsDefault": true,
              "IsFuelType": false,
              "Name": "Food and Drink",
              "ProductGroupId": "P111",
              "Products": [
                {
                  "Description": "Food (low VAT)",
                  "GlobalProductCode": "071"
                },
                {
                  "Description": "Non-alcoholic drinks",
                  "GlobalProductCode": "072"
                },
                {
                  "Description": "Food (high VAT)",
                  "GlobalProductCode": "075"
                }
              ],
              "ReferenceId": 0
            }
          ],
          "Products": [
            {
              "Description": "Diesel AGO",
              "GlobalProductCode": "030"
            },
            {
              "Description": "GTL",
              "GlobalProductCode": "031"
            },
            {
              "Description": "Fuel Economy Diesel (AGO Low Sulphur)",
              "GlobalProductCode": "032"
            },
            {
              "Description": "Two Stroke",
              "GlobalProductCode": "035"
            },
            {
              "Description": "HVO-100",
              "GlobalProductCode": "036"
            },
            {
              "Description": "Industrial GasOil",
              "GlobalProductCode": "037"
            },
            {
              "Description": "AdBlue Bulk",
              "GlobalProductCode": "038"
            },
            {
              "Description": "AdBlue Packed",
              "GlobalProductCode": "039"
            },
            {
              "Description": "Automatic Carwash",
              "GlobalProductCode": "065"
            },
            {
              "Description": "Electric Charge",
              "GlobalProductCode": "018"
            },
            {
              "Description": "Electric Charge - Time",
              "GlobalProductCode": "087"
            },
            {
              "Description": "Electric Charge - Home",
              "GlobalProductCode": "088"
            },
            {
              "Description": "Unspecified Unleaded",
              "GlobalProductCode": "020"
            },
            {
              "Description": "Unleaded - High octane",
              "GlobalProductCode": "021"
            },
            {
              "Description": "Unleaded - Medium octane",
              "GlobalProductCode": "022"
            },
            {
              "Description": "Unleaded - Low octane",
              "GlobalProductCode": "023"
            },
            {
              "Description": "Unleaded Environmental",
              "GlobalProductCode": "024"
            },
            {
              "Description": "Leaded and Lead Replacement",
              "GlobalProductCode": "025"
            },
            {
              "Description": "Public transport and taxi",
              "GlobalProductCode": "063"
            },
            {
              "Description": "Others",
              "GlobalProductCode": "080"
            },
            {
              "Description": "Car hire",
              "GlobalProductCode": "081"
            },
            {
              "Description": "Hotels",
              "GlobalProductCode": "082"
            },
            {
              "Description": "Restaurant",
              "GlobalProductCode": "083"
            },
            {
              "Description": "Telephone",
              "GlobalProductCode": "089"
            },
            {
              "Description": "Food (low VAT)",
              "GlobalProductCode": "071"
            },
            {
              "Description": "Non-alcoholic drinks",
              "GlobalProductCode": "072"
            },
            {
              "Description": "Food (high VAT)",
              "GlobalProductCode": "075"
            },
            {
              "Description": "Alcoholic drinks",
              "GlobalProductCode": "073"
            }
          ],
          "PurchaseCategoryCode": "null",
          "PurchaseCategoryId": 0
        },
        "UsageRestrictions": null
      },
      "RestrictionCurrencyCode": null,
      "RestrictionCurrencySymbol": null,
      "AccountId": 449,
      "AccountName": "Test Card Customer Do Not Block",
      "AccountNumber": "SG00000446",
      "AccountShortName": "Test Card Customer Do Not Block",
      "CardId": 6215,
      "CardTypeCode": "7002872",
      "CardTypeId": 15,
      "CardTypeName": "SG FLE NAT SIN R2",
      "ColCoCurrencyCode": "SGD",
      "ColCoCurrencySymbol": "$",
      "CurrencyCode": "SGD",
      "CurrencySymbol": "$",
      "DriverName": "P1D3 FEB 16TH",
      "ExpiryDate": "20270430",
      "IsCRT": false,
      "IsFleet": true,
      "IsInternational": false,
      "IsNational": true,
      "IsPartnerSitesIncluded": true,
      "IsShellSitesOnly": false,
      "IssueDate": "20240301",
      "IssueNumber": 1,
      "IsSuperseded": false,
      "IsVirtualCard": false,
      "PAN": "7002872532799004748",
      "PurchaseCategoryCode": "1",
      "PurchaseCategoryId": 55,
      "PurchaseCategoryName": "1 - All Fuel Products",
      "StatusDescription": "Active",
      "StatusId": 1,
      "VRN": "1234",
      "MediumTypeID": 1,
      "MediumType": "Fuel Card"
    }
  ],
  "Error": {
    "Code": "0000",
    "Description": "Unable to fetch Usage Restriction / Day Time Restriction / Location Restriction details for few/all the cards."
  },
  "RequestId": "91bbb8f0-ec5c-473b-aa3a-a4eeca5ad594"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`FleetmanagementV2RestrictionSearchcard401ErrorException`](../../doc/models/fleetmanagement-v2-restriction-searchcard-401-error-exception.md) |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | [`FleetmanagementV2RestrictionSearchcard500ErrorException`](../../doc/models/fleetmanagement-v2-restriction-searchcard-500-error-exception.md) |


# Apply Restriction

The Card Limit and Restriction API is REST-based and employs Basic and ApiKey authentication. The API endpoints accept JSON-encoded request bodies, return JSON-encoded responses and use standard HTTP response codes.

All resources are located in the Shell Card Platform.  The Shell Card Platform is the overall platform that encompasses all the internal Shell systems used to manage resources. The internal workings of the platform are not important when interacting with the API. However, it is worth noting that the platform uses a microservice architecture to communicate with various backend systems and some API calls are processed asynchronously.

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
function applyRestriction(
    string $apikey,
    string $requestId,
    ?CardRestrictionReq $body = null
): CardRestrictionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CardRestrictionReq`](../../doc/models/card-restriction-req.md) | Body, Optional | Card Restriction request body |

## Response Type

[`CardRestrictionResponse`](../../doc/models/card-restriction-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$result = $restrictionController->applyRestriction(
    $apikey,
    $requestId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


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
function createBundle(
    string $apikey,
    string $requestId,
    ?CreateBundleRequest $body = null
): CreateBundleResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CreateBundleRequest`](../../doc/models/create-bundle-request.md) | Body, Optional | CreateBundle request body |

## Response Type

[`CreateBundleResponse`](../../doc/models/create-bundle-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$result = $restrictionController->createBundle(
    $apikey,
    $requestId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


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
function updateBundle(
    string $apikey,
    string $requestId,
    ?UpdateBundleRequest $body = null
): UpdateBundleResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?UpdateBundleRequest`](../../doc/models/update-bundle-request.md) | Body, Optional | Update Bundle request body |

## Response Type

[`UpdateBundleResponse`](../../doc/models/update-bundle-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$result = $restrictionController->updateBundle(
    $apikey,
    $requestId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Delete Bundle

This API enables clients to delete an existing card bundle in the Shell Card Platform. Once the card bundle is deleted the usage and product restrictions of the cards that were present in the bundle will be reset based on the request.

#### Supported operations

* Delete card bundle by bundle Id

#### Validation rules

The following are the key validation rules with the associated error codes for failed validation-

* `7019` - The given card bundle is not available in the Shell Card Platform.
* `0007` - Error returned if request parameters fail validation e.g. mandatory check.

```php
function deleteBundle(
    string $apikey,
    string $requestId,
    ?DeleteBundleRequest $body = null
): DeleteBundleResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?DeleteBundleRequest`](../../doc/models/delete-bundle-request.md) | Body, Optional | Update Bundle request body |

## Response Type

[`DeleteBundleResponse`](../../doc/models/delete-bundle-response.md)

## Example Usage

```php
$apikey = 'apikey6';

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
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "Error": {
    "Description": "Success",
    "Code": "0000"
  },
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


# Summaryofbundles

This API allows clients to get a summary of card bundles associated with Payer/Account. This API will return the basic bundle details including card and restriction details. Optionally the API will also include a count of cards that are not associated with the bundle but returned by the search criteria.

Note - to include count of cards of an account that are not associated with any bundles, in the input parameter SearchCardBundles either pass all the bundles of the account in the list or pass only account with bundle id left blank/null.

#### Supported operations

* Get summary of bundles by list of bundle Ids

```php
function summaryofbundles(
    string $apikey,
    string $requestId,
    ?SummaryofbundlerRequest $body = null
): SummaryofbundleResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SummaryofbundlerRequest`](../../doc/models/summaryofbundler-request.md) | Body, Optional | Summary of Bundle request body |

## Response Type

[`SummaryofbundleResponse`](../../doc/models/summaryofbundle-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = SummaryofbundlerRequestBuilder::init()->build();

$result = $restrictionController->summaryofbundles(
    $apikey,
    $requestId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Restriction Account

This API allows setting or updating the usage restrictions of an existing account.

Then validation rules applied for this API.

•    The account exists.
•    Day time restriction cannot be set to restrict the use of a card, under the account, on all days of the week.
•    Either of the usage, daytime or location is either marked for reset or new restriction values provided for the account.
•    In usage restrictions, the limits per transaction should be less than or equal to Daily, Daily should be less than or equal to Weekly, Weekly should be less than or equal to Monthly. Exception being 0/blank will be skipped, i.e., Daily value should be less than equal to Monthly value if Weekly value is 0/blank.

```php
function restrictionAccount(
    string $apikey,
    string $requestId,
    ?AccountRestrictionRequest $body = null
): AccountRestrictionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?AccountRestrictionRequest`](../../doc/models/account-restriction-request.md) | Body, Optional | Account Restriction request body |

## Response Type

[`AccountRestrictionResponse`](../../doc/models/account-restriction-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$result = $restrictionController->restrictionAccount(
    $apikey,
    $requestId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |


# Search Account Limit

This API will allow user to get account level limits for the given account. It returns the velocity limits if its overridden at the account else the values will be null/empty.

```php
function searchAccountLimit(
    string $apikey,
    string $requestId,
    ?SearchAccountLimitRequest $body = null
): SearchAccountLimitResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?SearchAccountLimitRequest`](../../doc/models/search-account-limit-request.md) | Body, Optional | Search Account Limit RequestBody |

## Response Type

[`SearchAccountLimitResponse`](../../doc/models/search-account-limit-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = SearchAccountLimitRequestBuilder::init()
    ->colCoCode(32)
    ->payerId(1240)
    ->accountId(1232)
    ->build();

$result = $restrictionController->searchAccountLimit(
    $apikey,
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "2ace3991-5d03-4a68-ac68-ca9119b25101",
  "AccountId": 1232,
  "ReferenceProduct": "021",
  "RestrictionCondition": "DECLINE_ALERT",
  "VelocityLimits": [
    {
      "Type": "VALUE",
      "Period": "MONTHLY",
      "Limit": 330,
      "Accumulation": 2220,
      "Balance": 230,
      "Override": true,
      "ProductGroup": "RoadSvc",
      "Threshold": 3230
    }
  ],
  "Error": {
    "Code": "0000",
    "Description": "Success"
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


# Bundledetails

This API allows to get the details of a specific card bundle. It returns the bundle basic details along with the cards in the bundle and restrictions applied on them.

```php
function bundledetails(
    string $apikey,
    string $requestId,
    ?BudleDetailsRequest $body = null
): BundleDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `apikey` | `string` | Header, Required | This is the API key of the specific environment which needs to be passed by the client. |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?BudleDetailsRequest`](../../doc/models/budle-details-request.md) | Body, Optional | Bundle Details Request body |

## Response Type

[`BundleDetailsResponse`](../../doc/models/bundle-details-response.md)

## Example Usage

```php
$apikey = 'apikey6';

$requestId = 'RequestId8';

$body = BudleDetailsRequestBuilder::init()
    ->colCoCode(32)
    ->payerNumber('CZ00000927')
    ->accountNumber('CZ00000927')
    ->bundleId('1060')
    ->build();

$result = $restrictionController->bundledetails(
    $apikey,
    $requestId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request  due to something that is perceived to be a client<br>error (e.g., malformed request syntax, invalid<br>request message framing, or deceptive request routing). | `ApiException` |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | `ApiException` |
| 403 | The server understood the request but refuses to authorize it. | `ApiException` |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | `ApiException` |
| 500 | The server encountered an unexpected condition the prevented it from fulfilling the request. | `ApiException` |

