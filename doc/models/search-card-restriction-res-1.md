
# Search Card Restriction Res 1

## Structure

`SearchCardRestrictionRes1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SearchCardRestrictionRes[])`](../../doc/models/search-card-restriction-res.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "RequestId": "RequestId4",
      "cards": [
        {
          "CardId": 134,
          "PAN": "PAN4",
          "ExpiryDate": "ExpiryDate4",
          "StatusId": 102,
          "StatusDescription": "StatusDescription0"
        },
        {
          "CardId": 134,
          "PAN": "PAN4",
          "ExpiryDate": "ExpiryDate4",
          "StatusId": 102,
          "StatusDescription": "StatusDescription0"
        }
      ],
      "Restrictions": {
        "UsageRestrictions": {
          "DailySpend": 7.72,
          "WeeklySpend": 10.22,
          "MonthlySpend": 48.66,
          "PerTransactionSpend": 17.28,
          "AnnualSpend": 223.08
        },
        "DayTimeRestrictions": {
          "Monday": false,
          "Tuesday": false,
          "Wednesday": false,
          "Thursday": false,
          "Friday": false
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
        "LocationRestrictions": {
          "CountryRestrictions": {
            "Countries": [
              "Countries7"
            ],
            "Exclusive": false
          },
          "NetworkRestrictions": [
            {
              "Country": "Country6",
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ],
              "Exclusive": false
            },
            {
              "Country": "Country6",
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ],
              "Exclusive": false
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
        }
      },
      "Error": {
        "Code": "Code4",
        "Description": "Description2"
      }
    },
    {
      "RequestId": "RequestId4",
      "cards": [
        {
          "CardId": 134,
          "PAN": "PAN4",
          "ExpiryDate": "ExpiryDate4",
          "StatusId": 102,
          "StatusDescription": "StatusDescription0"
        },
        {
          "CardId": 134,
          "PAN": "PAN4",
          "ExpiryDate": "ExpiryDate4",
          "StatusId": 102,
          "StatusDescription": "StatusDescription0"
        }
      ],
      "Restrictions": {
        "UsageRestrictions": {
          "DailySpend": 7.72,
          "WeeklySpend": 10.22,
          "MonthlySpend": 48.66,
          "PerTransactionSpend": 17.28,
          "AnnualSpend": 223.08
        },
        "DayTimeRestrictions": {
          "Monday": false,
          "Tuesday": false,
          "Wednesday": false,
          "Thursday": false,
          "Friday": false
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
        "LocationRestrictions": {
          "CountryRestrictions": {
            "Countries": [
              "Countries7"
            ],
            "Exclusive": false
          },
          "NetworkRestrictions": [
            {
              "Country": "Country6",
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ],
              "Exclusive": false
            },
            {
              "Country": "Country6",
              "Networks": [
                "Networks3",
                "Networks4",
                "Networks5"
              ],
              "Exclusive": false
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
        }
      },
      "Error": {
        "Code": "Code4",
        "Description": "Description2"
      }
    }
  ]
}
```

